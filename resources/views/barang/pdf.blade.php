<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Data Barang</title>
</head>
<body>
    <h1 align="center">Data Barang</h1>
    <hr>
    <table width="100%" border="1" cellpadding="5px" cellspacing="0px">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Gudang</th>
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
                </tr>
            </tbody>
            @php $no++; @endphp
        @endforeach
    </table>
</body>
</html>l