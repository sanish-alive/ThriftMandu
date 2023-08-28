<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSignin() {
        return view('user.signin');
    }

    public function showSignup() {
        return view("user.signup");
    }
}
