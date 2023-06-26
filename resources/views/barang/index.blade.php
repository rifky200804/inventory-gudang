<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
</head>
<body>
    <h1>Data Barang</h1>
    <a class="btn btn-primary" href="{{ url('barang/create') }}">Create</a>
    <table cellspacing = "0px" cellpadding="5px" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori ID</th>
                <th>Gudang ID</th>
                <th>Aksi</th>
            </tr>
        </thead>
        @php $no = 0; @endphp
        @foreach($data as $key => $value)
        <tbody>
            <tr>
                <td>{{$no+1}}</td>
                <td>{{$value->kode_barang}}</td>
                <td>{{$value->nama_barang}}</td>
                <td>{{$value->kategori_id}}</td>
                <td>{{$value->gudang_id}}</td>
                <td>
                    <a href="{{ route('barang.show',$value->id) }}">Show</a>
                    <a href="{{ route('barang.edit',$value->id) }}">Edit</a>
                    <a href="{{ url('barang/delete/' . $value->id) }}" class="btn btn-danger"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus produk?')">Delete</a>
                </td>
            </tr>
        </tbody>
        @php $no++; @endphp
        @endforeach
    </table>
</body>
</html>