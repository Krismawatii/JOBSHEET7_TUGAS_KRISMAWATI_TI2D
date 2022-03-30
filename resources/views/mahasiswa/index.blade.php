@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-2">
        <a href="{{route('mahasiswa.create')}}" class="btn btn-primary mb-2">Input Mahasiswa</a>
    </div>
    <div class="col-md">
        <form class="d-flex" action="" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="name">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</div>
<table class="table table-dark table-hover">
    <thead>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>E-Mail</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $loop ->iteration }}</td>
            <td>{{ $mhs -> nim ?? '' }}</td>
            <td>{{ $mhs -> nama ?? '' }}</td>
            <td>{{ $mhs -> kelas ?? ''}}</td>
            <td>{{ $mhs -> jurusan ?? ''}}</td>
            <td>{{ $mhs -> email }}</td>
            <td>{{ $mhs -> alamat }}</td>
            <td>{{ $mhs -> tanggal_lahir }}</td>
            <td>
                <a href="{{ route('mahasiswa.show', $mhs -> id_mahasiswa) }}" class="badge bg-primary">Show</a>
                <a href="{{ route('mahasiswa.edit', $mhs -> id_mahasiswa) }}" class="badge bg-warning">Edit</a>
                <a href="#"
                class="badge bg-danger"
                onclick="event.preventDefault(); document.getElementById('form-destroy-{{ $mhs->id_mahasiswa }}').submit()">Delete</a>
                <form action="{{ route('mahasiswa.destroy', $mhs -> id_mahasiswa) }}" method="post" id="form-destroy-{{ $mhs->id_mahasiswa }}">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
  </table>
  {{ $mahasiswa->links() }}
@endsection
