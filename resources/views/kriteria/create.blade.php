@extends('administrator/main')

@section('title', 'Admin | Tambah Kriteria')

@section('content')
<div class="content transition">
  <div class="container-fluid">
    <h1>Tambah Kriteria</h1>
    <br>

    <!-- Tab Pane -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('index-kriteria') }}">Daftar Kriteria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Tambah Data Kriteria</a>
      </li>
    </ul>

    <br>
    <!-- Tambah Kriteria -->
    {!! Form::open(['url' => route('post-kriteria')]) !!}
      @csrf
      <div class="form-group">
        <label for="nama" class="form-label">Nama Kriteria</label>
        <input type="text" class="form-control @error('kriteria') is-invalid @enderror" id="kriteria" placeholder="Masukkan Nama Kriteria" name="kriteria" value="{{ old('kriteria') }}">
        @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="nama" class="form-label">Bobot Kriteria</label>
        <input type="text" class="form-control @error('bobot') is-invalid @enderror" id="bobot" placeholder="Masukkan Bobot Kriteria" name="bobot_kriteria" value="{{ old('bobot_kriteria') }}">
        @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="nama" class="form-label">Jenis Atribut</label>
        <input type="text" class="form-control @error('atribut') is-invalid @enderror" id="atribut" placeholder="Masukkan Jenis Atribut" name="atribut" value="{{ old('atribut') }}">
        @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button class="btn btn-primary" type="submit">Tambah Data</button>
    {!! Form::close() !!}
  </div>
</div>
@endsection