<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asset_id' =>Str::uuid(),
            'user_id'=>\App\Models\User::factory(),
            'franchisee_id' =>\App\Models\Franchisee::factory(),
            'pin' =>time(),
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'timezone' => $this->faker->timezone,
        ];
    }
}