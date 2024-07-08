<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    private $repository = null;
    public function __construct(\App\Repositories\UserRepository $repository) {
        $this->repository = $repository;
    }
    public function login()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function logout()
    { 
        Auth::logout();
        return redirect()->route('user.login');
    }

    public function loginPost(\App\Http\Requests\LoginRequest $request)
    {
        // dd($request);
        if($request->validated()) {
            if(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
                $user = $this->repository->getBy('email', $request->get('email'));
                Auth::login($user);
                return redirect()->route('admin.dashboard')->with(['success' => true, 'message' => 'User logged in']);
            } else {
                return redirect()->back()->with(['success' => false, 'message' => sprintf('Incorrect Credentials')]);
            }
        }
    }

    public function registerPost(\App\Http\Requests\RegisterRequest $request)
    {
        // dd($request);
        if($request->validated()) {
            $user = $this->repository->create($request->all());
            return view('panel.dashboard', compact(['user' => $user]));
        }
    }

    public function dashboard() {
        return view('panel.dashboard');
    }
}
