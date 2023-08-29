<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AppointmentFactory extends Factory
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
            'agent_id' =>\App\Models\FranchiseeAgent::factory(),
            'franchisee_id' => \App\Models\Franchisee::factory(),
            'customer_id' => \App\Models\Customer::factory(),
            'appointment_address' => $this->faker->address,
            'appointment_city' => $this->faker->city,
            'appointment_state' => $this->faker->state,
            'appointment_postal_code' => $this->faker->postcode,
            'appointment_country' => $this->faker->country,
            'appointment_longitude' => $this->faker->longitude,
            'appointment_latitude' => $this->faker->latitude,
            'appointment_type' => $this->faker->word,
            'appointment_time' => $this->faker->time('H:i:s', '17:00'), // Set default time to 17:00
            'appointment_time_zone' => $this->faker->timezone,
            'services_quote' => $this->faker->randomFloat(2, 10, 100),
            'services_duration_est' => $this->faker->numberBetween(15, 240),
            'services_requested' => json_encode($this->faker->words(3)),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'rescheduled', 'cancelled', 'completed']),
        ];
    }
}
