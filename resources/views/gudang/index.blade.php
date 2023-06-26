<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
</head>
<body>
    <h1>Data Gudang</h1>
    <a class="btn btn-primary" href="{{ url('gudang/create') }}">Create</a>
    <table cellspacing = "0px" cellpadding="5px" border="1">
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
                <td>{{$no+1}}</td>
                <td>{{$value->kode_gudang}}</td>
                <td>{{$value->nama_gudang}}</td>
                <td>
                    <a href="{{ route('gudang.show',$value->id) }}">Show</a>
                </td>
            </tr>
        </tbody>
        @php $no++; @endphp
        @endforeach
    </table>
</body>
</html>