<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller // Ensure this line is present
{
    public function __construct()
    {
        $this->middleware('auth')->except(['showLoginForm', 'login']);
    }

    public function showLoginForm()
    {
        return view('layout.autentikasi.blade.php');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function dashboard()
    {
        return view('dashboard'); // This should point to your dashboard view
    }
}
