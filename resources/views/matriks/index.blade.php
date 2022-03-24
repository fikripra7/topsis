@extends('administrator/main')

@section('title', 'Admin | Nilai Matriks')

@section('content')
<!-- Content Start | Nilai Matriks -->
<div class="content transition">
  <div class="container-fluid">
    <h1>Nilai Matriks</h1>
    <br>
    
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif

    <!-- Tab Pane -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Daftar Nilai Matriks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('new-matriks') }}">Tambah Data Nilai Matriks</a>
      </li>
    </ul>

    <br>

    <!-- Daftar Nilai Matriks -->
    <div class="table-responsive">
      <table class="table table-bordered table-striped table hover">
        <thead>
          <tr class="table-dark">
            <th>No</th>
            <th>Kriteria</th>
            <th>Poin</th>
            <th>Nilai</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>  
          @foreach($matriks as $matrik)
          <tr>
            <td>{{ $matrik->id }}</td>
            <td>{{ $matrik->kriteria }}</td>
            <td>{{ $matrik->poin }}</td>
            <td>{{ $matrik->nilai }}</td>
            <td>
              <a href="{{ route('edit-matriks', $matrik->id) }}" class="btn btn-warning btn-sm">Ubah</a>
              <a href="{{ route('del-matriks', $matrik->id) }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection