<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('landing');
});

Route::resource('/categories', CategoryController::class);
Route::get('/', [CategoryController::class, 'index']);

Route::get('/application/{categroyId}/{cardId}', [CategoryController::class, 'show']);
