@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Detail Kategori Barang</h4>
        <p class="card-description">
            <code>Kategori Barang</code>
        </p>
        {{-- <div class="table-responsive"> --}}
                <div class="form-group row">
                    <label for="kode" class="col-4 col-form-label">Nama Kategori</label>
                    <div class="col-8">
                        : {{$data->nama_kategori}}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Kode Kategori</label>
                    <div class="col-8">
                        : {{$data->kode_kategori}}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-form-label"><a href="{{route('kategori.index')}}">Kembali</a></label>
                </div>
        {{-- </div> --}}
    </div>
</div>
@endsection