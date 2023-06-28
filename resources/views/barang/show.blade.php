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
                <label for="kode" class="col-4 col-form-label">Nama Barang</label>
                <div class="col-8">
                    : {{ $data->nama_barang }}
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Kode Barang</label>
                <div class="col-8">
                    : {{ $data->kode_barang }}
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kategori ID</label>
                <div class="col-8">
                    : {{ $data->kategori_id }}
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Gudang ID</label>
                <div class="col-8">
                    : {{ $data->gudang_id }}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-form-label"><a href="{{ route('barang.index') }}">Kembali</a></label>
            </div>
            {{-- </div> --}}
        </div>
    </div>
@endsection