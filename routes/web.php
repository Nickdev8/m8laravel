<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TshirtController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TshirtController::class, 'index'])->name('home');

Route::get('/tshirts', [TshirtController::class, 'index'])->name('tshirts.index');
Route::get('/tshirts/{tshirt}', [TshirtController::class, 'show'])->name('tshirts.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/colors', [ColorController::class, 'index'])->name('colors.index');
Route::get('/colors/{color}', [ColorController::class, 'show'])->name('colors.show');