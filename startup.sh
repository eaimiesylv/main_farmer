#!/bin/bash
cd /home/site/wwwroot
rm .env && touch .env
for var in $(compgen -v APPSETTING_); do
    echo "${var#APPSETTING_}=${!var}" >> .env
done

# application readiness
echo "" > /home/site/wwwroot/storage/logs/laravel.log

# system readiness
apt-get install curl -yqq

# nginx configurations
cd /home/site/wwwroot
cp default /etc/nginx/sites-available/default
service nginx reload

# install application data & dependencies
php artisan optimize
php artisan migrate:fresh --seed --force
php artisan sentry:test

# post application readiness
cat /home/site/wwwroot/storage/logs/laravel.log

# telescope
php artisan telescope:install
php artisan migrate

# install and start cron jobs for Laravel scheduler
apt-get install cron -yqq
service cron start
env >> /etc/environment
(crontab -l 2>/dev/null; echo "* * * * * cd /home/site/wwwroot && /usr/local/bin/php artisan schedule:run >> /dev/null 2>&1")|crontab

exec /usr/bin/supervisord -c /etc/supervisor/conf.d/laravel-worker.conf