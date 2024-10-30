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
}
