<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    @vite('resources/css/app.css') <!-- Link to the app's CSS -->
</head>

<body>
    @include('layouts.header') <!-- Include the header layout -->

    <div class="text-4xl text-center font-bold mt-10 text-[#007bff]">
        Register
    </div>

    <form id="register-form" class="max-w-sm mx-auto mt-16">
        @csrf <!-- CSRF token for form security -->
        
        <!-- Name input field -->
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your full name" required />
        </div>

        <!-- Email input field -->
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your email" required />
        </div>

        <!-- Phone number input field -->
        <div class="mb-5">
            <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Phone Number</label>
            <input type="tel" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone number" required />
        </div>

        <!-- Password input field -->
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required />
        </div>

        <!-- Confirm password input field -->
        <div class="mb-5">
            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Confirm your password" required />
        </div>

        <!-- Date of birth input field -->
        <div class="mb-5">
            <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <!-- Profile photo upload field -->
        <div class="mb-5">
            <label for="profile_photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile Photo (Optional)</label>
            <input type="file" name="profile_photo" id="profile_photo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        </div>

        <!-- State of residence input field -->
        <div class="mb-5">
            <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State of Residence</label>
            <input type="text" name="state" id="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your state" required />
        </div>

        <!-- Country of residence input field -->
        <div class="mb-5">
            <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country of Residence</label>
            <input type="text" name="country" id="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your country" required />
        </div>

        <!-- Gender selection field -->
        <div class="mb-5">
            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
            <select name="gender" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <!-- Role selection field -->
        <div class="mb-5">
            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
            <select name="role" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <option value="" disabled selected>Select your role</option>
                <option value="chef">Chef</option>
                <option value="user">User</option>
            </select>
        </div>

        <!-- Hidden fields for Chef-specific information -->
        <div class="mb-5 hidden" id="chef-fields">
            <div class="mb-5">
                <label for="chef_expertise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chef's Area of Expertise (if role is Chef)</label>
                <input type="text" name="chef_expertise" id="chef_expertise" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your expertise" />
            </div>

            <div class="mb-5">
                <label for="chef_hourly_rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chef's Hourly Rate (if role is Chef)</label>
                <input type="number" name="chef_hourly_rate" id="chef_hourly_rate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter hourly rate" />
            </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>

        <!-- Link to login if already have an account -->
        <span class="text-gray-500 dark:text-gray-400">Already have an account? <a href="{{url('login')}}" class="inline-flex items-center font-medium text-blue-600 hover:underline">Sign in</a></span>

        <div id="register-error" class="text-red-500 mt-2 hidden"></div> <!-- Error message display -->
    </form>

    <script>
        document.getElementById('register-form').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent the form from submitting the default way
            let formData = new FormData(this); // Collect form data

            // Send the form data using Fetch API
            fetch('{{ url('/ajax-register') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                },
                body: formData
            })
            .then(response => response.json()) // Parse the JSON response
            .then(data => {
                if (data.success) {
                    window.location.href = data.redirect; // Redirect on successful registration
                } else {
                    document.getElementById('register-error').innerText = data.message; // Show error message
                    document.getElementById('register-error').classList.remove('hidden'); // Display error
                }
            });
        });

        // Toggle Chef-specific fields based on role selection
        document.getElementById('role').addEventListener('change', function () {
            const chefFields = document.getElementById('chef-fields');
            chefFields.classList.toggle('hidden', this.value !== 'chef'); // Show/Hide fields based on selected role
        });
    </script>

    @include('layouts.footer') <!-- Include the footer layout -->
</body>

</html>
