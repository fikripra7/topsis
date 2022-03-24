@extends('administrator/main')

@section('title', 'Admin | Ubah Data Alternatif')

@section('content')
<div class="content transition">
  <div class="container-fluid">
    <h1>Ubah Data Alternatif</h1>
    <hr>

    <br>
    <!-- Ubah Alternatif -->
    

    <form method="post" action="{{ route('update-alt', $alternatif->id) }}">
        @method('patch')
        @csrf
        <div class="form-group mb-3">
          <label for="nama" class="form-label">Nama Alternatif</label>
          <input type="text" class="form-control @error('alternatif') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="alternatif" value="{{ $alternatif->alternatif }}">
          @error('alternatif')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>
  </div>
</div>
@endsection