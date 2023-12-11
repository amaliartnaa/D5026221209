@extends('master2')

@section('konten')
	<h3>Tambah Data Karyawan</h3>

	
	<br/>
	<br/>

	<form action="/karyawan" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class = "form-group row">
            <label for = "kode" class = "col-sm-2 control-label">Kode Pegawai</label>
            <div class = "col-sm-10">
                <input name="kode" type = "number" class = "form-control" id = "kode" placeholder = "Masukkan kode pegawai" required>
            </div>
        </div>
		<div class="form-group row">
			<label for="nama" class="col-sm-2 control-label" style="text-transform: uppercase" >Nama Lengkap</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="divisi" class="col-sm-2 control-label">Divisi</label>
			<div class="col-sm-10">
				<input type="text" name="divisi" class="form-control" id="divisi" placeholder="Masukkan divisi" required>
			</div>
		</div>
        <div class="form-group row">
			<label for="departemen" class="col-sm-2 control-label">Departemen</label>
			<div class="col-sm-10">
				<input type="text" name="departemen" class="form-control" id="departemen" placeholder="Masukkan departemen" required>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Simpan Data</button>
			</div>
		</div>
	</form>
@endsection