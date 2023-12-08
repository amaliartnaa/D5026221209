@extends('master2')

@section('konten')
    <div class="row">
        <div class="col-md-6"></div>

        <div class="col-md-6">
            @foreach($data as $d)
            <div class="row mb-3">
                <div class="col-sm-2">Nama</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">{{ $p->pegawai_nama }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">Jabatan</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">{{ $p->pegawai_jabatan }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">Umur</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">{{ $p->pegawai_umur }}</div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-2">Alamat</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-8">{{ $p->pegawai_alamat }}</div>
            </div>
                <a href="/pegawai" class="btn btn-primary">OK</a>
            @endforeach
        </div>
    </div>
@endsection  