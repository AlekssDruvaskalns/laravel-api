<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        $fields= $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($fields);

        return $user;
        // return 'register' <! first step -->;
    }

    public function login(){
        return 'login';
    }

    public function logout(){
        return 'logout';
    }
}
