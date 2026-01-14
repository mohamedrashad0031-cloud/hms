<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (strtolower(Auth::user()->role) === 'admin') {
                return redirect()->route('dashboard');
            }

            // normal user
            return redirect('/');
        }
//rashad paythyam
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }
}
