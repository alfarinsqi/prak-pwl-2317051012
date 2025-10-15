@extends('layouts.app')

@section('content')
<div style="background-color: #C8A77A; min-height: 80vh; padding: 40px;">
    <h1 style="text-align: center; color: #3E2723; margin-bottom: 30px;">Edit Data Mata Kuliah</h1>

    <div style="max-width: 400px; margin: 0 auto; background-color: #D2B48C; padding: 20px; border-radius: 10px;">
        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 15px;">
                <label for="nama_mk" style="display: block; color: #3E2723; font-weight: bold;">Nama Mata Kuliah:</label>
                <input type="text" name="nama_mk" id="nama_mk" value="{{ $mk->nama_mk }}" required
                    style="width: 100%; padding: 8px; border: 1px solid #3E2723; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="sks" style="display: block; color: #3E2723; font-weight: bold;">SKS:</label>
                <input type="number" name="sks" id="sks" value="{{ $mk->sks }}" required
                    style="width: 100%; padding: 8px; border: 1px solid #3E2723; border-radius: 4px;">
            </div>

            <div style="text-align: center;">
                <button type="submit"
                    style="background-color: #3E2723; color: white; padding: 8px 20px; border: none; border-radius: 4px; cursor: pointer;">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
