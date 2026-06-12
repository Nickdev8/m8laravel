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
        $school = Category::create(['name' => 'School']);
        $stage = Category::create(['name' => 'Stage']);
        $sport = Category::create(['name' => 'Sport']);
        $design = Category::create(['name' => 'Design']);
        $basic = Category::create(['name' => 'Basic']);

        $black = Color::create(['name' => 'Black']);
        $white = Color::create(['name' => 'White']);
        $grey = Color::create(['name' => 'Grey']);
        $navy = Color::create(['name' => 'Navy']);
        $green = Color::create(['name' => 'Green']);

        Tshirt::create([
            'text_line_1' => 'Media College Amsterdam',
            'text_line_2' => 'Student Edition',
            'image_path' => null,
            'category_id' => $school->id,
            'color_id' => $black->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'MBO Student',
            'text_line_2' => 'Learning by doing',
            'image_path' => null,
            'category_id' => $school->id,
            'color_id' => $white->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Stage Ready',
            'text_line_2' => 'Portfolio in progress',
            'image_path' => null,
            'category_id' => $stage->id,
            'color_id' => $navy->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Project Week',
            'text_line_2' => 'Deadline mode',
            'image_path' => null,
            'category_id' => $school->id,
            'color_id' => $grey->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Creative Student',
            'text_line_2' => 'Design, code, repeat',
            'image_path' => null,
            'category_id' => $design->id,
            'color_id' => $green->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Basic Black Tee',
            'text_line_2' => 'Everyday fit',
            'image_path' => null,
            'category_id' => $basic->id,
            'color_id' => $black->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Training Day',
            'text_line_2' => 'Comfort fit',
            'image_path' => null,
            'category_id' => $sport->id,
            'color_id' => $grey->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Portfolio Club',
            'text_line_2' => 'Work in progress',
            'image_path' => null,
            'category_id' => $stage->id,
            'color_id' => $white->id,
        ]);

                Tshirt::create([
            'text_line_1' => 'Media College Amsterdam',
            'text_line_2' => 'Student Edition',
            'image_path' => null,
            'category_id' => $school->id,
            'color_id' => $black->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'MBO Student',
            'text_line_2' => 'Learning by doing',
            'image_path' => null,
            'category_id' => $school->id,
            'color_id' => $white->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Project Week',
            'text_line_2' => 'Deadline mode',
            'image_path' => null,
            'category_id' => $school->id,
            'color_id' => $grey->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Exam Week',
            'text_line_2' => 'Focus mode',
            'image_path' => null,
            'category_id' => $school->id,
            'color_id' => $navy->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Stage Ready',
            'text_line_2' => 'Portfolio in progress',
            'image_path' => null,
            'category_id' => $stage->id,
            'color_id' => $navy->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Portfolio Club',
            'text_line_2' => 'Work in progress',
            'image_path' => null,
            'category_id' => $stage->id,
            'color_id' => $white->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Internship Mode',
            'text_line_2' => 'Learning on the job',
            'image_path' => null,
            'category_id' => $stage->id,
            'color_id' => $black->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'First Day Intern',
            'text_line_2' => 'Professional fit',
            'image_path' => null,
            'category_id' => $stage->id,
            'color_id' => $grey->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Training Day',
            'text_line_2' => 'Comfort fit',
            'image_path' => null,
            'category_id' => $sport->id,
            'color_id' => $grey->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'After School Sports',
            'text_line_2' => 'Active wear',
            'image_path' => null,
            'category_id' => $sport->id,
            'color_id' => $green->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Team Practice',
            'text_line_2' => 'Lightweight tee',
            'image_path' => null,
            'category_id' => $sport->id,
            'color_id' => $navy->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Gym Class',
            'text_line_2' => 'Easy movement',
            'image_path' => null,
            'category_id' => $sport->id,
            'color_id' => $black->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Creative Student',
            'text_line_2' => 'Design, code, repeat',
            'image_path' => null,
            'category_id' => $design->id,
            'color_id' => $green->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Design Lab',
            'text_line_2' => 'Sketch to screen',
            'image_path' => null,
            'category_id' => $design->id,
            'color_id' => $white->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Studio Day',
            'text_line_2' => 'Create something',
            'image_path' => null,
            'category_id' => $design->id,
            'color_id' => $black->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Visual Maker',
            'text_line_2' => 'Concept to product',
            'image_path' => null,
            'category_id' => $design->id,
            'color_id' => $grey->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Basic Black Tee',
            'text_line_2' => 'Everyday fit',
            'image_path' => null,
            'category_id' => $basic->id,
            'color_id' => $black->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Basic White Tee',
            'text_line_2' => 'Clean everyday style',
            'image_path' => null,
            'category_id' => $basic->id,
            'color_id' => $white->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Basic Grey Tee',
            'text_line_2' => 'Simple and comfortable',
            'image_path' => null,
            'category_id' => $basic->id,
            'color_id' => $grey->id,
        ]);

        Tshirt::create([
            'text_line_1' => 'Basic Navy Tee',
            'text_line_2' => 'Casual school fit',
            'image_path' => null,
            'category_id' => $basic->id,
            'color_id' => $navy->id,
        ]);
    }
}