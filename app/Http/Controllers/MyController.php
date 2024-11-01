<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MyController extends Controller
{
    function home():View
    {
        return view('home');
    }

    function reg_form():View
    {
        return view('form');
    }

    function login_form():View
    {
        return view('login');
    }

    function recipe_submission():View
    {
        return view('recipe_submission');
    }

    function appointment_form():View
    {
        return view('appointment');
    }

    function admin_table():View
    {
        return view('admin');
    }

    function user_table():View
    {
        return view('user');
    }

    function chef_table():View
    {
        return view('chef');
    }

    function form_submit(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone_number');
        $pass = bcrypt($req->input('password'));
        $conf_pass = $req->input('confirm_password');
        $dob = $req->input('date_of_birth');

        if ($req->file('profile_photo')) {
            $image = $req->file('profile_photo');
            $fileName = time() . "_" . $image->getClientOriginalName();
            $upload = "./upload";
            $image->move($upload, $fileName);
            $imagePath = $upload . "/" . $fileName;
        } else {
            $imagePath = null; // Set a default value if no file uploaded
        }

        $state = $req->input('state');
        $country = $req->input('country');
        $gender = $req->input('gender');
        $role = $req->input('role');

        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => $pass,
            'confirm_pass' => $conf_pass,
            'DOB' => $dob,
            'image' => $imagePath,
            'state' => $state,
            'country' => $country,
            'gender' => $gender,
            'role' => $role
        ];

        DB::table('reg_table')->insert($data);

        return view('form')->with('message', 'Data inserted');
    }
}
