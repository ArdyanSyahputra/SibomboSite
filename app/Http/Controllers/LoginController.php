<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Jika autentikasi berhasil
        return redirect()->route('dashboard');
    }

    // Jika autentikasi gagal
    return redirect()->route('login')->with('error', 'Email atau password salah.');
    }
}
