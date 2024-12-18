<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
{
    // Validasi input
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Cek kredensial dengan `Auth::attempt`
    if (Auth::attempt($credentials, $request->remember)) {
        // Regenerasi sesi
        $request->session()->regenerate();

        // Redirect ke dashboard jika berhasil
        return redirect()->route('dashboard');
    }

    // Jika gagal, kembali ke login dengan pesan error
    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->onlyInput('email');
}



    // Menampilkan form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan data pengguna
        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login');
    }

    // Menampilkan dashboard
    public function dashboard()
    {
        return view('layouts.main');
    }
    // Proses logout
    public function logout(Request $request)
    {
        // Proses logout pengguna
        Auth::logout();

        // Hapus semua data sesi pengguna
        $request->session()->invalidate();

        // Regenerasi token CSRF untuk keamanan
        $request->session()->regenerateToken();

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('status', 'Anda berhasil logout.');
    }



}
