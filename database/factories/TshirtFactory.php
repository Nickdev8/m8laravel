<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Color;
use Illuminate\Database\Eloquent\Factories\Factory;

class TshirtFactory extends Factory
{
    public function definition(): array
    {
        return [
            'text_line_1' => fake()->words(3, true),
            'text_line_2' => fake()->sentence(4),
            'image_path' => 'images/tshirts/black.jpeg',
            'category_id' => Category::factory(),
            'color_id' => Color::factory(),
        ];
    }
}
