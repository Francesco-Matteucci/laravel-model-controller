<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


// ROUTE Home page
Route::get('/', function () {
    return view('home');
});

// ROUTE lista Film
Route::get('/movies', [MovieController::class, 'index']);