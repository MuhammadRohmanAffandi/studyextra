<!DOCTYPE html>
<html lang="en">

<head>
    <!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
    <title>LBB Study Extra</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="icon" type="image/png" href="/adminlte/assets/img/logo.png">
    <link rel="icon" type="image/png" href="/assets/images/logo.png">

    <!-- Main css -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet" type="text/css">

</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

    <!-- =========================
     PRE LOADER       
============================== -->
    <div class="preloader" style="display: none;">

        <div class="sk-rotating-plane"></div>

    </div>


    <!-- =========================
     NAVIGATION LINKS     
============================== -->
    <div class="navbar navbar-fixed-top custom-navbar" role="navigation">
        <div class="container">

            <!-- navbar header -->
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">
                    <img src="{{ url('adminlte/img/Logo.png') }}" width="40">
                    <a href="home" class="navbar-brand">LBB Study Extra</a>
                </a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home" class="smoothScroll">Home</a></li>
                    <li><a href="pendaftaran" class="smoothScroll">Pendaftaran</a></li>
                    <li><a href="alumni" class="smoothScroll">Alumni</a></li>
                    <li><a href="program-kami" class="smoothScroll">Program</a></li>
                    <li><a href="artikel-kami" class="smoothScroll">Artikel</a></li>
                    <li><a href="ebook-kami" class="smoothScroll">E-Book</a></li>
                    <li><a href="galeri-kami" class="smoothScroll">Galeri</a></li>
                    <li><a href="tentang-kami" class="smoothScroll">Tentang Kami</a></li>
                </ul>

            </div>

        </div>
    </div>
    @section('konten')
    @show
    <!-- =========================
    FOOTER SECTION   
============================== -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <p class="wow fadeInUp" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                        LBB Study Extra 2022 &copy;
                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s" style="visibility: hidden; animation-delay: 1s; animation-name: none;"></a></li>
                        <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s" style="visibility: hidden; animation-delay: 1.3s; animation-name: none;"></a></li>
                        <li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s" style="visibility: hidden; animation-delay: 1.6s; animation-name: none;"></a></li>
                        <li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s" style="visibility: hidden; animation-delay: 1.9s; animation-name: none;"></a></li>
                        <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s" style="visibility: hidden; animation-delay: 2s; animation-name: none;"></a></li>
                    </ul>

                </div>

            </div>
        </div>
    </footer>


    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


    <!-- =========================
     SCRIPTS   
============================== -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.parallax.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/smoothscroll.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/custom.js"></script>

</body>

</html>