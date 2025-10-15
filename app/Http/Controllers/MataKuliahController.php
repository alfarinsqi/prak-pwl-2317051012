<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mks = MataKuliah::all();
        return view('list_mk', compact('mks'));
    }

    public function create()
    {
        return view('create_mk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|numeric',
        ]);

        MataKuliah::create([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        // ⬇️ Setelah berhasil tambah, arahkan ke list
        return redirect()->route('matakuliah.index')
                         ->with('success', 'Mata kuliah berhasil ditambahkan!');
    }

    public function edit($id)
{
    $mk = MataKuliah::findOrFail($id);
    return view('edit_mk', compact('mk'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'nama_mk' => 'required|string|max:255',
        'sks' => 'required|numeric',
    ]);

    $mk = MataKuliah::findOrFail($id); // ambil data berdasarkan id

    $mk->update([
        'nama_mk' => $request->nama_mk,
        'sks' => $request->sks,
    ]);

    return redirect()->route('matakuliah.index')
                     ->with('success', 'Mata kuliah berhasil diperbarui!');
}


   public function destroy($id)
{
    $mk = MataKuliah::findOrFail($id);
    $mk->delete();

    return redirect()->route('matakuliah.index')
                     ->with('success', 'Mata kuliah berhasil dihapus!');
}

}
