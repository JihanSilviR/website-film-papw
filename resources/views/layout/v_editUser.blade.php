@extends('layout.v_template')

@section('title', 'Edit User')

@section('content')
    <form action="/users/update/{{ $users->id }}"method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Id</label>
                    <input name="id" class="form-control @error('id') is-invalid @enderror"value="{{ $users->id }}"readonly>
                    <div class="text-danger">
                        @error ('id')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input name="name" class="form-control @error('name') is-invalid @enderror"value="{{ $users->name }}">
                    <div class="text-danger">
                        @error ('name')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control @error('email') is-invalid @enderror"value="{{ $users->email }}">
                    <div class="text-danger">
                        @error ('email')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <input name="level" class="form-control @error('level') is-invalid @enderror"value="{{ $users->level }}">
                    <div class="text-danger">
                        @error ('level')
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