<!doctype html>
<html lang="en">
  <head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>@yield('title')</title>
	<link rel="icon" href="https://img.icons8.com/fluent/48/000000/source-code.png">

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<!-- Style CSS (White)-->
	<link rel="stylesheet" href="/assets/css/White.css">
	<!-- Style CSS (Dark)-->
	<link rel="stylesheet" href="/assets/css/Dark.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.css">
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href="/assets/vendors/lineawesome/css/line-awesome.min.css">

</head>
<body>
  
	<!-- Login -->
	@yield('container')

	<!--Topbar -->
	<div class="topbar transition">
		<div class="bars">
			<button type="button" class="btn transition" id="sidebar-toggle">
				<i class="las la-bars"></i>
			</button>
		</div>
		<div class="menu">

			<ul>
				<li>
					<div class="theme-switch-wrapper">
						<label class="theme-switch form-switch" for="checkbox">
							<input class="form-check-input" type="checkbox" id="checkbox"  title="Dark Or White" style="position: relative;"/>
							<div class="slider round"></div>
						</label>
					</div>
				</li>

				<li>
					<div class="dropdown">
						<div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<img src="/assets/images/avatar/avatar-2.png" alt="Profile">
						</div>
						<div class="dropdown-menu" aria-labelledby="dropdownProfile" style="text-align: center;">
							
							<i class="las la-user"></i> 
							<h5><span style="color: #3B82F6;"></span></h5>
						
							<div class="dropdown-divider"></div>
							<a class="dropdown-item ml-3" style="text-align: justify;" href="{{ url('/profile') }}">
								<i class="las la-user mr-2"></i> Profile
							</a>
							<a class="dropdown-item ml-3" style="text-align: justify;" href="#" data-toggle="modal" data-target="#logoutModal">
								<i class="las la-sign-out-alt mr-2"></i> Sign Out
							</a>
							
						</div>
					</div>
				</li>
			</ul>
			
		</div>
		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars">
		<div class="logo">
			<h2 style="font-weight: 700;" class="mb-0"><span style="font-weight: 500;">By-Providers</span></h2>
		</div>

		<div class="sidebar-items">
			<div class="accordion" id="sidebar-items">
				<ul>

					<p class="menu">Pages</p>

					<li>
						<a href="{{ url('/admin') }}" class="items">
							<i class="fa fa-tachometer-alt"></i>
							<span>Dashoard</span>
						</a>
					</li>

					<li>
						<a href="{{ url('/alternatif') }}" class="items">
							<i class="fas la-file-alt pr-1"></i>
							<span> Alternatif</span>
						</a>
					</li>

					<li>
						<a href="{{ url('/kriteria') }}" class="items">
							<i class="fas la-file-alt pr-1"></i>
							<span> Kriteria</span>
						</a>
					</li>

					<li>
						<a href="{{ url('/matriks') }}" class="items">
							<i class="fas la-file-alt pr-1"></i>
							<span> Nilai Matriks</span>
						</a>
					</li>

					<li>
						<a href="{{ url('/') }}" class="items">
							<span>Go to Website<i class="las la-arrow-circle-right ml-1" style="line-height: 0px;"></i></span>
						</a>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>

	<div class="sidebar-overlay"></div>
	

	@yield('content')
	

	<!-- Footer -->
	<div class="footer transition">
		<hr>
		<p>
			&copy; 2021 Designed by Fikri Prasetyo
		</p>
	</div>
	

	<!-- Loader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<div class="loader-overlay"></div>
	

	<!-- Library Javascipt-->
	<script src="/assets/vendors/bootstrap/js/jquery.min.js"></script>
	<script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>  -->
	<script src="/assets/js/script.js"></script>
 </body>
</html>