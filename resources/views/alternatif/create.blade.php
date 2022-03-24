@extends('administrator/main')

@section('title', 'Admin | Tambah Alternatif')

@section('content')
<div class="content transition">
  <div class="container-fluid">
    <h1>Tambah Alternatif</h1>
    <br>

    <!-- Tab Pane -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('index-alternatif') }}">Daftar Alternatif</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Tambah Data Alternatif</a>
      </li>
    </ul>

    <br>
    <!-- Tambah Alternatif -->
    {!! Form::open(['url' => route('post-alternatif')]) !!}
      @csrf
      <div class="form-group">
        <label for="nama" class="form-label">Nama Alternatif</label>
        <input type="text" class="form-control @error('alternatif') is-invalid @enderror" id="alternatif" placeholder="Masukkan Nama Alternatif" name="alternatif" value="{{ old('alternatif') }}">
        @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button class="btn btn-primary" type="submit">Tambah Data</button>
    {!! Form::close() !!}
  </div>
</div>
@endsection