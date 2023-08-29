<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Franchisee;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Create Admin user
        //Admin Password is password it is created by default on the User Model
        User::create([
            'franchisee_id' => 1,
            'name' => 'admin',
            'email' => 'admin@milandetailsystems.internal',
            'password' => bcrypt('P@ssword#50MDS'),
            'type' => 1, //for Franchise
            'role_id' => 1, //1 for admin
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //Create Users
        User::factory(3)->create();

        //Create Franchise Product and Services
        \App\Models\FranchiseProductService::factory(10)->create();
        
        //Create the Franchisee Profile or Company details
        Franchisee::factory(10)->create()->each(function($franchisee){
            $user = User::inRandomOrder()->first();
            $franchisee->user()->associate($user)->save();

        });

        //Create Franchisee Product and Services
        \App\Models\FranchiseeProductService::factory(10)->create()->each(function($franchiseeProductService){

            $franchiseProductService =  \App\Models\FranchiseProductService::inRandomOrder()->first();
            $franchisee = Franchisee::inRandomOrder()->first();

            $franchiseeProductService->franchise_product_service()->associate($franchiseProductService)->save();
            $franchiseeProductService->franchisee()->associate($franchisee)->save();

        });
       
        //Create Customer Profile
        \App\Models\Customer::factory(10)->create()->each(function($Customer){

            $user = User::inRandomOrder()->first();
            $franchisee = Franchisee::inRandomOrder()->first();

            $Customer->user()->associate($user)->save();
            $Customer->franchisee()->associate($franchisee)->save();

        });

        //Create Franchisee Agents
        \App\Models\FranchiseeAgent::factory(10)->create()->each(function($agent){
            $user=User::inRandomOrder()->first();
            $franchisee= Franchisee::inRandomOrder()->first();

            $agent->user()->associate($user)->save();
            $agent->franchisee()->associate($franchisee)->save();

        });

        // Create Appointment for Customer
        \App\Models\Appointment::factory(10)->create()->each(function($appointment){
            $franchisee=Franchisee::inRandomOrder()->first();
            $customer =\App\Models\Customer::inRandomOrder()->first();
            $agent=\App\Models\FranchiseeAgent::inRandomOrder()->first();

            $appointment->franchisee()->associate($franchisee)->save();
            $appointment->customer()->associate($customer)->save();
            $appointment->agent()->associate($agent)->save();

        });

    }
}
