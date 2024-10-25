<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class OtpVerificationController extends Controller
{
    public function showOtpForm($id)
    {
        return view('auth.otp', ['id' => $id]);
    }

    public function verifyOtp(Request $request, $id)
    {
        $request->validate(['otp' => 'required|string']);

        $user = User::findOrFail($id);

        if ($user->otp === $request->otp) {
            $user->is_verified = true;
            $user->otp = null;
            $user->save();

            return redirect()->route('login')->with('success', 'Account verified successfully!');
        }

        return redirect()->back()->with('error', 'Invalid OTP. Please try again.');
    }
}
