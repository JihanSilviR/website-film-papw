@extends('layout.v_template')

@section('title', 'Komentar')

@section('content')
<form action="/penawaran/insert"method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Komentar Film</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                  <label>Nama</label>
                    <input  class="form-control" placeholder="Input nama">
                  </div>
                  <div class="form-group">
                  <label>Komentar</label>
                    <input  class="form-control" placeholder="Input Komentar">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button class='btn btn-primary btn-sm'>Send</button>
                </div>
              </form>
            </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Komentar</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($penawaran as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->User }}</td>
                    <td>{{ $data->Komentar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

   
@endsection