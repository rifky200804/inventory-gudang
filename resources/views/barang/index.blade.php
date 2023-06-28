@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
@endpush

@push('js')
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
@endpush

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Barang</h4>
            <p class="card-description">
                <code><a href="{{ route('barang.create') }}">Tambah Data Barang</a></code>
            </p>
            <form action="{{route('barang.index')}}" method="get" class="d-flex justify-content-end">
                    <div class="col-md-3 col-sm-6 d-flex justify-content-end">
                        <input type="text" name="keyword" class="form-control" style="" placeholder="search...">
                    </div>
                    <div class="col-md-1 col-sm1" >
                        <button type="submit" class="btn btn-info" style=""><i class="typcn typcn-zoom"></i></button>
                    </div>
                    <div class="col-md-1 col-sm1" >
                        <a  class="btn btn-info" href="/barang/download/pdf?@php if(isset($keyword)){ echo "keyword=$keyword"; } @endphp"><i class="mdi mdi-file" style="color: white"></i></a>
                    </div>
            </form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok Barang</th>
                            <th>Kategori</th>
                            <th>Gudang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php $no = 0; @endphp
                    @foreach ($data as $key => $value)
                        <tbody>
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $value->kode_barang }}</td>
                                <td>{{ $value->nama_barang }}</td>
                                <td>{{ $value->stok_barang }}</td>
                                <td>{{ $value->nama_kategori }}</td>
                                <td>{{ $value->nama_gudang }}</td>
                                <td>
                                    <a href="{{ route('barang.show', $value->id) }}" class="badge badge-info">Show</a>
                                    <a href="{{ route('barang.edit', $value->id) }}" class="badge badge-warning">Edit</a>
                                    <a href="{{ url('barang/delete/' . $value->id) }}" class="badge badge-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus barang?')">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @php $no++; @endphp
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-6 d-flex justify-content-start">
                        Halaman : {{ $data->currentPage() }} <br />
                        Jumlah Data : {{ $data->total() }} <br />
                        Data Per Halaman : {{ $data->perPage() }} <br />
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
