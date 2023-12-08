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
            <th>Opsi</th>
        </tr>
        @foreach($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->nrp }}</td>
                <td>{{ $d->nilai_angka }}</td>
                <td>{{ $d->sks }}</td>
                <td
                @php
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
                @endphp
                >{{ $nilaiHuruf }}</td>
                <td>{{ $d->nilai_angka * $d->sks }}</td>
                <td>
                    <a href="/nilai/view/{{ $d->id }}" class="btn btn-success">View</a>
                    <a href="/nilai/edit/{{ $d->id }}" class="btn btn-warning">Edit</a>
                    <a href="/nilai/hapus/{{ $d->id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
	{{ $data->links() }}
    <br/>
    <br/>
    <a href="nilai/tambah" class="btn btn-primary">Tambah Data</a>
@endsection