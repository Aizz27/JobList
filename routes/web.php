<?php

use App\Http\Controllers\JobListController;
use Illuminate\Support\Facades\Route;

// 1. Home Dashboard Route
Route::get('/', function () {
    return view('home'); // This will look for resources/views/home.blade.php
});

// 2. All Jobs List Route
Route::get('/jobs', [JobListController::class, 'index']);

// 3. Single Job Detail Route (using Route Model Binding)
Route::get('/jobs/{job}', [JobListController::class, 'show']);