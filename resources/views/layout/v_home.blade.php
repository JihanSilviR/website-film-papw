@extends('layout.v_template')

@section('title','Home')

@section('content')

<header>
    <div class='header'>
        <h1>Welcome To GilaNonton</h1>
        <h3>Website GilaNonton memberikan kenyamanan pengguna untuk men-download film.
        Dapatkan film anda dan nikmati waktu anda</h3>
    </div>
</header>
<style>
    header {
        background-color: red;
        padding: 100px;
        font-family: Arial, Helvetica, sans-serif;
    }
    h1 {
        text-align: center;
        text-transform: uppercase;
        color: grey;
        font-size: 50px;
    }
    h3 {
        text-indent: 50px;
        text-align: center;
        color: white;
        font-size: 25px;
    }
</style>

<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
    <?php $no=1; ?>
        @foreach ($film as $data)
        <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-light">
                <div class="inner">
                    <tr>
                        <td><img src="{{ url('foto/'. $data->foto) }}" width="240" height="380"></td> <br>
                        <td>Judul Film : {{ $data->judul_film }}</td> <br>
                        <td>Tahun Rilis : {{ $data->tanggal_rilis }}</td> <br>
                    </tr>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/film/bid/{{ $data->kode_film }}" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endforeach
    </div>
    <footer>
         <h5>Our Contact</h5>
         <a v-on:click v-on:click="prevent()" href="https://www.instagram.com/"><img src="{{asset('template/')}}/dist/img/ig.png" alt="" width="40" height="40" align="is-centered"></a>
         <a v-on:click v-on:click="prevent()" href="https://www.facebook.com/"><img src="{{asset('template/')}}/dist/img/fb.png" alt="" width="40" height="40" align="is-centered"></a>
         <a v-on:click v-on:click="prevent()" href="https://www.tweeter.com/"><img src="{{asset('template/')}}/dist/img/tw.png" alt="" width="40" height="40" align="is-centered"></a>
            <p align="center">@Gila.Nonton</p>  
        <div>
        </footer>
</div>


@endsection