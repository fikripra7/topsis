@extends('administrator/main')

@section('title', 'Admin | Alternatif')

@section('content')
<!-- Content Start | Alternatif -->
<div class="content transition">
  <div class="container-fluid">
    <h1>Alternatif</h1>
    <br>
    
    @if (session('status'))
      <div class="alert alert-succes">
        {{ session('status') }}
      </div>
    @endif

    <!-- Tab Pane -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Daftar Alternatif</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('new-alt') }}">Tambah Data Alternatif</a>
      </li>
    </ul>

    <br>

    <!-- Daftar Alternatif -->
    <div class="table-responsive">
      <table class="table table-bordered table-striped table hover">
        <thead>
          <tr class="table-dark">
            <th>No</th>
            <th>Nama Alternatif</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($alternatifs as $alternatif)
          @php
            $idout = (string)$alternatif->id;
              if (strlen($idout) <=1){
                $idout = "A0".$idout;
              }else{
                $idout = "A".$idout;
              }
          @endphp   
          <tr>
            <td>{{ $idout }}</td>
            <td>{{ $alternatif->alternatif }}</td>
            <td>
              <a href="{{ route('edit-alt', $alternatif->id) }}" class="btn btn-warning">Ubah</a>
              <a href="{{ route('del-alt', $alternatif->id) }}" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection