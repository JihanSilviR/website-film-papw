@extends('layout.v_template')

@section('title', 'Detail Film')

@section('content')
    <table class="table">
        <tr>
            <th width='100px'>Kode</th>
            <th width='30px'>:</th>
            <th>{{ $barang->kode_barang }}</th>
        </tr>
        <tr>
            <th width='100px'>Judul Film</th>
            <th width='30px'>:</th>
            <th>{{ $film->judul_film}}</th>
        </tr>
        <tr>
            <th width='100px'>Tahun Rilis</th>
            <th width='30px'>:</th>
            <th>{{ $film->tanggal_rilis }}</th>
        </tr>
        <tr>
            <th width='100px'>Sinopsis</th>
            <th width='30px'>:</th>
            <th>{{ $film->sinopsis}}</th>
        </tr>
        <tr>
            <th width='100px'>Informasi</th>
            <th width='30px'>:</th>
            <th>{{ $film->informasi}}</th>
        </tr>
        <tr>
            <th width='100px'>Status</th>
            <th width='30px'>:</th>
            <th>{{ $film->status}}</th>
        </tr>
        <tr>
            <th width='100px'>Link Download</th>
            <th width='30px'>:</th>
            <th>{{ $film->link_download}}</th>
        </tr>
        <tr>
            <th width='100px'>Foto</th>
            <th width='30px'>:</th>
            <th><img src="{{ url('foto/'. $film->foto) }}" width="400"></th>
        </tr>
    </table>
@endsection