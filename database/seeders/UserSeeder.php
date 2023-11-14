<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           
            'email' => 'admin@milandetailsystems.internal',
            'password' => bcrypt('P@ssword#50MDS'),
            'status'=>1

        ]);
       
    }
}
