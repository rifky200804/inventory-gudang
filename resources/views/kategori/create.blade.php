@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Form Input Kategori Barang</h4>
        <p class="card-description">
            <code>Masukan Data Kategori Barang</code>
        </p>
        <div class="table-responsive">
            <form method="POST" action="{{ url('kategori/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="kode_kategori" class="col-4 col-form-label">Kode Kategori</label>
                    <div class="col-8">
                        <input id="kode_kategori" name="kode_kategori" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_kategori" class="col-4 col-form-label">Nama Kategori</label>
                    <div class="col-8">
                        <input id="nama_kategori" name="nama_kategori" type="text" class="form-control">
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