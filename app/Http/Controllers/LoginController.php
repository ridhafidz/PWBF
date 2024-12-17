<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Redirect ke halaman yang diminta atau halaman utama jika tidak ada
            return redirect()->intended('/');
        }
        return back()
        ->withInput($request->only('email', 'remember')) // Tetap isi email & remember me
        ->withErrors(['email' => 'Email atau password salah.']); // Pesan error
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
