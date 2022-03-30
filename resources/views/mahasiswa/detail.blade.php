@extends('layouts.app')

@section('content')
<table class="table">
    <tbody>
        <tr>
            <th>Nim</th>
            <th>:</th>
            <td>{{$mahasiswa -> nim}}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <th>:</th>
            <td>{{$mahasiswa -> nama}}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <td>{{$mahasiswa -> kelas }}</td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <th>:</th>
            <td>{{$mahasiswa -> jurusan}}</td>
        </tr>
        <tr>
            <th>E-Mail</th>
            <th>:</th>
            <td>{{$mahasiswa -> email}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <td>{{$mahasiswa -> alamat}}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <td>{{$mahasiswa -> tanggal_lahir}}</td>
        </tr>
    </tbody>
</table>
@endsection
