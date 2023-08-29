<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FranchiseProductService>
 */
class FranchiseProductServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = ['Wash','Shampoo','Detail','Wax'][rand(0,3)];
        $randomName = $name . rand(1,100) . 'Widget for adding a new snippet';

        $setProductOrService = fake()->randomElement(['service', 'product']);
        return [
            'asset_id' =>Str::uuid(),
            'name' => $randomName,
            'description' => $name . ' the brown fox jumps over the lazy dog.',
            'status' => fake()->randomElement(['enabled', 'disabled']),
            'type' => fake()->randomElement(['service', 'product']),
            'image' => 'https://via.placeholder.com/150',
            'quantity' => ($setProductOrService === 'product') ? fake()->numberBetween(1, 100) : null,
            'price' => fake()->randomFloat(2, 19.99, 99.99),
            'markup' => fake()->randomFloat(2, 0.00, 30.00),
            'tax' => ($setProductOrService === 'product') ? fake()->randomFloat(2, 0.00, 9.99) : null,
            'duration' => fake()->numberBetween(30, 75)
        ];
    }
}
