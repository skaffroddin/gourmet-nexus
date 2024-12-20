<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail; // Add this for sending OTP
use Illuminate\Support\Str; // For generating random strings

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('register'); // Ensure this points to your Blade view
    }

    // Handle the registration request
    public function register(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'date_of_birth' => 'required|date',
            'phone_number' => 'required|string|max:15',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'gender' => 'required|in:male,female,other',
            'role' => 'required|in:chef,user',
            'chef_expertise' => 'nullable|string|max:255',
            'chef_hourly_rate' => 'nullable|numeric|min:0',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        // Create the user instance
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Hash the password
        $user->date_of_birth = $request->date_of_birth;
        $user->phone_number = $request->phone_number;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->gender = $request->gender;
        $user->role = $request->role;
        $user->chef_expertise = $request->chef_expertise;
        $user->chef_hourly_rate = $request->chef_hourly_rate;

        // Handle profile photo upload if provided
        if ($request->hasFile('profile_photo')) {
            $filePath = $request->file('profile_photo')->store('profile_photos', 'public');
            $user->profile_photo = $filePath;
        }

        $user->save(); // Save the user to the database

        // Generate OTP
        $otp = Str::random(6); // Generate a random 6-character OTP
        $user->otp = $otp; // Assuming you have added an `otp` column in the users table
        $user->save();

        // Send OTP to user's email
        Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Your OTP for Registration');
        });

        return response()->json(['success' => true, 'message' => 'OTP sent to your email. Please verify.', 'redirect' => route('otp.verify', $user->id)]); // Redirect to OTP verification page
    }

    // Handle OTP verification
    public function verifyOtp(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        
        $validator = Validator::make($request->all(), [
            'otp' => 'required|string|size:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        // Check if the OTP is correct
        if ($request->otp !== $user->otp) {
            return response()->json(['success' => false, 'message' => 'Invalid OTP.']);
        }

        // If OTP is correct, you can now finalize registration (if needed)
        // E.g., mark the user as verified, send a welcome email, etc.

        return response()->json(['success' => true, 'message' => 'Registration successful! You can now log in.', 'redirect' => route('login')]);
    }
}
