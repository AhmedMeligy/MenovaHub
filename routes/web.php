<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', [CategoryController::class, 'index'])->name('home');

Route::resource('categories', CategoryController::class);

Route::post('{category}/{card}', [ProductController::class, 'show'])->name('card.show');
