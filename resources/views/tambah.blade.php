@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class = "form-group row">
            <label for = "nama" class = "col-sm-2 control-label">First Name</label>
            <div class = "col-sm-10">
                <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan nama pegawai">
            </div>
        </div>
		<div class="form-group row">
			<label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
			<div class="col-sm-10">
				<input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukkan jabatan pegawai">
			</div>
		</div>
		<div class="form-group row">
			<label for="umur" class="col-sm-2 control-label">Umur</label>
			<div class="col-sm-10">
				<input type="number" name="umur" class="form-control" id="umur" placeholder="Masukkan umur pegawai">
			</div>
		</div>
		<div class="form-group row">
			<label for="alamat" class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-10">
				<input name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat pegawai">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Simpan Data</button>
			</div>
		</div>
	</form>
@endsection