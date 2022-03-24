@extends('user/main')

@section('title', 'By-Providers | Testing')

@section('container')
<div class="bg-grey">

  <div id="testing" class="pt-5"></div>
  <div class="border-footer mt-5 pt-3" style="position: relative;">
    <div class="label-menu jd-slidein pt-3">
      <p>
          Alternatif & Kriteria
      </p>
    </div>
    <div class="container">
      <div class="altkrit pt-4">
        <div class="row">
          <div class="col-md-4">
            <h5 class="altkrit-title">Alternatif</h5>
            <br>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Daftar Alternatif</h5>
                <hr>
                <br>
                <table class="table table-hover table-striped table-bordered table-secondary">
                  <thead class="table-info text-center">
                    <tr>
                      <th>No</th>
                      <th>Kode Alternatif</th>
                      <th>Nama Alternatif</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>A01</td>
                      <td>Telkomsel</td>
                    </tr>
                      <td>2.</td>
                      <td>A02</td>
                      <td>Indosat</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>A03</td>
                      <td>XL</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>A04</td>
                      <td>Smartfren</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
            
          <div class="col-md-4">
            <h5 class="altkrit-title">Kriteria</h5>
            <br>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Daftar Kriteria</h5>
                <hr>
                <br>
                <table class="table table-hover table-striped table-bordered table-secondary">
                  <thead class="table-info text-center">
                    <tr>
                      <th>No</th>
                      <th>Kode Kriteria</th>
                      <th>Nama Kriteria</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>C1</td>
                      <td>Kualitas Produk</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>C2</td>
                      <td>Harga</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>C3</td>
                      <td>Waktu Akses</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>C4</td>
                      <td>Kecepatan Akses</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <h5 class="altkrit-title">Bobot Kriteria</h5>
            <br>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Total Nilai Bobot(w) = 100</h5>
                <hr>
                <br>
                <table class="table table-hover table-striped table-bordered table-secondary">
                  <thead class="table-info text-center">
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>w</th>
                      <th>w/100</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>C1</td>
                      <td>35</td>
                      <td>0.35</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>C2</td>
                      <td>25</td>
                      <td>0.25</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>C3</td>
                      <td>20</td>
                      <td>0.2</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>C4</td>
                      <td>20</td>
                      <td>0.2</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="label-menu jd-slidein pt-5">
      <p>
          Nilai Matriks
      </p>
    </div>
    <div class="container pb-4">
      <div class="matriks pt-4">
        <div class="row">
          <div class="col-md-12">
            <div class="opsi-alt">
              <form action="" method="post">
                @csrf
                @foreach ($alternatif as $alternatifdata)

                <h5 class="matriks-title">{{ $alternatifdata->alternatif }}</h5>
                <br>
                <div class="row">
                  <div class="col-lg-12" style="margin-bottom: 80px;">
                    <div class="card table-container">
                      <div class="card-body">
                        <table class="table table-hover table-striped table-secondary table-bordered">
                          <thead class="table-info">
                            <tr>
                              <th scope="col" class="table-secondary">#</th>
                              <th scope="col">Poin 1</th>
                              <th scope="col">Poin 2</th>
                              <th scope="col">Poin 3</th>
                              <th scope="col">Poin 4</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($kriteria as $kriteriadata)
                            @php
                              $no = 0;
                            @endphp
                            <tr>
                              <th scope="row" class="table-warning">{{ $kriteriadata->kriteria }}</th>
                              @foreach($matriks as $matrikdata)
                              @if($matrikdata->kriteria == $kriteriadata->kriteria)
                              <th>
                                <div class="custom-control custom-radio">
                                  <input type="radio" id="{{ $alternatifdata->id.$kriteriadata->id.$no }}" value="{{ $matrikdata->poin }}" name="{{ $alternatifdata->id.$kriteriadata->id }}" class="custom-control-input">
                                  <label class="custom-control-label" for="{{ $alternatifdata->id.$kriteriadata->id.$no }}">{{ $matrikdata->nilai }}</label>
                                </div>
                              </th>
                              @php $no++ @endphp
                              @endif
                              @endforeach
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary ml-5">Hitung SPK</button>
                </br>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @if(!empty($request))
    <div class="label-menu jd-slidein pt-5">
      <p>
        Hasil Metode TOPSIS
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" style="font-size: 15px;">
            <li class="nav-item">
              <a class="nav-link active" href="#x">Matriks Keputusan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#r">Matriks Ternormalisasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#y">Matriks Ternormalisasi Terbobot</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#d">Jarak Solusi Ideal Positif/Negatif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#p">Nilai Preferensi/Rangking</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content mb-5 pb-5">
            <!-- Matriks Keputusan -->
            <div id="x" class="container tab-pane active">
              <br>
              <table class="table table-hover table-striped table-bordered">
                <thead class="table-success text-center">
                  <tr>
                    <th rowspan="2" class="align-middle">Kode</th>
                    <th rowspan="2" class="align-middle">Alternatif</th>
                    <th colspan="4" class="text-center">Kriteria</th>
                  </tr>
                  <tr>
                    @foreach($kriteria as $kriteriadata)
                    <th class="table-danger">C{{ $kriteriadata->id }}</th>
                    @endforeach
                  </tr>
                </thead>
                <tbody>
                  @foreach ($alternatif as $alternatifdata)
                  @php
                    $idout = (string)$alternatifdata->id;
                      if (strlen($idout) <=1){
                        $idout = "A0".$idout;
                      }else{
                        $idout = "A".$idout;
                      }
                  @endphp
                  <tr>
                    <th scope="row">{{ $idout }}</th>
                    <td>{{ $alternatifdata->alternatif }}</td>
                    @foreach($kriteria as $kriteriadata)
                    <td class="text-center">{{ $request[$alternatifdata->id.$kriteriadata->id] }}</td>
                    @endforeach
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <!-- Perhitungan Matriks Ternormalisasi -->
            <div id="r" class="container tab-pane fade"><br>
              <table class="table table-hover table-striped table-bordered">
                <thead class="table-success text-center">
                  <tr>
                    <th rowspan="2" class="align-middle">Kode</th>
                    <th rowspan="2" class="align-middle">Alternatif</th>
                    <th colspan="4" class="text-center">Kriteria</th>
                  </tr>
                  <tr>
                    @foreach($kriteria as $kriteriadata)
                    <th class="table-danger">C{{ $kriteriadata->id }}</th>
                    @endforeach
                  </tr>
                </thead>
                <tbody>
                @php
                $temp = [[],[],[],[]];
                @endphp
                @foreach ($alternatif as $alternatifdata)
                  @php
                  $lokasi = 0;
                  foreach($kriteria as $kriteriadata){
                    array_push($temp[$lokasi], [$request[$alternatifdata->id.$kriteriadata->id]]);
                    $lokasi++;
                  }
                  @endphp
                @endforeach
                @foreach ($alternatif as $alternatifdata)
                @php
                  $idout = (string)$alternatifdata->id;
                    if (strlen($idout) <=1){
                      $idout = "A0".$idout;
                    }else{
                      $idout = "A".$idout;
                    }
                    $lokasi = 0;
                    $pangkat = [];
                    foreach($kriteria as $kriteriadata){
                      $lokasi2 = 0;
                      $temppangkat = 0;
                      foreach($temp[$lokasi] as $nilai1){
                        $temppangkat += pow((int)$nilai1[0], 2);
                        $lokasi2++;
                      }
                      array_push($pangkat, [$temppangkat]);
                      $lokasi++;
                    }
                @endphp
                <tr>
                  <th scope="row">{{ $idout }}</th>
                  <td>{{ $alternatifdata->alternatif }}</td> 
                  @php
                  $no = 0;
                  @endphp
                  @foreach($kriteria as $kriteriadata)
                  @php
                  $nilai = round($request[$alternatifdata->id.$kriteriadata->id]/sqrt($pangkat[$no][0]),3);
                  $no++;
                  @endphp
                  <td class="text-center">{{ $nilai }}</td>
                  @endforeach
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>

            <!-- Perhitungan Matriks Ternormalisasi Terbobot -->
            <div id="y" class="container tab-pane fade"><br>
              <table class="table table-hover table-striped table-bordered">
                <thead class="table-success text-center">
                  <tr>
                    <th rowspan="2" class="align-middle">Kode</th>
                    <th rowspan="2" class="align-middle">Alternatif</th>
                    <th colspan="4" class="text-center">Kriteria</th>
                  </tr>
                  <tr>
                    @foreach($kriteria as $kriteriadata)
                    <th class="table-danger">C{{ $kriteriadata->id }}</th>
                    @endforeach
                  </tr>
                </thead>
                <tbody>
                  @php
                    $temp = [[],[],[],[]];
                  @endphp
                  @foreach ($alternatif as $alternatifdata)
                    @php
                    $lokasi = 0;
                    foreach($kriteria as $kriteriadata){
                      array_push($temp[$lokasi], [$request[$alternatifdata->id.$kriteriadata->id]]);
                      $lokasi++;
                    }
                    @endphp
                  @endforeach
                  @foreach ($alternatif as $alternatifdata)
                  @php
                    $idout = (string)$alternatifdata->id;
                      if (strlen($idout) <=1){
                        $idout = "A0".$idout;
                      }else{
                        $idout = "A".$idout;
                      }
                      $lokasi = 0;
                      $pangkat = [];
                      foreach($kriteria as $kriteriadata){
                        $lokasi2 = 0;
                        $temppangkat = 0;
                        foreach($temp[$lokasi] as $nilai1){
                          $temppangkat += pow((int)$nilai1[0], 2);
                          $lokasi2++;
                        }
                        array_push($pangkat, [$temppangkat]);
                        $lokasi++;
                      }
                  @endphp
                  <tr>
                    <th scope="row">{{ $idout }}</th>
                    <td>{{ $alternatifdata->alternatif }}</td> 
                    @php
                    $no = 0;
                    $bobot = [0.35,0.25,0.2,0.2];
                    @endphp
                    @foreach($kriteria as $kriteriadata)
                    @php
                    $nilai = round($request[$alternatifdata->id.$kriteriadata->id]/sqrt($pangkat[$no][0])*$bobot[$no],3);
                    $no++;
                    @endphp
                    <td class="text-center">{{ $nilai }}</td>
                    @endforeach
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <!-- Perhitungan Jarak Solusi Ideal -->
            <div id="d" class="container tab-pane fade"><br>
              <div class="nilai-solusi table-container">
                <br>
                <h3>Matriks Nilai Solusi Ideal Positif</h3>
                <hr>
                <br>
                <table class="table table-striped table-hover table-bordered">
                  <thead class=" text-center">
                    <tr>
                      <th colspan="4" class="text-center table-dark">Kriteria</th>
                    </tr>
                    <tr>
                      @foreach($kriteria as $kriteriadata)
                      <th class="table-primary align-middle">{{ $kriteriadata->kriteria }}</th>
                      @endforeach
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $temp = [[],[],[],[]];
                    @endphp
                    @foreach ($alternatif as $alternatifdata)
                      @php
                      $lokasi = 0;
                      foreach($kriteria as $kriteriadata){
                        array_push($temp[$lokasi], [$request[$alternatifdata->id.$kriteriadata->id]]);
                        $lokasi++;
                      }
                      @endphp
                    @endforeach
                    @php
                      $temptotal = array();
                      array_push($temptotal,[]);
                      $temptotal2 = array();
                      array_push($temptotal2,[]);
                      $totallokasi = 0;
                    @endphp
                    @foreach ($alternatif as $alternatifdata)
                      @php
                        $idout = (string)$alternatifdata->id;
                          if (strlen($idout) <=1){
                            $idout = "A0".$idout;
                          }else{
                            $idout = "A".$idout;
                          }
                          $lokasi = 0;
                          $pangkat = [];
                          foreach($kriteria as $kriteriadata){
                            $lokasi2 = 0;
                            $temppangkat = 0;
                            foreach($temp[$lokasi] as $nilai1){
                              $temppangkat += pow((int)$nilai1[0], 2);
                              $lokasi2++;
                            }
                            array_push($pangkat, [$temppangkat]);
                            $lokasi++;
                          }
                        $no = 0;
                        $bobot = [0.35,0.25,0.2,0.2];
                        foreach($kriteria as $kriteriadata){
                          $nilai = round($request[$alternatifdata->id.$kriteriadata->id]/sqrt($pangkat[$no][0])*$bobot[$no],3);
                          $temptotal[$no][$totallokasi] = $nilai;
                          $temptotal2[$totallokasi][$no] = $nilai;
                          $no++;
                        }
                        $totallokasi++;
                      @endphp
                    @endforeach
                      <tr>
                      @foreach($temptotal as $key => $temptotaldata)
                        @if($key!=1)
                        <td class="text-center">{{ max($temptotaldata) }}</td>
                        @else
                        <td class="text-center">{{ min($temptotaldata) }}</td>
                        @endif
                      @endforeach
                      </tr>
                  </tbody>
                </table>
                <br>
                <br>
                <h3>Jarak Solusi Ideal Positif</h3>
                <hr>
                <br>
                <table class="table table-striped table-hover table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th colspan="4" class="text-center table-dark">Kriteria</th>
                    </tr>
                    <tr>
                      <th class="table-primary">Kualitas Produk</th>
                      <th class="table-primary align-middle">Harga</th>
                      <th class="table-primary">Waktu Akses</th>
                      <th class="table-primary">Kecepatan Akses</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @php
                      $scoreJarak = array();
                      foreach($temptotal as $key => $temptotaldata){
                        if($key!=1){
                          $score = max($temptotaldata);
                        }else{
                          $score = min($temptotaldata);
                        }
                        array_push($scoreJarak, $score);
                      }
                      $scorejaraPositif = array();
                      @endphp
                      @foreach($temptotal as $key => $temptotaldata)
                        @php
                        $res = 0;
                        foreach($temptotal2[$key] as $keyX => $data){
                          $res += pow($scoreJarak[$keyX]-$data, 2);
                        }
                        $res = round(sqrt($res),3);
                        array_push($scorejaraPositif, $res);
                        @endphp
                        <td class="text-center">{{ $res }}</td>
                      @endforeach
                    </tr>
                  </tbody>
                </table>
                <br>
                <br>
                <h3>Matriks Nilai Solusi Ideal Negatif</h3>
                <hr>
                <br>
                <table class="table table-striped table-hover table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th colspan="4" class="text-center table-dark">Kriteria</th>
                    </tr>
                    <tr>
                      <th class="table-primary">Kualitas Produk</th>
                      <th class="table-primary align-middle">Harga</th>
                      <th class="table-primary">Waktu Akses</th>
                      <th class="table-primary">Kecepatan Akses</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @foreach($temptotal as $key => $temptotaldata)
                        @if($key!=1)
                        <td class="text-center">{{ min($temptotaldata) }}</td>
                        @else
                        <td class="text-center">{{ max($temptotaldata) }}</td>
                        @endif
                      @endforeach
                    </tr>
                  </tbody>
                </table>
                <br>
                <br>
                <h3>Jarak Solusi Ideal Negatif</h3>
                <hr>
                <br>
                <table class="table table-striped table-hover table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th colspan="4" class="table-dark text-center">Kriteria</th>
                    </tr>
                    <tr>
                      <th class="table-primary">Kualitas Produk</th>
                      <th class="table-primary align-middle">Harga</th>
                      <th class="table-primary">Waktu Akses</th>
                      <th class="table-primary">Kecepatan Akses</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      @php
                      $scoreJarak = array();
                      foreach($temptotal as $key => $temptotaldata){
                        if($key!=1){
                          $score = min($temptotaldata);
                        }else{
                          $score = max($temptotaldata);
                        }
                        array_push($scoreJarak, $score);
                      }
                      $scorejarakNegative = array();
                      @endphp
                      @foreach($temptotal as $key => $temptotaldata)
                        @php
                        $res = 0;
                        foreach($temptotal2[$key] as $keyX => $data){
                          $res += pow($scoreJarak[$keyX]-$data, 2);
                        }
                        $res = round(sqrt($res),3);
                        array_push($scorejarakNegative, $res);
                        @endphp
                        <td class="text-center">{{ $res }}</td>
                      @endforeach
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Perhitungan Nilai Preferensi/Rangking -->
            <div id="p" class="container tab-pane fade"><br>
              <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th class="text-center">Kode</th>
                    <th class="text-center">Alternatif</th>
                    <th class="text-center">Nilai Preferensi</th>
                    <th class="text-center">Rangking</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $alternatifTemp = array();
                    $no = 1;
                    $keyN = 0;
                  @endphp
                  @foreach($alternatif as $key => $alternatifdata)
                    @php
                      $idout = (string)$alternatifdata->id;
                      if (strlen($idout) <=1){
                        $idout = "A0".$idout;
                      }else{
                        $idout = "A".$idout;
                      }
                      $scoreAlt = $scorejarakNegative[$keyN]/($scorejarakNegative[$keyN]+$scorejaraPositif[$keyN]);
                      array_push($alternatifTemp, array(
                        'id' => $idout, 
                        'alternatif' => $alternatifdata->alternatif, 
                        'nilai' => round($scoreAlt,3))
                        );
                      $keyN++;
                    @endphp
                  @endforeach
                  @php
                  $pengenmain = array_column($alternatifTemp, 'nilai');
                  array_multisort($pengenmain, SORT_DESC, $alternatifTemp);
                  @endphp
                  @foreach($alternatifTemp as $key => $data)
                  <tr>
                    <th> {{ $data["id"] }}</th>
                    <th> {{ $data["alternatif"] }} </th>
                    <th class="text-center"> {{ $data["nilai"] }}</th>
                    <th class="text-center"> {{ array_search($data["nilai"] , $pengenmain)+1 }}</th>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
    @endif

  </div>
</div>
@endsection