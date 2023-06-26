<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
</head>
<body>
    <h1>Data Kategori {{$data->nama_kategori}}</h1>
    <ul>
        <li>Nama Barang : {{$data->nama_barang}}</li>
        <li>Kode Barang : {{$data->kode_barang}}</li>
        <li>Kategori ID : {{$data->kategori_id}}</li>
        <li>Gudang ID : {{$data->gudang_id}}</li>
    </ul>
    <a href="{{route('barang.index')}}">Kembali</a>
</body>
</html>