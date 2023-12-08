@extends('master2')

@section('konten')
    <div class="row">
        <div class="col-md-6"></div>

        <div class="col-md-6">
            @foreach($topi as $t)
            <div class="row mb-3">
                <div class="col-sm-3">Kode Topi</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">{{ $t->kode_topi }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">Merk Topi</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">{{ $t->merk_topi }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">Stock Topi</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">{{ $t->stock_topi }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">Tersedia</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">{{ $t->tersedia }}</div>
            </div>
                <a href="/topi" class="btn btn-primary">OK</a>
            @endforeach
        </div>
    </div>
@endsection  