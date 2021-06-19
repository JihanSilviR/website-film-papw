@extends('layout.v_template')

@section('title', 'Detail User')

@section('content')
    <table class="table">
        <tr>
            <th width='100px'>Nama</th>
            <th width='30px'>:</th>
            <th>{{ $users->name }}</th>
        </tr>
        <tr>
            <th width='100px'>Email</th>
            <th width='30px'>:</th>
            <th>{{ $users->email }}</th>
        </tr>
            <th width='100px'>Password</th>
            <th width='30px'>:</th>
            <th>{{ $users->password }}</th>
        </tr>
        </tr>
            <th width='100px'>Level</th>
            <th width='30px'>:</th>
            <th>{{ $users->level }}</th>
        </tr>
    </table>
@endsection