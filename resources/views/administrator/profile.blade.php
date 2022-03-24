@extends('administrator/main')

@section('title', 'Admin | Profile')

@section('content')
<!--Content Start-->
<div class="content transition">
  <div class="container-fluid dashboard">
    <h3>Profile</h3>
    <hr class="border-light m-0">
    <br>

    <div class="card-body" style="background-color: #fff;">
      @foreach($profile as $user)
      <form method="post" action="{{ route('update-user', $user->id) }}">
        @csrf
        <div class="form-group mb-3">
          <label for="nama" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="name" value="{{ $user->name }}">
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="nama" class="form-label">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="email" value="{{ $user->email }}">
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="nama" class="form-label">Password</label>
          <input type="text" class="form-control @error('password') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="password" value="{{ $user->password }}">
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="text-right">
          <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
      </form>
      @endforeach
    </div>
  </div>
</div>
@endsection
       