@extends('layout.v_template')

@section('title', 'Tambah Film')

@section('content')
    <form action="/film/insert"method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Kode Film</label>
                    <input name="kode_film" class="form-control @error('kode_film') is-invalid @enderror"value="{{ old('kode_film') }}">
                    <div class="text-danger">
                        @error ('kode_film')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Judul Film</label>
                    <input name="judul_film" class="form-control @error('judul_film') is-invalid @enderror"value="{{ old('judul_film') }}">
                    <div class="text-danger">
                        @error ('judul_film')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Tahun Rilis</label>
                    <input name="tanggal_rilis" class="form-control @error('tanggal_rilis') is-invalid @enderror"value="{{ old('tanggal_rilis') }}">
                    <div class="text-danger">
                        @error ('tanggal_rilis')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Sinopsis</label>
                    <input name="sinopsis" class="form-control @error('sinopsis') is-invalid @enderror"value="{{ old('sinopsis') }}">
                    <div class="text-danger">
                        @error ('sinopsis')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Informasi</label>
                    <input name="informasi" class="form-control @error('informasi') is-invalid @enderror"value="{{ old('informasi') }}">
                    <div class="text-danger">
                        @error ('informasi')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input name="status" class="form-control @error('status') is-invalid @enderror"value="{{ old('status') }}">
                    <div class="text-danger">
                        @error ('status')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Link Download</label>
                    <input name="link_download" class="form-control @error('link_download') is-invalid @enderror"value="{{ old('link_download') }}">
                    <div class="text-danger">
                        @error ('link_download')
                            {{ $message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control">
                    <div class="text-danger">
                        @error ('foto')
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