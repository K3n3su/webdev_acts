<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'course' => 'required|string|max:255',
            'age' => 'required|integer',
            'address' => 'required|string|max:255',
        ]);

        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'User added successfully.');
    }
}