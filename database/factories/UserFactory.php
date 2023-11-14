<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

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
        $types = [1,2,3];
       
        return [
            'email' => $this->faker->unique()->safeEmail,
            'fullname' => $this->faker->name,
            'company_website' => $this->faker->url,
            'phone_number' => $this->faker->phoneNumber,
            'contact_person' => $this->faker->name,
            'password' => bcrypt('password'), 
            'email_verified_at' => now(),
            'last_login_at' => now(),
            'user_role' => array_rand($types),
            'status' => 1,
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
