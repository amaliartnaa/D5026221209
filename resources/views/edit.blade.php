{{-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body> --}}
@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pegawai as $p)
		<form action="/pegawai/update" method="post" class="form-horizontal">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
			<div class="form-group row">
				<label for="nama" class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-10">
					<input type="text" required="required" name="nama" class="form-control" value="{{ $p->pegawai_nama }}">
				</div>
			</div>
			<div class="form-group row">
				<label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
				<div class="col-sm-10">
					<input type="text" required="required" name="jabatan" class="form-control" value="{{ $p->pegawai_jabatan }}">
				</div>
			</div>
			<div class="form-group row">
				<label for="umur" class="col-sm-2 control-label">Umur</label>
				<div class="col-sm-10">
					<input type="number" required="required" name="umur" class="form-control" value="{{ $p->pegawai_umur }}">
				</div>
			</div>
			<div class="form-group row">
				<label for="alamat" class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-10">
					<input required="required" name="alamat" class="form-control" value="{{ $p->pegawai_alamat }}">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Simpan Data</button>
				</div>
			</div>
		</form>
	@endforeach
@endsection