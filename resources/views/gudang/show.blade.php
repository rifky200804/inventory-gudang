<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
</head>
<body>
    <h1>Data Gudang {{$data->nama_gudang}}</h1>
    <ul>
        <li>Nama Gudang : {{$data->nama_gudang}}</li>
        <li>Kode Gudang : {{$data->kode_gudang}}</li>
    </ul>
    <a href="{{route('gudang.index')}}">Kembali</a>
</body>
</html>