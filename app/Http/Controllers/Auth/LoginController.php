<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return response()->json(['success' => 'Login successful!']);
        }

        return response()->json(['errors' => ['email' => ['The provided credentials are incorrect.']]], 422);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/'); // Redirect to home after logout
    }
}
