@extends('layouts.app')

@section('content')
<div style="background-color: #C8A77A; min-height: 80vh; padding: 40px;">
    <h1 style="text-align: center; color: #3E2723; margin-bottom: 30px;">Daftar Mata Kuliah</h1>

    <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{ route('matakuliah.create') }}" 
           style="background-color: #3E2723; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: bold;">
           + Tambah Mata Kuliah Baru
        </a>
    </div>

    <div style="max-width: 900px; margin: 0 auto; background-color: #D2B48C; padding: 20px; border-radius: 10px;">
        <table style="
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            color: #3E2723;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            font-size: 16px;
        ">
            <thead style="background-color: #3E2723; color: white;">
                <tr>
                    <th style="padding: 12px;">ID</th>
                    <th style="padding: 12px;">Nama Mata Kuliah</th>
                    <th style="padding: 12px;">SKS</th>
                    <th style="padding: 12px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $mk)
                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #D2B48C;">{{ $mk->id }}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #D2B48C;">{{ $mk->nama_mk }}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #D2B48C;">{{ $mk->sks }}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #D2B48C;">
                            <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                               style="background-color: #8B5E3C; color: white; padding: 6px 12px; border-radius: 6px; text-decoration: none; margin-right: 6px;">
                               Edit
                            </a>
                            <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        style="background-color: #B22222; color: white; padding: 6px 12px; border: none; border-radius: 6px; cursor: pointer;"
                                        onclick="return confirm('Yakin ingin menghapus mata kuliah ini?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="padding: 15px; color: #3E2723;">Belum ada data mata kuliah.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
