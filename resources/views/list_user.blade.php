@extends('layouts.app')

@section('content')
<div style="background-color: #C8A77A; min-height: 80vh; padding: 40px;">
    <h1 style="text-align: center; color: #3E2723; margin-bottom: 30px;">Data Mahasiswa</h1>

    @if(session('success'))
        <div style="width:90%; margin: 0 auto 16px; text-align:center; color:#155724; background:#d4edda; padding:10px; border-radius:6px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="max-width: 900px; margin: 0 auto;">
        <div style="text-align: right; margin-bottom: 8px;">
            <a href="{{ route('user.create') }}" style="background-color: #3E2723; color: white; padding: 8px 14px; border-radius: 6px; text-decoration: none;">+ Tambah Mahasiswa</a>
        </div>

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
                    <th style="padding: 12px;">Nama</th>
                    <th style="padding: 12px;">NPM</th>
                    <th style="padding: 12px;">Kelas</th>
                    <th style="padding: 12px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #EEE;">{{ $user->id }}</td>
                        <td style="padding: 12px; border-bottom: 1px solid #EEE;">{{ $user->nama }}</td>
                        <td style="padding: 12px; border-bottom: 1px solid #EEE;">{{ $user->nim }}</td>
                        <td style="padding: 12px; border-bottom: 1px solid #EEE;">{{ $user->kelas_id }}</td>
                        <td style="padding: 12px; border-bottom: 1px solid #EEE;">
                            <a href="{{ route('user.edit', $user->id) }}" 
                               style="background-color: #8B5E3C; color: white; padding: 6px 10px; border-radius: 6px; text-decoration: none; margin-right: 6px;">
                                Edit
                            </a>

                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')"
                                    style="background-color: #B22222; color: white; padding: 6px 10px; border: none; border-radius: 6px; cursor: pointer;">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="padding: 15px; color: #3E2723;">Belum ada data mahasiswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
