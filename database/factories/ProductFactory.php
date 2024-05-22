<?php

namespace Database\Factories;

use App\Models\Card;
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
            'img' => fake()->imageUrl(640, 480, 'animals', true),
            'title' => fake()->words(2,true),
            'video' => fake()->imageUrl(640, 480, 'animals', true),
            'desc' => fake()->text(300),
            'card_id' => Card::all()->random()->id
        ];
    }
}
