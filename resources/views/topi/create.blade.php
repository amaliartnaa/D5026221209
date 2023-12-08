@extends('master2')

@section('konten')
	<h3>Tambah Data Topi</h3>

	
	<br/>
	<br/>

	<form action="/topi" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class = "form-group row">
            <label for = "merk" class = "col-sm-2 control-label">Merk Topi</label>
            <div class = "col-sm-10">
                <input name="merk" type = "text" class = "form-control" id = "merk" placeholder = "Masukkan merk topi">
            </div>
        </div>
		<div class="form-group row">
			<label for="stock" class="col-sm-2 control-label">Stock Topi</label>
			<div class="col-sm-10">
				<input type="number" name="stock" value="{{ old('stock_topi') }}" class="form-control" id="stock" placeholder="Masukkan stock topi" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
			<div class="col-sm-10">
				<select name="tersedia" id="tersedia" class="form-control">
                    <option value="Y">Y</option>
                    <option value="N">N</option>
                </select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Simpan Data</button>
			</div>
		</div>
	</form>
@endsection