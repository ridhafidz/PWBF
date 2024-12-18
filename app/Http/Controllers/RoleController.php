<?php
// app/Http/Controllers/RoleController.php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Menampilkan semua role
    public function index()
    {
        $roles = Role::all();  // Mendapatkan semua data role
        return view('layouts.main', compact('roles'));  // Mengirim data $roles ke view
    }

    // Menampilkan form untuk membuat role baru
    public function create()
    {
        return view('roles.create');  // Menampilkan form pembuatan role
    }

    // Menyimpan role baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Role::create($request->all());  // Membuat role baru

        return redirect()->route('roles.index')->with('status', 'Role berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit role
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));  // Menampilkan form edit role
    }

    // Memperbarui role
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $role->update($request->all());  // Memperbarui role

        return redirect()->route('roles.index')->with('status', 'Role berhasil diperbarui');
    }
}
