@extends('layouts.app')

@section('content') 

<div class="container mt-4">
    <h1 class="text-center mb-4" style="color: #6F4E37;">Data Mahasiswa</h1>

    <div class="card shadow-lg">
        <div class="card-body p-0">
            <table class="table text-center align-middle mb-0" 
                   style="background-color: #6F4E37; color: white; border-radius: 8px; overflow: hidden;">
                <thead style="background-color: #5C4033; color: #fff;">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>{{ $user->nama_kelas }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
