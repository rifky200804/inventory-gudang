@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Form Edit Kategori Barang</h4>
        <p class="card-description">
            <code>Edit Data Kategori Barang</code>
        </p>
        <div class="table-responsive">
            <form method="POST" action="{{ url('kategori/update/' . $kategori->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="kode" class="col-4 col-form-label">Kode Kategori</label>
                    <div class="col-8">
                        <input id="kode_kategori" name="kode_kategori" type="text" class="form-control" value="{{ $kategori->kode_kategori }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_kategori" class="col-4 col-form-label">Nama Kategori</label>
                    <div class="col-8">
                        <input id="nama_kategori" name="nama_kategori" type="text" class="form-control" value="{{ $kategori->nama_kategori }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection