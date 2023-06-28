@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Detail User</h4>
            <p class="card-description">
                <code>User</code>
            </p>
            {{-- <div class="table-responsive"> --}}
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Nama User</label>
                <div class="col-8">
                    : {{ $data->name }}
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Username</label>
                <div class="col-8">
                    : {{ $data->username }}
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Password</label>
                <div class="col-8">
                    : {{ $data->password }}
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Role</label>
                <div class="col-8">
                    : {{ $data->role }}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-form-label"><a href="{{ route('user.index') }}">Kembali</a></label>
            </div>
            {{-- </div> --}}
        </div>
    </div>
@endsection