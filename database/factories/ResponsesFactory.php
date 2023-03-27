<?php

namespace Database\Factories\polusimpliquare\database\factories;

use App\Models\User;
use App\Models\Offers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responses>
 */
class ResponsesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => fake()->text(),
            'user_id' => User::factory()->create()->id,
            'offer_id' => Offers::factory()->create()->id,
            //
        ];
    }
}
