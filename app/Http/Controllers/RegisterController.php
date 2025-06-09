<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
{
    return view('register'); // This loads the register.blade.php file
}

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'course' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'address' => 'required|string|max:255',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'course' => $request->course,
            'age' => $request->age,
            'address' => $request->address,
        ]);

        return redirect()->route('login')->with('success', 'Registered successfully!');
    }
}
