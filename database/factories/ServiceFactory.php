<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'image' => fake()->imageUrl(640, 480, 'business'),
            'listings' => fake()->numberBetween(1, 100),
            'type' => fake()->randomElement(['daily', 'freelance']),
            'categorie_id' => fake()->numberBetween(1, 15),
            'user_id' => fake()->numberBetween(1, 15),
        ];
    }
}
