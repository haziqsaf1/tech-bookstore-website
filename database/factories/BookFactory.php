<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->catchPhrase(), // Generates catchy English titles instead of Latin
            'author' => fake()->name(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 10, 100),
            'category_id' => Category::factory(),
        ];
    }

}
