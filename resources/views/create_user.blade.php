@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="width: 400px; background-color: #6F4E37; border-radius: 12px;">
        <h3 class="text-center mb-4 text-white">Input Data Baru</h3>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf 

            <div class="mb-3">
                <label for="nama" class="form-label text-white">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label text-white">NPM:</label>
                <input type="text" id="nim" name="nim" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kelas_id" class="form-label text-white">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required>
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelas as $kelasItem) 
                        <option value="{{ $kelasItem->id }}">
                            {{ $kelasItem->nama_kelas }}
                        </option> 
                    @endforeach 
                </select>
            </div>

            <button type="submit" 
                    class="btn w-100" 
                    style="background-color: #d2b48c; color: black; font-weight: bold;">
                Submit
            </button> 
        </form> 
    </div>
</div>
@endsection
