@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Form Input Gudang</h4>
        <p class="card-description">
            <code>Masukan Data Gudang</code>
        </p>
        {{-- <div class="table-responsive"> --}}
                <div class="form-group row">
                    <label for="kode" class="col-4 col-form-label">Nama Gudang</label>
                    <div class="col-8">
                        : {{$data->nama_gudang}}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Kode Gudang</label>
                    <div class="col-8">
                        : {{$data->kode_gudang}}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-form-label"><a href="{{route('gudang.index')}}">Kembali</a></label>
                </div>
        {{-- </div> --}}
    </div>
</div>
@endsection