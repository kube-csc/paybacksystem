<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{!! str_replace('_' , ' ' , env('APP_Projektname')) !!}</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/favicon.png" rel="icon">
    <link href="/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        #hero {
            margin-bottom: -90px;
        }
    </style>

    <!-- =======================================================
    * Template Name: Anyar - v2.1.0
    * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="/" class="scrollto">{!! str_replace('_' , ' ' , env('APP_Projektname')) !!}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/#header">Home</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
        @if(env('APP_Projektname')!='' | env('APP_Slogan')!='')
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Willkommen bei <span>{!! str_replace('_' , ' ' , env('APP_Projektname')) !!}</span></h2>
                    <p class="animate__animated animate__fadeInUp">{!! str_replace('_' , ' ' , env('APP_Slogan')) !!}</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">mehr</a>
                </div>
            </div>
        @endif
        @if(env('APP_Titel1')!='' | env('APP_Slogan1')!='')
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">{!! str_replace('_' , ' ' , env('APP_Titel1')) !!}</h2>
                    <p class="animate__animated animate__fadeInUp">{!! str_replace('_' , ' ' , env('APP_Slogan1')) !!}</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">mehr</a>
                </div>
            </div>
        @endif
        @if(env('APP_Titel2')!='' | env('APP_Slogan2')!='')
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">{!! str_replace('_' , ' ' , env('APP_Titel2')) !!}</h2>
                    <p class="animate__animated animate__fadeInUp">{!! str_replace('_' , ' ' , env('APP_Slogan2')) !!}</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">mehr</a>
                </div>
            </div>
        @endif
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section><!-- End Hero -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Kontakt</h4>
                    <p>
                        {!! str_replace('_' , ' ' , env('APP_Firmenname')) !!}
                        <br>{!! str_replace('_' , ' ' , env('APP_Strasse')) !!}
                        <br>{!! str_replace('_' , ' ' , env('APP_PLZ')) !!} {!! str_replace('_' , ' ' , env('APP_Ort')) !!}
                        <br><br><i class="icofont-phone"></i> {!! str_replace('_' , ' ' , env('APP_Telefon')) !!}
                        <br><i class="icofont-envelope"></i> {!! str_replace('_' , ' ' , env('APP_Email')) !!}
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 footer-info">
                  <!-- freie Spalte im Footer-->
                </div>
                @if(env('APP_Sozialmediaanzeigen')=='ja')
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Soziale Media</h3>
                        <p>Besuchen Sie unsere Soziale Media Auftritte</p>
                        <div class="social-links mt-3">
                            @if(env('APP_Sozial_twitter')!='')
                              <a href="{!! env('APP_Sozial_twitter') !!}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                            @endif
                            @if(env('APP_Sozial_facebook')!='')
                              <a href="{!! env('APP_Sozial_facebook') !!}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                            @endif
                            @if(env('APP_Sozial_instagram')!='')
                              <a href="{!! env('APP_Sozial_instagram') !!}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                            @endif
                            @if(env('APP_Sozial_googleplus')!='')
                              <a href="{!! env('APP_Sozial_googleplus') !!}" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
                            @endif
                            @if(env('APP_Sozial_linkedin')!='')
                              <a href="{!! env('APP_Sozial_linkedin') !!}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            @endif
                        </div>
                        <br><br>
                        <h3>Intern</h3>
                        <a href="/login">Login</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{!! str_replace('_' , ' ' , env('APP_Copyright')) !!}</span></strong>. All Rights Reserved<br>
            <a href="/Impressum">Impressum</a>
        </div>

    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
