<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/simple', [App\Http\Controllers\SimplePageController::class, 'index']);
