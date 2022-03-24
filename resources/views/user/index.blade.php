@extends('user/main')

@section('title', 'By-Providers')

@section('intro')
  <div class="home" id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1>Cintailah Provider Produk Seluler Indonesia</h1>
                <p>Berbagai provider seluler yang ada di Indonesia kini semakin modern untuk menangani kebutuhanmu dalam berkomunikasi. Pilihlah yang terbaik untuk dirimu!</p>
                <a href="#more"
                    class="btn btn-primary btn-user">
                    <span class="ml-2">Learn More...</span>
                </a>
            </div>
            <div class="col-lg-5">
                <img src="img/cherry.png" alt="Server Room" class="img-fluid d-none d-md-block" style="width: 480px; height: 350px; margin-left: 10px;">
            </div>
        </div>
    </div>
  </div>
@endsection

@section('info')
  <div id="more" class="p-5"></div>

  <div class="label-menu js-slidein">
    <p>
        More Info
    </p>
  </div>

  <div class="experience">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class=" col-10 col-md-11">
                <div class="row">
                    <div class="col-lg-6 js-slidein my-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>What's the provider?</h4>
                                        <p>Provider adalah perusahaan telepon yang menyediakan layanan untuk pengguna telepon seluler. Operator memberikan kartu SIM ke pelanggan yang memasukkan ke ponsel untuk mendapatkan akses ke layanan tersebut.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 js-slidein my-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Why should use a provider?</h4>
                                        <p>Sinyal kuat menjadi pertimbangan utama orang Indonesia dalam memilih operator internet. Kekuatan akses data masing-masing operator menunjukkan kelasnya masing-masing. Sinyal kuat menjadi modal utama untuk mendapatakan kecepatan maksimal dalam menggunakan internet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('container')
  <div class="bg-linear-primary" id="provider">

    <div id="skills" class="pt-3"></div>

    <div class="label-menu js-slidein">
        <p>
            Provider
        </p>
    </div>

    <div class="skills" style="padding-bottom: 100px;">
      <div class="container">
          <div class="row text-center justify-content-center">
              <div class="col-6 col-md-3 js-slidein my-3">
                  <div class="card h-100">
                      <div class="card-body">
                          <img src="img/telkom.png" class="img-fluid pt-2" style="height: 65px;">
                          <h5 class="pt-2">Telkomsel</h5>
                      </div>
                  </div>
              </div>
              <div class="col-6 col-md-3 js-slidein my-3">
                  <div class="card h-100">
                      <div class="card-body">
                          <img src="img/indosat.png" class="img-fluid pt-2" style="height: 65px;">
                          <h5 class="pt-2">Indosat</h5>
                      </div>
                  </div>
              </div>
              <div class="col-6 col-md-3 js-slidein my-3">
                  <div class="card h-100">
                      <div class="card-body">
                          <img src="img/xl.png" class="img-fluid pt-2" style="height: 65px;">
                          <h5 class="pt-2">XL</h5>
                      </div>
                  </div>
              </div>
              <div class="col-6 col-md-3 js-slidein my-3">
                  <div class="card h-100">
                      <div class="card-body">
                          <img src="img/smartfren.png" class="img-fluid pt-2" style="height: 65px;">
                          <h5 class="pt-2">Smartfren</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection
