@extends('administrator/main')

@section('title', 'Admin | Ubah Data Kriteria')

@section('content')
<div class="content transition">
  <div class="container-fluid">
    <h1>Ubah Data Kriteria</h1>
    <hr>

    <br>
    <!-- Ubah Alternatif -->
    

    <form method="post" action="{{ route('update-krit', $kriteria->id) }}">
      @csrf
      <div class="form-group mb-3">
        <label for="nama" class="form-label">Nama Kriteria</label>
        <input type="text" class="form-control @error('kriteria') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="kriteria" value="{{ $kriteria->kriteria }}">
        @error('kriteria')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label for="nama" class="form-label">Bobot Kriteria</label>
        <input type="text" class="form-control @error('bobot_kriteria') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="bobot_kriteria" value="{{ $kriteria->bobot_kriteria }}">
        @error('bobot_kriteria')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label for="nama" class="form-label">Atribut</label>
        <input type="text" class="form-control @error('atribut') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="atribut" value="{{ $kriteria->atribut }}">
        @error('atribut')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
  </div>
</div>
@endsection