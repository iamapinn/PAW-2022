@extends('layout.main')
@section('content')
    <h1 class="mt-3">{{ $nama; }}</h1>
    <img src="{{ $img; }}" alt="{{ $nama; }}" width="200" class="rounded-circle shadow">
    
    {{-- membuat box biodata --}}
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            Biodata
        </div>
        <div class="card-body text-start">
            <table>
                <tr class="card-text">
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $nama; }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{ $nim; }}</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>{{ $kelas; }}</td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td>{{ $semester; }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $alamat; }}</td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>:</td>
                    <td>{{ $prodi; }}</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>{{ $jurusan; }}</td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>:</td>
                    <td>{{ $fakultas; }}</td>
                </tr>
                <tr>
                    <td>Universitas</td>
                    <td>:</td>
                    <td>{{ $universitas; }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection