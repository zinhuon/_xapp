<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/simple', [App\Http\Controllers\SimplePageController::class, 'index']);

Route::get('/about', [App\Http\Controllers\AboutPageController::class, 'show']);
// Route::get('/about', 'AboutPageController@show');