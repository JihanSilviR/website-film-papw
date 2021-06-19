@extends('layout.v_template')
@section('title', 'Data Penjual')
@section('content')
<a href="/penjual/add" class="btn btn-primary btn-sm">Tambah</a> <br>

@if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
        <button type='button' class='close' data-dismis='alert' aria-hidden='true'>&times;</button>
        <h4><i class="icon fas fa-check"></i>Berhasil</h4>
        {{ session('pesan') }}
    </div>
@endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Handphone</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($penjual as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_penjual }}</td>
                    <td>{{ $data->email_penjual }}</td>
                    <td>{{ $data->no_telp }}</td>
                    <td>{{ $data->password }}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">Detail</a>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection