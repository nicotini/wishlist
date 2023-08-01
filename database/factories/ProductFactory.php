<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(7),
            'short_desc' => fake()->sentence(20),
            'price' => fake()->randomFloat(2, 10, 1000),
            'shop' => fake()->sentence(8),
            'is_desired' => fake()->boolean(), 
            'preview_image' => fake()->imageUrl(), 
            'quantity' => fake()->numberBetween(1, 20), 
            'created_at' => fake()->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        ];
    }
}
