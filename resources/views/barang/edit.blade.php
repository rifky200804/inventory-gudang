@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Form Edit Barang</h4>
        <p class="card-description">
            <code>Edit Data Barang</code>
        </p>
        <div class="table-responsive">
            <form method="POST" action="{{ url('barang/update/' . $barang->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="kode_barang" class="col-4 col-form-label">Kode Barang</label>
                    <div class="col-8">
                        <input id="kode_barang" name="kode_barang" type="text" class="form-control" value="{{ $barang->kode_barang }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_barang" class="col-4 col-form-label">Nama Barang</label>
                    <div class="col-8">
                        <input id="nama_barang" name="nama_barang" type="text" class="form-control" value="{{ $barang->nama_barang }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori_id" class="col-4 col-form-label">Kategori ID</label>
                    <div class="col-8">
                        <select id="kategori_id" name="kategori_id" class="custom-select">
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                            @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gudang_id" class="col-4 col-form-label">Gudang ID</label>
                    <div class="col-8">
                        <select id="gudang_id" name="gudang_id" class="custom-select">
                            @foreach ($gudang as $g)
                                <option value="{{ $g->id }}">{{ $g->nama_gudang }}</option>
                            @endforeach
                    </select>
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