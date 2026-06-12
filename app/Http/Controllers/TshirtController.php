<?php

namespace App\Http\Controllers;

use App\Models\Tshirt;

class TshirtController extends Controller
{
    public function index()
    {
        $tshirts = Tshirt::with(['category', 'color'])->get();

        return view('tshirts.index', compact('tshirts'));
    }

    public function show(Tshirt $tshirt)
    {
        $tshirt->load(['category', 'color']);

        return view('tshirts.show', compact('tshirt'));
    }
}