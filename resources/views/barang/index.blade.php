@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Barang</h4>
            <p class="card-description">
                <code><a href="{{ route('barang.create') }}">Tambah Data Barang</a></code>
            </p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
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
