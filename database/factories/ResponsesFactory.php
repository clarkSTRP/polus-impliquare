<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Offers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\responses>
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
            'user_id' => function (){
                return fake()-> randomElement(User::all())->id;
            },
            'offers_id' => function (){
                return fake()-> randomElement(Offers::all())->id;
            },
            //
        ];
    }
}
