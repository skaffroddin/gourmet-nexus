<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Main Container -->
    <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8">

        <!-- Header -->
        <h2 class="text-2xl font-semibold mb-6 text-center">Feedback Form</h2>

        <!-- Display Success Message -->
        @if(session('success'))
            <div class="mb-4 p-4 text-green-800 bg-green-100 border border-green-200 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Feedback Form -->
        <form method="POST" action="{{ route('feedback.store') }}" class="space-y-6">
            @csrf  <!-- CSRF Token for Security -->

            <!-- Hidden Appointment ID (Dynamic) -->
            <input type="hidden" name="appointment_id" value="{{ $appointment_id ?? '' }}">

            <!-- Rating Field -->
            <div>
                <label for="rating" class="block text-gray-700 font-medium">Rating (out of 5)</label>
                <input type="number" id="rating" name="rating" min="1" max="5" required 
                       class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
            </div>

            <!-- Feedback Message Field -->
            <div>
                <label for="feedback_message" class="block text-gray-700 font-medium">Feedback Message</label>
                <textarea id="feedback_message" name="feedback_message" rows="4" placeholder="Your feedback..."
                          class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"></textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" 
                        class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition duration-200 ease-in-out">
                    Submit Feedback
                </button>
            </div>
        </form>
    </div>

</body>
</html>
