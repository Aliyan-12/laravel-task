<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function loginPost(\App\Http\Requests\LoginRequest $request)
    {
        dd($request);
    }

    public function registerPost(\App\Http\Requests\RegisterRequest $request)
    {
        dd($request);
    }
}
