<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(4)]
        ]);

        $user = User::create($attributes);

        return [
            "token" => $user->createToken('token')->plainTextToken,
            "data" => $user
        ];
    }
    public function login(Request $request)
    {
        // find user
        $user = User::where(['email' => $request->input('email')])->firstOrFail();

        // compare hashed password with password came from request
        if (!Hash::check($request->input('password'), (string) $user->password)) {
            # code...
            return [
                "message" => "User not found"
            ];
        }

        return [
            "token" => $user->createToken('token')->plainTextToken,
            "data" => $user
        ];

    }
}
