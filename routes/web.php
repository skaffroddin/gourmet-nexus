<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Registration Routes
Route::get('/register', function () {
    return view('register'); // Returns the registration view
})->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

// Login Routes
Route::get('/login', function () {
    return view('login'); // Returns the login view
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

// Dashboard Route (Authenticated users only)
Route::get('/dashboard', function () {
    return view('dashboard'); // Returns the dashboard view
})->middleware('auth')->name('dashboard');

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
