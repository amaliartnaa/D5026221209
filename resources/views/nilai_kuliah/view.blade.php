@extends('master2')

@section('konten')
    <div class="row">
        <div class="col-md-6"></div>

        <div class="col-md-6">
            @foreach($data as $d)
            <div class="row mb-3">
                <div class="col-sm-2">NRP</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">{{ $d->nrp }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">Nilai Angka</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">{{ $d->nilai_angka }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">SKS</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-5">{{ $d->sks }}</div>
            </div>
                <a href="/nilai" class="btn btn-primary">OK</a>
            @endforeach
        </div>
    </div>
@endsection  