<?php

use App\Http\Controllers\CurlController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curl', [CurlController::class, 'index']);
