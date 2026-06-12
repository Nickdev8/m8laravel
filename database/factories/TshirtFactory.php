<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Color;
use Illuminate\Database\Eloquent\Factories\Factory;

class TshirtFactory extends Factory
{
    public function definition(): array
    {
        $texts = [
            ['Code Mode', 'Eat, sleep, code, repeat'],
            ['Game On', 'Ready for the next level'],
            ['No Bad Days', 'Keep it simple'],
            ['Stay Wild', 'Adventure starts here'],
            ['Just One More Game', 'Then I will stop'],
            ['404 Sleep Not Found', 'Powered by coffee'],
            ['Keep Moving', 'Never give up'],
            ['Weekend Loading', 'Almost there'],
            ['Be Kind', 'It costs nothing'],
            ['Born to Play', 'Made for fun'],
        ];

        $text = fake()->randomElement($texts);

        return [
            'text_line_1' => $text[0],
            'text_line_2' => $text[1],
            'image_path' => 'images/tshirts/black.jpeg',
            'category_id' => Category::factory(),
            'color_id' => Color::factory(),
        ];
    }
}
