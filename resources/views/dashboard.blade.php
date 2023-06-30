@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
      <div class="d-flex flex-wrap justify-content-between">
        <h4 class="card-title mb-3">Summary</h4>
      </div>
      <div class="row">
        <div class="col-12"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <div class="mb-5">
            <div class="mr-1">
              <div class="text-info mb-1">
                Total Gudang
              </div>
              <h2 class="mb-2 mt-2 font-weight-bold">{{ $gudang }}</h2>
              <div class="font-weight-bold">
                {{$gudang}} Gudang yang tersedia
              </div>
            </div>
            <hr>
            <div class="mr-1">
              <div class="text-info mb-1">
                Jumlah Kategori Barang
              </div>
              <h2 class="mb-2 mt-2  font-weight-bold">{{$kategoriBarang}}</h2>
              <div class="font-weight-bold">
                {{$kategoriBarang}} kategori Barang 
              </div>
            </div>
            <hr>
            <div class="mr-1">
              <div class="text-info mb-1">
                Jumlah Jenis Barang
              </div>
              <h2 class="mb-2 mt-2  font-weight-bold">{{$jenisBarang}}</h2>
              <div class="font-weight-bold">
                {{$jenisBarang}} Jenis Barang
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection