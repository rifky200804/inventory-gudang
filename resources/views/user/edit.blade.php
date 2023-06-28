@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Form Edit Barang</h4>
        <p class="card-description">
            <code>Edit Data Barang</code>
        </p>
        <div class="table-responsive">
            <form method="POST" action="{{ url('user/update/' . $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Nama User</label>
                    <div class="col-8">
                        <input id="name" name="name" type="text" class="form-control" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">username</label>
                    <div class="col-8">
                        <input id="username" name="username" type="text" class="form-control" value="{{ $user->username }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-4 col-form-label">Password</label>
                    <div class="col-8">
                        <input id="password" name="password" type="text" class="form-control" value="{{ $user->password }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-4 col-form-label">Role</label>
                    <div class="col-8">
                        <select id="role" name="role" class="form-control">
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="pegawai" {{ $user->role == 'pegawai' ? 'selected' : '' }}>Pegawai</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection