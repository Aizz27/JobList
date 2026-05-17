<?php

use App\Http\Controllers\JobListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', [JobListController::class, 'index']);

Route::get('/jobs/{job}', [JobListController::class, 'show']);