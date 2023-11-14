<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\InvestorDetail;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class InvestorDetailFactory extends Factory
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
            // 'user_id' => function () {
            //     return \App\Models\User::factory()->create()->id;
            // },
            'finance_institution' => $this->faker->company,
            'investment_type' => ['Stocks', 'Bonds', 'Real Estate'], 
            'preferred_deal_size' => $this->faker->numberBetween(100000, 1000000),
            'funding_type' => $this->faker->randomElement(['Equity', 'Debt']),
            'organization_description' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
       
    }

    
}
