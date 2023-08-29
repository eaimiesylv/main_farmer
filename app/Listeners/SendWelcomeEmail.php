<?php

namespace App\Listeners;

use App\Events\WelcomeEmailSent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Crypt;



class SendWelcomeEmail
{
    //resendType is either registration or invitation
    public function handle(WelcomeEmailSent $event, $resendHash=null)
    {
       //this is where the details are hash
       
        try {
            //hash is created from the model during initial invite
         
            $hash=($resendHash==null)?Crypt::encryptString($event->userDetail->asset_id):$resendHash;
            //pass the hash and type to the WelcomeMail class
           
            Mail::to($event->userDetail->email)->send(new WelcomeMail($hash, $event->sendType));
           
           
        } catch (\Throwable $e) {
            throw $e;
        }
    }
}
