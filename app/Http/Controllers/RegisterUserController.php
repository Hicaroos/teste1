<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class RegisterUserController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request-> Hash::make($request->password),
            'role' => $request->role
        ]);
    }
}
