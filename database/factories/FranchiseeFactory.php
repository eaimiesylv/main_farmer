<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Franchisee>
 */
class FranchiseeFactory extends Factory
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
            'company' => $this->faker->company,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'postal_code' => $this->faker->postcode,
            'country' => $this->faker->country,
            'phone1' => $this->faker->phoneNumber,
            'phone2' => $this->faker->phoneNumber,
            'email1' => $this->faker->email,
            'email2' => $this->faker->email,
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'timezone' => $this->faker->timezone,
        ];
    }
}
