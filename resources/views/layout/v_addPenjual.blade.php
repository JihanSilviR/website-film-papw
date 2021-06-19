@extends('layout.v_template')

@section('title', 'Tambah Penjual')

@section('content')
    <form action="/penjual/insert"method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nama Penjual</label>
                    <input name="nama_penjual" class="form-control @error('nama_penjual') is-invalid @enderror"value="{{ old('nama_penjual') }}">
                    <div class="text-danger">
                        @error ('nama_penjual')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Email Penjual</label>
                    <input name="email_penjual" class="form-control @error('email_penjual') is-invalid @enderror"value="{{ old('email_penjual') }}">
                    <div class="text-danger">
                        @error ('email_penjual')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>No. HP</label>
                    <input name="no_telp" class="form-control @error('no_telp') is-invalid @enderror"value="{{ old('no_telp') }}">
                    <div class="text-danger">
                        @error ('no_telp')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
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