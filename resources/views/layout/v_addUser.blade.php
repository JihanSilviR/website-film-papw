@extends('layout.v_template')

@section('title', 'Tambah User')

@section('content')
    <form action="/user/insert"method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nama User</label>
                    <input name="name" class="form-control @error('name') is-invalid @enderror"value="{{ old('name') }}">
                    <div class="text-danger">
                        @error ('name')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Email user</label>
                    <input name="email" class="form-control @error('email') is-invalid @enderror"value="{{ old('email') }}">
                    <div class="text-danger">
                        @error ('email')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <!--<div class="form-group">
                    <label>No. HP</label>
                    <input name="no_telp" class="form-control @error('no_telp') is-invalid @enderror"value="{{ old('no_telp') }}">
                    <div class="text-danger">
                        @error ('no_telp')
                            {{ $message}}
                        @enderror
                    </div>
                </div>-->
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" class="form-control @error('password') is-invalid @enderror"value="{{ old('password') }}">
                    <div class="text-danger">
                        @error ('password')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button class='btn btn-primary btn-sm'>Simpan</button>
                </div>
            </div>
        </div>
        </div>
        
    </form>
@endsection