<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ url('kategori/update/' . $kategori->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode Kategori</label>
            <div class="col-8">
                <input id="kode_kategori" name="kode_kategori" type="text" class="form-control" value="{{ $kategori->kode_kategori }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_kategori" class="col-4 col-form-label">Nama Kategori</label>
            <div class="col-8">
                <input id="nama_kategori" name="nama_kategori" type="text" class="form-control" value="{{ $kategori->nama_kategori }}">
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