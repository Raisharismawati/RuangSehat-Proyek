<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    // Menampilkan daftar user
    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Menampilkan form untuk menambah user
    public function create() {
        return view('users.create');
    }

    // Menyimpan data user baru
    public function store(Request $request) {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'string', 'min:6', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()], // Validasi password yang lebih kuat
        ]);

        // Menyimpan user ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // Redirect ke halaman daftar user dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan!');
    }
}
