@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <h1 class="text-2xl font-bold">Catatan Penggunaan Obat</h1>
    <ul class="mt-4">
        @foreach ($records as $record)
        <li class="border p-2 mt-2">
            <p><strong>{{ $record->student_name }}</strong> - {{ $record->medicine->name }}</p>
            <p>Alasan: {{ $record->reason }}</p>
            <p>Tanggal: {{ $record->date }}</p>
        </li>
        @endforeach
    </ul>
</div>
@endsection
