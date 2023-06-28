@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Form Input Barang</h4>
        <p class="card-description">
            <code>Masukan Data Gudang</code>
        </p>
        <div class="table-responsive">
            <form method="POST" action="{{ route('gudang.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="kode" class="col-4 col-form-label">Kode Gudang</label>
                    <div class="col-8">
                        <input id="kode_gudang" name="kode_gudang" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Gudang</label>
                    <div class="col-8">
                        <input id="nama_gudang" name="nama_gudang" type="text" class="form-control">
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
