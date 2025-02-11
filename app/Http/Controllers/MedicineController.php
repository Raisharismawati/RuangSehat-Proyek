<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    // Menampilkan daftar obat
    public function index(Request $request) {
        $query = Medicine::query();
        
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $medicines = $query->get();
        return view('medicines.index', compact('medicines'));
    }

    // Menampilkan form tambah obat
    public function create() {
        return view('medicines.create');
    }

    // Menyimpan data obat baru
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'function' => 'required|string',
            'dosage' => 'required|string',
            'expiry_date' => 'required|date',
            'stock' => 'required|integer|min:0',
        ]);

        Medicine::create($request->all());

        return redirect()->route('medicines.index')->with('success', 'Obat berhasil ditambahkan!');
    }

    // Menampilkan detail obat
    public function show($id) {
        $medicine = Medicine::findOrFail($id);
        return view('medicines.show', compact('medicine'));
    }
}
