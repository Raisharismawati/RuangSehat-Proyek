@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Tambah Obat</h1>

    <form action="{{ route('medicines.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-bold">Nama Obat</label>
            <input type="text" name="name" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Jenis</label>
            <input type="text" name="type" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Fungsi</label>
            <input type="text" name="function" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Dosis</label>
            <input type="text" name="dosage" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Tanggal Kadaluarsa</label>
            <input type="date" name="expiry_date" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Stok</label>
            <input type="number" name="stock" class="border p-2 w-full rounded" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('medicines.index') }}" class="ml-4 text-blue-600">Kembali</a>
    </form>
</div>
@endsection
