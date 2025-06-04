<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Make sure this view exists at resources/views/login.blade.php
    }

    public function login(Request $request)
    {
     
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Prevent session fixation

          
            return redirect()->route('users.index');
        }

        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput(); // Optional: keep email input
    }
}
