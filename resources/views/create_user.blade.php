@extends('layouts.app')

@section('content')
<div style="background-color: #C8A77A; min-height: 80vh; padding: 40px;">
    <h1 style="text-align: center; color: #3E2723; margin-bottom: 30px;">Tambah Data Mahasiswa</h1>

    <div style="max-width: 400px; margin: 0 auto; background-color: #D2B48C; padding: 20px; border-radius: 10px;">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="nama" style="display: block; color: #3E2723; font-weight: bold;">Nama:</label>
                <input type="text" name="nama" id="nama" required
                    style="width: 100%; padding: 8px; border: 1px solid #3E2723; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="nim" style="display: block; color: #3E2723; font-weight: bold;">NIM:</label>
                <input type="text" name="nim" id="nim" required
                    style="width: 100%; padding: 8px; border: 1px solid #3E2723; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="kelas_id" style="display: block; color: #3E2723; font-weight: bold;">Kelas:</label>
                <select name="kelas_id" id="kelas_id" required
                    style="width: 100%; padding: 8px; border: 1px solid #3E2723; border-radius: 4px;">
                    <option value="">-- Pilih Kelas --</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>

            <div style="text-align: center;">
                <button type="submit"
                    style="background-color: #3E2723; color: white; padding: 8px 20px; border: none; border-radius: 4px; cursor: pointer;">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
