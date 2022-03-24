@extends('administrator/main')

@section('title', 'Admin | Kriteria')

@section('content')
<!-- Content Start | Kriteria -->
<div class="content transition">
  <div class="container-fluid">
    <h1>Kriteria</h1>
    <br>
    
    @if (session('status'))
      <div class="alert alert-succes">
        {{ session('status') }}
      </div>
    @endif

    <!-- Tab Pane -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Daftar Kriteria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('new-krit') }}">Tambah Data Kriteria</a>
      </li>
    </ul>

    <br>

    <!-- Daftar Alternatif -->
    <div class="table-responsive">
      <table class="table table-bordered table-striped table hover">
        <thead>
          <tr class="table-dark">
            <th>No</th>
            <th>Nama Kriteria</th>
            <th>Bobot Kriteria</th>
            <th>Jenis Atribut</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kriterias as $kriteria)
          @php
            $idout = (string)$kriteria->id;
              if (strlen($idout) <=1){
                $idout = "C0".$idout;
              }else{
                $idout = "C".$idout;
              }
          @endphp   
          <tr>
            <td>{{ $idout }}</td>
            <td>{{ $kriteria->kriteria }}</td>
            <td>{{ $kriteria->bobot_kriteria }}</td>
            <td>{{ $kriteria->atribut }}</td>
            <td>
              <a href="{{ route('edit-krit', $kriteria->id) }}" class="btn btn-warning">Ubah</a>
              <a href="{{ route('del-krit', $kriteria->id) }}" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection