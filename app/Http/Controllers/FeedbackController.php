<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback; // Make sure to import the Feedback model
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Display a listing of feedback
    public function index() {
        $feedbacks = Feedback::all(); // Get all feedback
        return view('admin.feedback.index', compact('feedbacks'));
    }

    // Show the form for creating new feedback (optional, if you want to allow manual feedback entry)
    public function create() {
        return view('admin.feedback.create');
    }

    // Store newly created feedback in storage (optional)
    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required|exists:users,id', // Assuming you have a user model
            'chef_id' => 'required|exists:chefs,id', // Assuming you have a chef model
            'content' => 'required|string|max:1000', // Adjust max length as needed
            // Add more validation rules as needed
        ]);

        Feedback::create($request->all()); // Create a new feedback
        return redirect()->route('admin.feedback.index')->with('success', 'Feedback submitted successfully.');
    }

    // Show the form for editing the specified feedback
    public function edit(Feedback $feedback) {
        return view('admin.feedback.edit', compact('feedback'));
    }

    // Update the specified feedback in storage
    public function update(Request $request, Feedback $feedback) {
        $request->validate([
            'content' => 'required|string|max:1000',
            // Add more validation rules as needed
        ]);

        $feedback->update($request->all()); // Update the feedback
        return redirect()->route('admin.feedback.index')->with('success', 'Feedback updated successfully.');
    }

    // Remove the specified feedback from storage
    public function destroy(Feedback $feedback) {
        $feedback->delete(); // Delete the feedback
        return redirect()->route('admin.feedback.index')->with('success', 'Feedback deleted successfully.');
    }
}
