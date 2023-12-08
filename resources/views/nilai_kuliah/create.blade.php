@extends('master2')

@section('konten')
	<h3>Tambah Data Nilai Mahasiswa</h3>

	
	<br/>
	<br/>

	<form action="{{ route('nilai.store') }}" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class = "form-group row">
            <label for = "nrp" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-10">
                <input name="nrp" type = "number" class = "form-control" id = "nrp" placeholder = "Masukkan NRP Mahasiswa">
            </div>
        </div>
		<div class="form-group row">
			<label for="nilai-angka" class="col-sm-2 control-label">Nilai Angka</label>
			<div class="col-sm-10">
				<input type="number" name="nilai-angka" class="form-control" id="nilai-angka" placeholder="Masukkan nilai angka">
			</div>
		</div>
		<div class="form-group row">
			<label for="sks" class="col-sm-2 control-label">SKS</label>
			<div class="col-sm-10">
				<input type="number" name="sks" class="form-control" id="sks" placeholder="Masukkan sks">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Simpan Data</button>
			</div>
		</div>
	</form>
@endsection