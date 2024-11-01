<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); // Adjust the view path to match your application's structure
    }

    // Handle the login request
    function login_submit(Request $request)
    {
        $email = $request->input('email');
        $pass = $request->input('password');
        $loginData = DB::table('reg_table')->where('email','=',$email)->orWhere('phone')->get();

        if (empty($loginData[0])) {
            return redirect('login')->with('message','User not found');
        }else{
            $dbpass = $loginData[0]->password;
            if ($pass != $dbpass) {
                return redirect('login')->with('message','Password does not match');
            } else {
                $uid = $loginData[0]->user_id;
                $request->session()->put('ses_id',$uid);
            }

        }

    }

    // Handle user logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/'); // Redirect to the home page or desired route after logout
    }
}
