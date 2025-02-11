@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto mt-10 bg-gradient-to-r from-red-100 via-white to-red-100 p-6 rounded-lg shadow-2xl">
    <h1 class="text-4xl font-extrabold text-red-700 mb-6 text-center"> Daftar Obat </h1>

    <!-- Tombol Tambah Obat dan Pencarian -->
    <div class="flex justify-between items-center mb-6">
        <form method="GET" action="{{ route('medicines.index') }}" class="flex bg-white p-2 rounded-lg shadow-md">
            <input type="text" name="search" placeholder="Cari obat..." class="border px-4 py-2 rounded-lg focus:ring focus:ring-red-300" value="{{ request('search') }}">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg ml-2 hover:bg-blue-700">🔍 Cari</button>
        </form>
        <a href="{{ route('medicines.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-700">➕ Tambah Obat</a>
    </div>

    <!-- Tabel Obat -->
    <div class="overflow-x-auto">
        <table class="w-full border-collapse rounded-lg shadow-xl">
            <thead>
                <tr class="bg-red-600 text-white text-lg">
                    <th class="px-6 py-4">Nama</th>
                    <th class="px-6 py-4">Jenis</th>
                    <th class="px-6 py-4">Fungsi</th>
                    <th class="px-6 py-4">Dosis</th>
                    <th class="px-6 py-4">Kadaluarsa</th>
                    <th class="px-6 py-4">Stok</th>
                    <th class="px-6 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medicines as $medicine)
                <tr class="border-b bg-white hover:bg-red-50 transition">
                    <td class="px-6 py-4 text-gray-800 font-medium">{{ $medicine->name }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $medicine->type }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $medicine->function }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $medicine->dosage }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $medicine->expiry_date }}</td>
                    <td class="px-6 py-4 text-center font-bold {{ $medicine->stock > 10 ? 'text-green-600' : 'text-red-600' }}">
                        {{ $medicine->stock }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('medicines.edit', $medicine->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg shadow-md hover:bg-yellow-600">✏️ Edit</a>
                        <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg shadow-md hover:bg-red-600" onclick="return confirm('Yakin ingin menghapus?')">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
