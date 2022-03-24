<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#014EAA">
    <meta name="keyword" content="By-Provider, Provider Indonesia, Telkomsel, Indosat, XL, Smartfren">
    <meta name="description" content="By-Provider">
    <title>@yield('title')</title>
    <link rel="icon" href="https://img.icons8.com/fluent/48/000000/source-code.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/slideinscroll/slidein.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/lineawesome/css/line-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <div id="particles-js" style="position: fixed; top: 0; bottom: 0; left: 0; right: 0;"></div>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand h-name" href="{{ url('/') }}">By-Providers</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                        <a class="nav-link" href="{{ url('/provider') }}">Provider</a>
                        <a class="nav-link" href="{{ url('/testing') }}">Testing</a>
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        
        @yield('intro')
        

        @yield('info')
        

        @yield('container')


        <div class="footer border-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 adds">
                        <h3>Address</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.551560146692!2d107.0129002140794!3d-6.190707762374816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69895d80d58355%3A0x66a10a2516359b36!2sGg.%205%2C%20Bahagia%2C%20Kec.%20Babelan%2C%20Bekasi%2C%20Jawa%20Barat%2017610!5e0!3m2!1sid!2sid!4v1624023298552!5m2!1sid!2sid" width="100%" height="350px"></iframe>
                    </div>
                    <div class="col-md-3 links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="fa fa-chevron-right mr-2"></span> Home</a></li>
                            <li><a href="{{ url('/provider') }}"><span class="fa fa-chevron-right mr-2"></span> Provider</a></li>
                            <li><a href="{{ url('/testing') }}"><span class="fa fa-chevron-right mr-2"></span> Testing</a></li>
                            <li><a href="{{ url('/about') }}"><span class="fa fa-chevron-right mr-2"></span> About</a></li>
                            <li><a href="{{ url('/contact') }}"><span class="fa fa-chevron-right mr-2"></span> Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 more">
                        <h3>More Info?</h3>
                        <ul>
                            <li><a href="tel:+6282124647861"><span class="fa fa-phone mr-2" style="color: #588da8 !important; "></span> +62 821 2464 7861</a></li>
                            <li><a href="mailto:fikripra7@gmail.com"><span class="fa fa-paper-plane mr-2" style="color: #588da8 !important;  ;"></span> fikripra7@gmail.com</a></li>
                            <li><a href="https://www.instagram.com/fikripra_/"><span class="lab la-instagram mr-2" style="color: #588da8 !important; font-size: 23px;  "></span> Instagram</a></li>
                            <li><a href="https://twitter.com/fikripra07"><span class="lab la-twitter mr-2" style="color: #588da8 !important; font-size: 23px;  "></span> Twitter</a></li>
                            <li><a href="https://www.facebook.com/fikri.prasetyo.1"><span class="lab la-facebook mr-2" style="color: #588da8 !important; font-size: 23px; "></span> Facebook</a></li>
                            <li><a href="https://github.com/fikripra7"><span class="lab la-github mr-2" style="color: #588da8 !important; font-size: 23px;  "></span> Github</a></li>
                            <li><a href="https://www.linkedin.com/in/fikri-prasetyo-25a64119b/"><span class="lab la-linkedin mr-2" style="color: #588da8 !important; font-size: 23px; "></span> LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="end-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright &copy;2021 All right reserved | Designed by Fikri Prasetyo</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="assets/slideinscroll/slideIn.js"></script>
        <script src="assets/particles/particles.min.js"></script>
        <script src="js/script-user.js"></script>
        @if(!empty($tab))
        <script>
            $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
            });
        </script>
        @endif
    </div>
</body>

</html>
