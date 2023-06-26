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
        <li>Nama Kategori : {{$data->nama_kategori}}</li>
        <li>Kode Kategori : {{$data->kode_kategori}}</li>
        <li>Gudang ID : {{$data->gudang_id}}</li>
    </ul>
    <a href="{{route('kategori.index')}}">Kembali</a>
</body>
</html>