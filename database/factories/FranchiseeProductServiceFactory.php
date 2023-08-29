<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FranchiseeProductService>
 */
class FranchiseeProductServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'asset_id'=>Str::uuid(),
           'franchisee_id'=>\App\Models\Franchisee::factory(),
           'franchise_product_service_id'=>\App\Models\FranchiseProductService::factory(),
           'status'=>$this->faker->randomElement(['Active', 'Inactive']),
           'quantity' => $this->faker->numberBetween(1, 100),
           'duration' => $this->faker->randomElement([60, 120, 30]),
        ];
    }
}
