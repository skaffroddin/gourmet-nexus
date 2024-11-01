<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('home');
});

Route::get('reg',[MyController::class,'reg_form']);
Route::get('login',[MyController::class,'login_form']);
Route::get('recipe',[MyController::class,'recipe_submission']);
Route::get('appoint',[MyController::class,'appointment_form']);
Route::get('admin',[MyController::class,'admin_table']);
Route::get('user',[MyController::class,'user_table']);
Route::get('chef',[MyController::class,'chef_table']);
Route::post('submit',[MyController::class,'form_submit']);

