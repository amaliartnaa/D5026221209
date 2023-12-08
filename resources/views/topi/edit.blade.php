@extends('master2')

@section('konten')
    <h3>Edit Data Topi</h3>
 
    <a href="topi/index" class="btn btn-primary"> Kembali</a>
    
    <br/>
    <br/>
 
    @foreach($topi as $t)
        <form action="/topi/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->kode_topi }}">
            <div class="form-group row">
                <label for="merk" class="col-sm-2 control-label">Merk Topi</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="merk" class="form-control" value="{{ $t->merk_topi }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="stock" class="col-sm-2 control-label">Stock Topi</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="stock" class="form-control" value="{{ $t->stock_topi }}">
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
            <div class="form-group row">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection