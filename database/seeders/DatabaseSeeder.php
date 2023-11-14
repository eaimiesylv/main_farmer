<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        
        User::create([
            
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'user_role' => 1, //admin
            'created_at'=> Now(),
            'updated_at' => Now()
           
        ]);
        User::create([
            
            'email' => 'investor@gmail.com',
            'password' => bcrypt('12345678'),
            'user_role' => 2, //investor
            'created_at'=> Now(),
            'updated_at' => Now()
           
        ]);
        User::create([
            
            'email' => 'agricbusiness@gmail.com',
            'password' => bcrypt('12345678'),
            'user_role' => 3, //agric business
            'created_at'=> Now(),
            'updated_at' => Now()
           
        ]);
        //Create Users
        User::factory(3)->create();
        \App\Models\InvestorDetail::factory(3)->create();
        \App\Models\AgricBusiness::factory(3)->create();

    }
}
