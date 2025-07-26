<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        return 'Register';
    }
    public function login($request)
    {
        return 'Login';
    }
}
