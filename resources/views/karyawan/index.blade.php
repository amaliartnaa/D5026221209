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
        </tr>
        @foreach($karyawan as $k)
            <tr
            {{-- @php
            $nilaiHuruf = '';

            if ($d->nilai_angka <= 40) {
                $nilaiHuruf = 'D';
            } elseif ($d->nilai_angka <= 60) {
                $nilaiHuruf = 'C';
            } elseif ($d->nilai_angka <= 80) {
                $nilaiHuruf = 'B';
            } else {
                $nilaiHuruf = 'A';
            }
        @endphp --}}
        >
                <td>{{ $k->kode_pegawai }}</td>
                <td>{{ $k->nama_lengkap }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ $k->departemen }}</td>
                <td>
                    {{-- <a href="/karyawan/view/{{ $k->kode_pegawai }}" class="btn btn-success">View</a>
                    <a href="/karyawan/edit/{{ $k->kode_pegawai }}" class="btn btn-warning">Edit</a> --}}
                    <a href="/karyawan/hapus/{{ $k->kode_pegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
	{{ $karyawan->links() }}
    <br/>
    <br/>
    <a href="karyawan/tambah" class="btn btn-primary">Tambah Data</a>
@endsection