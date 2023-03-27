<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offers>
 */
class OffersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'title' => fake()->name(),
            'type' => fake()->randomElement(['CDI','CDD','ALTERNANCE']),
            'location' => fake()->randomElement(['provence','laplebe','occitanie']),
            'description' => fake()->text(),
            'salary' => fake()->numberBetween(500,10000),
            'available_for' => fake()->numberBetween(5,60),
            
            //
        ];
    }
}
