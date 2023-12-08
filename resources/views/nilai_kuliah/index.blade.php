@extends('master2')
@section('title', 'Database Nilai Mahasiswa')

@section('judul_halaman')
<h3>Nilai Kuliah</h3>

{{-- <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a> --}}
	
<br/>
<br/>
@endsection

@section('konten')
	<table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->nrp }}</td>
                <td>{{ $d->nilai_angka }}</td>
                <td>{{ $d->sks }}</td>
                <td>{{ $d->nilai_huruf }}</td>
                <td>{{ $d->bobot }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('nilai.create') }}">Tambah Data</a>
@endsection