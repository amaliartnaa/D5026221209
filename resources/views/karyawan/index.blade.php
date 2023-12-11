@extends('master2')
@section('title', 'Database Karyawan')

@section('judul_halaman')
<h3>Data Karyawan</h3>

{{-- <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a> --}}
	
<br/>
<br/>
@endsection

@section('konten')
	<table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Hapus Data</th>
        </tr>
        @foreach($karyawan as $k)
            <tr>
                <td>{{ $k->kode_pegawai }}</td>
                <td>{{ Str::upper($k->nama_lengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ Str::lower($k->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $k->kode_pegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br/>
    <br/>
    <a href="karyawan/tambah" class="btn btn-primary">Tambah Data</a>
@endsection