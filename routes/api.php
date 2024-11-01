<?php
use App\Http\Controllers\Auth\RegisterController;

// Registration routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('ajax-register', [RegisterController::class, 'register']);
Route::post('otp-verify/{userId}', [RegisterController::class, 'verifyOtp'])->name('otp.verify');
