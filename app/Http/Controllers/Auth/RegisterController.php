<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'profile_photo' => 'nullable|image|max:2048',
            'role' => 'required|in:user,chef',
        ]);

        $profilePhotoPath = $request->file('profile_photo') ? $request->file('profile_photo')->store('profile_photos', 'public') : null;

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'state' => $request->state,
            'country' => $request->country,
            'profile_photo' => $profilePhotoPath,
            'role' => $request->role,
        ]);

        return redirect()->route('home');
    }
}
