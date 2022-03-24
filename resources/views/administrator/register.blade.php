<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Style CSS (White)-->
    <link rel="stylesheet" href="assets/css/White.css">
    <!-- Style CSS (Dark)-->
    <link rel="stylesheet" href="assets/css/Dark.css">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
    <!-- Icon LineAwesome CSS-->
    <link rel="stylesheet" href="assets/vendors/lineawesome/css/line-awesome.min.css">
</head>
<body>

    <div class="auth-dark" style="display:inline-block !important;">
		<div class="theme-switch-wrappern" style="position: relative !important; margin:10px;">
            <label class="theme-switch form-switch" for="checkbox">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"  title="Dark Or White"/>
                Dark or White
                <div class="slider round"></div>
            </label>
		</div>
	</div>

    <div class="container">
        <div class="row vh-100 d-flex justify-content-center align-items-center auth my-4">
            <div class="col-md-7 col-lg-5">
                <div class="card">
                    <div class="card-body">
                    <h3 class="mb-5">Form Register</h3>
                    <form action="{{ route('register') }}" method="post">
                    @csrf
                        @if(session('errors'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Something it's wrong:
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="false">×</span>
                                </button>
                                <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <p class="px-5">Password harus terdiri 8-20 characters, termasuk huruf dan satu angka</p>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi-Password">
                        </div>
                        <button type="submit" class="btn btn-linear-primary btn-rounded">Register</button>
                        <p class="text-center mt-1">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Javascipt-->
    <script src="assets/vendors/bootstrap/js/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> -->
    <script src="assets/js/script.js"></script>
</body>
</html>