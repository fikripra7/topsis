@extends('administrator/main')

@section('title', 'Admin | Ubah Data Nilai Matriks')

@section('content')
<div class="content transition">
  <div class="container-fluid">
    <h1>Ubah Data Nilai Matriks</h1>
    <hr>

    <br>
    <!-- Ubah Nilai Matriks -->
    

    <form method="post" action="{{ route('update-matriks', $matriks->id) }}">
        @csrf
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="kriteria">Kriteria</label>
          </div>
          <select class="custom-select @error('kriteria') is-invalid @enderror" id="kriteria" name="kriteria">
            @foreach ($kriterias as $kriteria)
              <option value="{{ $kriteria->kriteria }}" @if($matriks->kriteria == $kriteria->kriteria) selected='' @endif >{{ $kriteria->kriteria }}</option>
            @endforeach
          </select>
          @error('kriteria')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="poin" class="form-label">Poin</label>
          <input type="text" class="form-control @error('poin') is-invalid @enderror" id="poin" placeholder="Masukkan Poin" name="poin" value="{{ $matriks->poin }}">
          @error('poin')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="nilai" class="form-label">Nilai Kepentingan</label>
          <input type="text" class="form-control @error('nilai') is-invalid @enderror" id="nilai" placeholder="Masukkan Nilai Kepentingan" name="nilai" value="{{ $matriks->nilai }}">
          @error('nilai')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>
  </div>
</div>
@endsection