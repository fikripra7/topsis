@extends('administrator/main')

@section('title', 'Admin | Tambah Nilai Matriks')

@section('content')
<div class="content transition">
  <div class="container-fluid">
    <h1>Tambah Nilai Matriks</h1>
    <br>

    <!-- Tab Pane -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('index-matriks') }}">Daftar Nilai Matriks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Tambah Data Nilai Matriks</a>
      </li>
    </ul>

    <br>
    <!-- Tambah Nilai Matriks -->
    {!! Form::open(['url' => route('post-matriks')]) !!}
      @csrf
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="kriteria">Kriteria</label>
        </div>
        <select class="custom-select @error('kriteria') is-invalid @enderror" id="kriteria" name="kriteria">
          <option selected>Pilih Kriteria...</option>
          @foreach ($kriterias as $kriteria)
            <option value="{{ $kriteria->kriteria }}">{{ $kriteria->kriteria }}</option>
          @endforeach
        </select>
        @error('kriteria')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="poin" class="form-label">Poin</label>
        <input type="text" class="form-control @error('poin') is-invalid @enderror" id="poin" placeholder="Masukkan Poin" name="poin" value="{{ old('poin') }}">
        @error('poin')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="nilai" class="form-label">Nilai Kepentingan</label>
        <input type="text" class="form-control @error('nilai') is-invalid @enderror" id="nilai" placeholder="Masukkan Nilai Kepentingan" name="nilai" value="{{ old('nilai') }}">
        @error('nilai')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button class="btn btn-primary" type="submit">Tambah Data</button>
    {!! Form::close() !!}
  </div>
</div>
@endsection