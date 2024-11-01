<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Chef;
use App\Models\Recipe;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show the admin dashboard
    public function index()
    {
        $usersCount = User::count();
        $chefsCount = Chef::count();
        $recipesCount = Recipe::count();

        return view('admin.dashboard', compact('usersCount', 'chefsCount', 'recipesCount'));
    }

    // View all users
    public function showUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // View all chefs
    public function showChefs()
    {
        $chefs = Chef::all();
        return view('admin.chefs.index', compact('chefs'));
    }

    // View all recipes
    public function showRecipes()
    {
        $recipes = Recipe::all();
        return view('admin.recipes.index', compact('recipes'));
    }

    // View feedback
    public function showFeedback()
    {
        // Assuming you have a Feedback model
        $feedback = Feedback::all(); 
        return view('admin.feedback.index', compact('feedback'));
    }
}
