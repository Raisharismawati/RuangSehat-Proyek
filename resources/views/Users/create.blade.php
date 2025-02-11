@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Tambah User</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-bold">Nama</label>
            <input type="text" name="name" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Email</label>
            <input type="email" name="email" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Password</label>
            <input type="password" name="password" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="border p-2 w-full rounded" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('users.index') }}" class="ml-4 text-blue-600">Kembali</a>
    </form>
</div>
@endsection
