<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Color;
use App\Models\Tshirt;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categories = collect([
            'Funny',
            'Sports',
            'Gaming',
            'Animals',
            'Quotes',
        ])->map(fn (string $name) => Category::factory()->create(['name' => $name]));

        $colors = collect([
            'Black',
            'White',
            'Red',
            'Blue',
            'Green',
        ])->map(fn (string $name) => Color::factory()->create(['name' => $name]));

        $images = [
            'images/tshirts/black.jpeg',
            'images/tshirts/blue2.jpeg',
            'images/tshirts/bluebari.jpeg',
            'images/tshirts/brow.jpeg',
            'images/tshirts/green.jpeg',
            'images/tshirts/green2.jpeg',
            'images/tshirts/grey.jpeg',
            'images/tshirts/grey2.jpeg',
            'images/tshirts/redbair.jpeg',
            'images/tshirts/torquise.jpeg',
        ];

        shuffle($images);

        for ($index = 0; $index < 20; $index++) {
            Tshirt::factory()->create([
                'image_path' => $images[$index % count($images)],
                'category_id' => $categories->random()->id,
                'color_id' => $colors->random()->id,
            ]);
        }
    }
}
