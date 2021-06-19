@extends('layout.v_template')
@section('title', 'Data User')
@section('content')
<td>Level 1 = Admin, </td>
<td>Level 2 = User </td>
<!--<a href="/users/add" class="btn btn-primary btn-sm">Tambah</a> <br>

@if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
        <button type='button' class='close' data-dismis='alert' aria-hidden='true'>&times;</button>
        <h4><i class="icon fas fa-check"></i>Berhasil</h4>
        {{ session('pesan') }}
    </div>
@endif-->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($users as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->level }}</td>
                    <td>
                        <a href="/users/detail/{{ $data->id }}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/users/edit/{{ $data->id }}" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">
                  Delete
                </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@foreach ($users as $data)
    <div class="modal fade" id="delete{{ $data->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{ $data->name }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin Ingin Menghapus Data Ini?&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <a href="/users/delete/{{ $data->id }}" class="btn btn-primary">Iya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach
@endsection