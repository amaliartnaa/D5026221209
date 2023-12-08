@extends('master2')
@section('title', 'Database Topi')

@section('judul_halaman')
<h3>Data Topi</h3>

{{-- <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a> --}}
	
<br/>
<br/>
@endsection

@section('konten')
	<table class="table table-striped table-hover">
        <tr>
            <th>Kode Topi</th>
            <th>Merk Topi</th>
            <th>Stock Topi</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach($topi as $t)
            <tr>
                <td>{{ $t->kode_topi }}</td>
                <td>{{ $t->merk_topi }}</td>
                <td>{{ $t->stock_topi }}</td>
                <td>{{ $t->tersedia }}</td>
                <td>
                    <a href="/topi/view/{{ $t->kode_topi }}" class="btn btn-success">View</a>
                    <a href="/topi/edit/{{ $t->kode_topi }}" class="btn btn-warning">Edit</a>
                    <a href="/topi/hapus/{{ $t->kode_topi }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
	{{ $topi->links() }}
    <br/>
    <br/>
    <a href="topi/tambah" class="btn btn-primary">Tambah Data</a>
@endsection