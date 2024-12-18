<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;  // Import Model Role
use Illuminate\Http\Request;


class UserController extends Controller
{
    // Menampilkan daftar user
    public function index()
    {
        $users = User::all();  // Mendapatkan semua data user
        return view('layouts.main', compact('users'));  // Mengirim data users ke view
    }

    public function create()
    {
        // Mengambil semua role dari database
        $roles = Role::all();

        // Mengirim data roles ke view
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',  // Validasi role
        ]);

        // Membuat user baru dan menyimpan role
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Enkripsi password
            'role_id' => $request->input('role_id'),  // Menyimpan role_id
        ]);

        return redirect()->route('users.index')->with('status', 'User berhasil ditambahkan');
    }

}

