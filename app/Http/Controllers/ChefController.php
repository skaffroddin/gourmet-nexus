<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chef; // Make sure to import the Chef model
use Illuminate\Http\Request;

class ChefController extends Controller
{
    // Display a listing of chefs
    public function index() {
        $chefs = Chef::all(); // Get all chefs
        return view('admin.chefs.index', compact('chefs'));
    }

    // Show the form for creating a new chef
    public function create() {
        return view('admin.chefs.create');
    }

    // Store a newly created chef in storage
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        Chef::create($request->all()); // Create a new chef
        return redirect()->route('admin.chefs.index')->with('success', 'Chef created successfully.');
    }

    // Show the form for editing the specified chef
    public function edit(Chef $chef) {
        return view('admin.chefs.edit', compact('chef'));
    }

    // Update the specified chef in storage
    public function update(Request $request, Chef $chef) {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        $chef->update($request->all()); // Update the chef
        return redirect()->route('admin.chefs.index')->with('success', 'Chef updated successfully.');
    }

    // Remove the specified chef from storage
    public function destroy(Chef $chef) {
        $chef->delete(); // Delete the chef
        return redirect()->route('admin.chefs.index')->with('success', 'Chef deleted successfully.');
    }
}
