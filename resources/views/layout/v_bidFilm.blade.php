@extends('layout.v_template')

@section('title', 'Film')

@section('content')
<li class="nav-item d-none d-sm-inline-block">
<a href="/penawaran/add" class="btn btn-primary btn-sm">Owner Film</a> <br>
     

<!-- Content Wrapper. Contains page content -->


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <td><img src="{{ url('foto/'. $film->foto) }}"  width="500" height="700"></td>
              </div>
            </div>
            <div class="col-12 col-sm-6">
            <table class="table">
            <tr>
                <th width='100px'>Kode Film</th>
                <th width='30px'>:</th>
                <th>{{ $film->kode_film}}</th>
            </tr>
            <tr>
                <th width='100px'>Judul Film</th>
                <th width='30px'>:</th>
                <th>{{ $film->judul_film }}</th>
            </tr>
            <tr>
                <th width='100px'>Tahun Rilis</th>
                <th width='30px'>:</th>
                <th>{{ $film->tanggal_rilis }}</th>
            </tr>
            <tr>
                <th width='100px'>Sinopsis</th>
                <th width='30px'>:</th>
                <th>{{ $film->sinopsis }}</th>
            </tr>
            <tr>
                <th width='100px'>Informasi</th>
                <th width='30px'>:</th>
                <th>{{ $film->informasi }}</th>
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
            </table>
              <hr>
              <a href="/penawaran" class="btn btn-secondary btn-sm">Tambahkan Komentar</a> <br>
              
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!--<form action="/penawaran/insert"method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Penawaran Film</h3>
              </div>-->
              <!-- /.card-header -->
              <!-- form start -->
              <!--<form>
                <div class="card-body">
                  <div class="form-group">
                  <label>Judul</label>
                    <input  class="form-control" placeholder="Input judul">
                  </div>
                  <div class="form-group">
                  <label>No. Hp</label>
                    <input  class="form-control" placeholder="Input No. hp">
                  </div>
                  <div class="form-group">
                  <label>Minimal Penawaran = {{ $film->tanggal_rilis }}</label>
                    <input  class="form-control" placeholder="Input tanggal_rilis">
                  </div>
                  
                </div>-->
                <!-- /.card-body -->

                <!--<div class="card-footer">
                <button class='btn btn-primary btn-sm'>Send</button>
                </div>
              </form>
            </div>-->
    
    </section>
    <!-- /.content -->

@endsection