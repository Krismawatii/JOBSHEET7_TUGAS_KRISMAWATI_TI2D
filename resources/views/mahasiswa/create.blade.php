@extends('layouts.app')

@section('content')
<h3>Tambah Mahasiswa</h3>
<form action="{{ route('mahasiswa.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="nim" class="form-label">Nim</label>
      <input type="number" class="form-control" id="nim" name="nim">
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas">
      </div>
      <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-Mail</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat">
      </div>
      <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
