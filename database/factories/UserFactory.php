<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $types = [ 1,2];
        $roles = [1,2,3,4];
        return [
            'asset_id' =>Str::uuid(),
            'name' => $this->faker->firstName . '  '.  $this->faker->lastName,
            'email' => $this->faker->lastName . rand(1,100) . '@' . $this->faker->freeEmailDomain,
            'phone' => fake()->phoneNumber,
            'address' => fake()->streetAddress,
            'city' => fake()->city,
            'state' => 'Florida',
            'postal_code' => fake()->postcode,
            'country' => 'USA',
            'verified_at' => now(),
            'type' => $types[array_rand($types)],
            'role_id' => $roles[array_rand($roles)],
            'status' => 'active',
            'avatar' => fake()->imageUrl(640, 480, 'people', true),
            'timezone' => fake()->timezone,
            
        ];
       
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
