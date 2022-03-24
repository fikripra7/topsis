@extends('administrator/main')

@section('title', 'Admin | Dashboard')

@section('content')
<!--Content Start-->
<div class="content transition">
  <div class="container-fluid dashboard">
    <h3>Dashboard</h3>
    <hr class="border border-secondary">
    <div class="pt-4 mb-3">
      <h5>Selamat Datang di Halaman Administrator</h5>
    </div>
    <br>

    <div class="row">

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-4 d-flex align-items-center">
                <i class="las la-clipboard-list icon-home bg-primary text-light"></i>
              </div>
              <div class="col-8">
                <p>Kriteria</p>
                <h5>4</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-4 d-flex align-items-center">
                <i class="las la-clipboard-list icon-home bg-success text-light"></i>
              </div>
              <div class="col-8">
                <p>Alternatif</p>
                <h5>4</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-4 d-flex align-items-center">
                <i class="las la-chart-bar  icon-home bg-info text-light"></i>
              </div>
              <div class="col-8">
                <p>Nilai</p>
                <h5>16</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-4 d-flex align-items-center">
                <i class="las la-id-card  icon-home bg-warning text-light"></i>
              </div>
              <div class="col-8">
                <p>Admin</p>
                <h5>1</h5>
              </div>
            </div>
          </div>
        </div>

      </div>

			</div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <h5 class="card-header">Seputar Info</h5>
          <div class="card-body">
            <p class="mb-2" style="text-align: justify;">
            Sebuah operator telepon seluler atau operator nirkabel adalah perusahaan telepon yang menyediakan layanan untuk pengguna telepon seluler. Operator memberikan kartu SIM ke pelanggan yang memasukkan ke ponsel untuk mendapatkan akses ke layanan tersebut. Berdasarkan fungsinya kecepatan, jaringan dibagi menjadi beberapa yaitu GPRS (G), EDGE (E), 3G, H atau HPSA/HSDPA, 4G atau LTE, dan 5G yang sekarang sedang dikembangkan provider SAMSUNG.
            </p>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <img src="img/telkom.png" class="img-fluid img-thumbnail" style="width: 100%; height: 200px !important;">
            <p class="mt-3 text-center">Telkomsel</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <img src="img/indosat.png" class="img-fluid img-thumbnail" style="width: 100%; height: 200px !important;">
            <p class="mt-3 text-center">Indosat</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <img src="img/xl.png" class="img-fluid img-thumbnail" style="width: 100%; height: 200px !important;">
            <p class="mt-3 text-center">XL</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <img src="img/smartfren.png" class="img-fluid img-thumbnail" style="width: 100%; height: 200px !important;">
            <p class="mt-3 text-center">Smartfren</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
