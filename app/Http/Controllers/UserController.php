<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // tampilkan semua user
    public function index()
    {
        $users = User::all();
        return view('list_user', compact('users'));
    }

    // tampilkan form create
    public function create()
    {
        return view('create_user');
    }

    // simpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|numeric|unique:users,nim',
            'kelas_id' => 'required|string',
        ]);

        User::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('user.index')->with('success', 'Data berhasil disimpan!');
    }

    // tampilkan form edit
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit_user', compact('user'));
    }

    // update data user
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            // allow same nim for the record being updated
            'nim' => 'required|numeric|unique:users,nim,' . $id,
            'kelas_id' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('user.index')->with('success', 'Data berhasil diperbarui!');
    }

    // hapus user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data berhasil dihapus!');
    }
}
