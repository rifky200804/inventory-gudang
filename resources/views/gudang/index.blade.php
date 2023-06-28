@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Gudang</h4>
            <p class="card-description">
                <code><a href="">Tambah Data</a></code>
            </p>
            <form action="{{ route('gudang.index') }}" method="get" class="d-flex justify-content-end">
                <div class="col-md-3 col-sm-6 d-flex justify-content-end">
                    <input type="text" name="keyword" class="form-control" style="" placeholder="search...">
                </div>
                <div class="col-md-1 col-sm1" >
                    <button type="submit" class="btn btn-info" style=""><i class="typcn typcn-zoom"></i></button>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Gudang</th>
                            <th>Nama Gudang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php $no = 0; @endphp
                    @foreach($data as $key => $value)
                    <tbody>
                        <tr>
                            <td class="">{{$no+1}}</td>
                            <td>{{$value->kode_gudang}}</td>
                            <td>{{$value->nama_gudang}}</td>
                            <td>
                                <a href="{{ route('gudang.show',$value->id) }}" class="badge badge-info">Show</a>
                                <a href="{{ route('gudang.edit',$value->id) }}" class="badge badge-warning">Edit</a>
                                <a href="{{ url('gudang/delete/' . $value->id) }}" class="badge badge-danger"
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