<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ url('gudang/update/' . $gudang->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode Gudang</label>
            <div class="col-8">
                <input id="kode_gudang" name="kode_gudang" type="text" class="form-control" value="{{ $gudang->kode_gudang }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Gudang</label>
            <div class="col-8">
                <input id="nama_gudang" name="nama_gudang" type="text" class="form-control" value="{{ $gudang->nama_gudang }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>