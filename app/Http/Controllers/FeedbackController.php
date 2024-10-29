<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class FeedbackController extends Controller
{
    // Display Feedback Form
    public function create(Request $request)
    {
        // Example: You might retrieve an appointment ID based on the current user or a parameter
        $appointment_id = 12345; // Example value, replace with dynamic data as needed

        return view('feedback', compact('appointment_id'));
    }

    // Handle Feedback Form Submission
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'appointment_id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'feedback_message' => 'nullable|string|max:1000'
        ]);

        // Save or process the feedback as needed
        // Feedback::create($validatedData); // Example database save (requires a Feedback model)

        // Store success message in session
        Session::flash('success', 'Thank you for your feedback!');

        // Redirect back to the form
        return redirect()->route('feedback.create');
    }
}
