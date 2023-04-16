<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $newUser =  $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['min:8', 'max:255', 'regex:/^(?=.*[A-Z])(?=.*\d)/']
        ]);

        Auth::login(User::create($newUser));

        return redirect('/');
    }
}
