@extends('layout.v_template')

@section('title', 'Detail Penjual')

@section('content')
    <table class="table">
        <tr>
            <th width='100px'>Nama</th>
            <th width='30px'>:</th>
            <th>{{ $penjual->nama_penjual }}</th>
        </tr>
        <tr>
            <th width='100px'>Email</th>
            <th width='30px'>:</th>
            <th>{{ $penjual->email_penjual }}</th>
        </tr>
        <tr>
            <th width='100px'>No. Hanphone</th>
            <th width='30px'>:</th>
            <th>{{ $penjual->no_telp }}</th>
        </tr>
        <tr>
            <th width='100px'>Password</th>
            <th width='30px'>:</th>
            <th>{{ $penjual->password }}</th>
        </tr>
    </table>
@endsection