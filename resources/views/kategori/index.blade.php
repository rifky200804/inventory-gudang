@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Kategori Barang</h4>
            <p class="card-description">
                <code><a href="{{route('kategori.create')}}">Tambah Data</a></code>
            </p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php $no = 0; @endphp
                    @foreach($data as $key => $value)
                    <tbody>
                        <tr>
                            <td>{{$no+1}}</td>
                            <td>{{$value->kode_kategori}}</td>
                            <td>{{$value->nama_kategori}}</td>
                            <td>
                                <a href="{{ route('kategori.show',$value->id) }}" class="badge badge-info">Show</a>
                                <a href="{{ route('kategori.edit',$value->id) }}" class="badge badge-warning">Edit</a>
                                <a href="{{ url('kategori/delete/' . $value->id) }}" class="badge badge-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus produk?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    @php $no++; @endphp
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-6 d-flex justify-content-start">
                            Halaman : {{ $data->currentPage() }} <br/>
                            Jumlah Data : {{ $data->total() }} <br/>
                            Data Per Halaman : {{ $data->perPage() }} <br/>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                            {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection