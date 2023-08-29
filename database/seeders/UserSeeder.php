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
            'franchisee_id' => 1,
            'name' => 'admin',
            'email' => 'admin@milandetailsystems.internal',
            'password' => bcrypt('P@ssword#50MDS'),
            'type' => 1, //for Franchise
            'role_id' => 1, //1 for admin
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::factory(10)->create();
    }
}
