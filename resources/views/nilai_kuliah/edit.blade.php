    @extends('master2')

    @section('konten')
        <h3>Edit Nilai Mata Kuliah</h3>
     
        <a href="nilai_kuliah/index" class="btn btn-primary"> Kembali</a>
        
        <br/>
        <br/>
     
        @foreach($data as $d)
            <form action="/nilai/update" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $d->id }}">
                <div class="form-group row">
                    <label for="nrp" class="col-sm-2 control-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="number" required="required" name="nrp" class="form-control" value="{{ $d->nrp }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_angka" class="col-sm-2 control-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="number" required="required" name="nilai_angka" class="form-control" value="{{ $d->nilai_angka }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sks" class="col-sm-2 control-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="number" required="required" name="sks" class="form-control" value="{{ $d->sks }}">
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