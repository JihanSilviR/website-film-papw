@extends('layout.v_template')

@section('title', 'Data Film')

@section('content')
<a href="/film/add" class="btn btn-primary btn-sm">Tambah</a> <br>

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
                <!--<th>No</th>-->
                <th>Kode Film</th>
                <th>Judul Film</th>
                <th>Tahun Rilis</th>
                <th>Sinopsis</th>
                <th>informasi</th>
                <th>Status</th>
                <th>Link Download</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($film as $data)
                <tr>
                    <!--<td>{{ $no++ }}</td>-->
                    <td>{{ $data->kode_film}}</td>
                    <td>{{ $data->judul_film}}</td>
                    <td>{{ $data->tanggal_rilis}}</td>
                    <td>{{ $data->sinopsis}}</td>
                    <td>{{ $data->informasi}}</td>
                    <td>{{ $data->status}}</td>
                    <td>{{ $data->link_download}}</td>
                    <td><img src="{{ url('foto/'. $data->foto) }}" width="50" height="100"></td>
                    <td>
                        <a href="/film/detail/{{ $data->kode_film}}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/film/edit/{{ $data->kode_film}}" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->kode_film}}">
                  Delete
                </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@foreach ($film as $data)
    <div class="modal fade" id="delete{{ $data->kode_film }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{ $data->judul_film }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin Ingin Menghapus Data Ini?&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <a href="/film/delete/{{ $data->kode_film }}" class="btn btn-primary">Iya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach
@endsection