<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Input Barang</h1>
    <form method="POST" action="{{ url('kategori/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="kode_kategori" class="col-4 col-form-label">Kode Kategori</label>
            <div class="col-8">
                <input id="kode_kategori" name="kode_kategori" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_kategori" class="col-4 col-form-label">Nama Kategori</label>
            <div class="col-8">
                <input id="nama_kategori" name="nama_kategori" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="gudang_id" class="col-4 col-form-label">Gudang ID</label>
            <div class="col-8">
                <select id="gudang_id" name="gudang_id" class="custom-select">
                    @foreach ($gudang as $g)
                        <option value="{{ $g->id }}">{{ $g->nama_gudang }}</option>
                    @endforeach
                </select>
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