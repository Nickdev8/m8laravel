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
            'tshirts/black.jpeg',
            'tshirts/blue2.jpeg',
            'tshirts/bluebari.jpeg',
            'tshirts/brow.jpeg',
            'tshirts/green.jpeg',
            'tshirts/green2.jpeg',
            'tshirts/grey.jpeg',
            'tshirts/grey2.jpeg',
            'tshirts/redbair.jpeg',
            'tshirts/torquise.jpeg',
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
