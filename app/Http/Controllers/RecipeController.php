<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe; // Make sure to import the Recipe model
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // Display a listing of recipes
    public function index() {
        $recipes = Recipe::all(); // Get all recipes
        return view('admin.recipes.index', compact('recipes'));
    }

    // Show the form for creating a new recipe
    public function create() {
        return view('admin.recipes.create');
    }

    // Store a newly created recipe in storage
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            // Add more validation rules as needed
        ]);

        Recipe::create($request->all()); // Create a new recipe
        return redirect()->route('admin.recipes.index')->with('success', 'Recipe created successfully.');
    }

    // Show the form for editing the specified recipe
    public function edit(Recipe $recipe) {
        return view('admin.recipes.edit', compact('recipe'));
    }

    // Update the specified recipe in storage
    public function update(Request $request, Recipe $recipe) {
        $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            // Add more validation rules as needed
        ]);

        $recipe->update($request->all()); // Update the recipe
        return redirect()->route('admin.recipes.index')->with('success', 'Recipe updated successfully.');
    }

    // Remove the specified recipe from storage
    public function destroy(Recipe $recipe) {
        $recipe->delete(); // Delete the recipe
        return redirect()->route('admin.recipes.index')->with('success', 'Recipe deleted successfully.');
    }
}
