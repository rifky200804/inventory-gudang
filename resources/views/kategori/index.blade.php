<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
</head>
<body>
    <h1>Data Kategori</h1>
    <a class="btn btn-primary" href="{{ url('kategori/create') }}">Create</a>
    <table cellspacing = "0px" cellpadding="5px" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Gudang</th>
                <th>Nama Gudang</th>
                <th>Gudang ID</th>
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
                <td>{{$value->gudang_id}}</td>
                <td>
                    <a href="{{ route('kategori.show',$value->id) }}">Show</a>
                    <a href="{{ route('kategori.edit',$value->id) }}">Edit</a>
                    <a href="{{ url('kategori/delete/' . $value->id) }}" class="btn btn-danger"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus produk?')">Delete</a>
                </td>
            </tr>
        </tbody>
        @php $no++; @endphp
        @endforeach
    </table>
</body>
</html>