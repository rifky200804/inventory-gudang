@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Form Input Data User</h4>
        <p class="card-description">
            <code>Masukan Data User</code>
        </p>
        <div class="table-responsive">
            <form method="POST" action="{{ url('user/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Nama User</label>
                    <div class="col-8">
                        <input id="name" name="name" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">Username</label>
                    <div class="col-8">
                        <input id="username" name="username" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-4 col-form-label">Password</label>
                    <div class="col-8">
                        <input id="password" name="password" type="text" class="form-control">
                    </div>
                </div><div class="form-group row">
                    <label for="role" class="col-4 col-form-label">Role</label>
                    <div class="col-8">
                        <select id="role" name="role" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="pegawai">Pegawai</option>
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
