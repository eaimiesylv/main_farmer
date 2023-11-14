<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AgricBusiness;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AgricBusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = [2,3];
        return [
            'user_id' => array_rand($users),
            'organizationName' => $this->faker->company,
            'dealName' => $this->faker->words(3, true),
            'dealPromoters' => $this->faker->name,
            'dealDescription' => $this->faker->paragraph,
            'hasBusinessPlan' => $this->faker->randomElement(['Yes', 'No']),
            'focalStates' => $this->faker->state,
            'ticketSize' => $this->faker->randomNumber(5),
            'raiseAmount' => $this->faker->text,
            'purpose' => $this->faker->text,
            'preferredValueChain' => ['Agribusiness', 'Technology', 'Healthcare'], // Example, modify as needed
            'otherValueChains' => $this->faker->text,
            'pitchFile' =>  'https://via.placeholder.com/300',
            'created_at' => now(),
            'updated_at' => now(),
        ];
       
    }

   
}
