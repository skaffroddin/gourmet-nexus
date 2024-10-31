<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OtpController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');
Route::get('/meal-plans', [MealPlanController::class, 'index'])->name('meal-plans');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');




// Admin Routes
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // User Management
    Route::resource('users', UserController::class);

    // Chef Management
    Route::resource('chefs', ChefController::class);

    // Recipe Management
    Route::resource('recipes', RecipeController::class);

    // Feedback Management
    Route::get('feedback', [FeedbackController::class, 'index'])->name('admin.feedback.index');
});

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Registration Routes
Route::get('/register', function () {
    return view('register'); // Returns the registration view
})->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

// Login Routes
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route to handle the form submission
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Dashboard Route (Authenticated users only)
Route::get('/dashboard', function () {
    return view('dashboard'); // Returns the dashboard view
})->middleware('auth')->name('dashboard');

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// OTP Routes
Route::post('/otp/send', [OtpController::class, 'sendOtp'])->name('otp.send');
Route::post('/otp/verify', [OtpController::class, 'verifyOtp'])->name('otp.verify');

// Chefs
Route::resource('users', UserController::class);
Route::resource('chefs', ChefController::class);
Route::resource('recipes', RecipeController::class);

// Feedback // Feedback Management
Route::get('feedback', [FeedbackController::class, 'index'])->name('admin.feedback.index');
// You can add routes for creating, storing, editing, updating, and deleting feedback if needed
Route::resource('feedback', FeedbackController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
