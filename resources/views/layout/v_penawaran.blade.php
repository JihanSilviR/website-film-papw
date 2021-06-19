@extends('layout.v_template')

@section('title', 'Owner Film')

@section('content')
    
      <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Owner Film</h3>
              </div>-->
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/penawaran/insert"method="POST" enctype="multipart/form-data">
        @csrf
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
@endsection