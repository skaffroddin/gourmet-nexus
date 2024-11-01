<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MealPlanController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');
Route::get('/meal-plans', [MealPlanController::class, 'index'])->name('meal-plans');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Authentication Routes
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Dashboard (Protected Route)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// OTP Routes
Route::post('/otp/send', [OtpController::class, 'sendOtp'])->name('otp.send');
Route::post('/otp/verify', [OtpController::class, 'verifyOtp'])->name('otp.verify');

// Admin Routes (Prefix 'admin' with 'auth:admin' middleware)
Route::prefix('admin')->middleware('auth:admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // Admin User Management
    Route::resource('users', UserController::class);

    // Admin Chef Management
    Route::resource('chefs', ChefController::class);

    // Admin Recipe Management
    Route::resource('recipes', RecipeController::class)->names([
        'index' => 'recipes.index', // Admin-specific name to avoid conflict
    ]);

    // Admin Feedback Management
    Route::get('feedback', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::resource('feedback', FeedbackController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
});
