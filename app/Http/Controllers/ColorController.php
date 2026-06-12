<?php

namespace App\Http\Controllers;

use App\Models\Color;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::withCount('tshirts')->get();

        return view('colors.index', compact('colors'));
    }

    public function show(Color $color)
    {
        $color->load(['tshirts.category']);

        return view('colors.show', compact('color'));
    }
}