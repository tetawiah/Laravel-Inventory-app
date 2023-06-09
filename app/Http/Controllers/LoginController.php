<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required',],
            'password' => ['required','min:8']
        ]);

      
        if (!Auth::attempt($credentials)) {
           echo "<h1> Sorry couldn't log you in </h1>";
        }
        $request->session()->regenerate();
 
        return redirect()->intended('/');
    }

   
    
}
