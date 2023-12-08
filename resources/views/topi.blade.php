@extends('main')

@section('content')
    <h3>Data Stock Topi</h3>
    
    {{-- <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai berdasarkan nama .." value="{{ old('cari') }}">
		<br>
		<input type="submit" value="CARI" class="btn btn-primary">
		<br>
	</form> --}}
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			{{-- <th>Opsi</th> --}}
		</tr>
		@foreach($topi as $t)
		<tr>
			<td>{{ $t->topi_kode }}</td>
			<td>{{ $t->topi_merk }}</td>
			<td>{{ $t->topi_stock}}</td>
			<td>{{ $t->tersedia }}</td>
			{{-- <td>
				<a href="/pegawai/view/{{ $t->topi_kode }}" class="btn btn-success">View</a>
				<a href="/pegawai/edit/{{ $t->topi_kode }}" class="btn btn-warning">Edit</a>
				<a href="/pegawai/hapus/{{ $p->topi_kode }}" class="btn btn-danger">Hapus</a>
			</td> --}}
		</tr>
		@endforeach
	</table>
	{{ $topi->links() }}
@endsection