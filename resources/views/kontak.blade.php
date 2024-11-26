<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="mugli">
    <meta name="description" content="Ascent - Kids Kindergarden School HTML Template">
    <!-- ======== Page title ============ -->
    <title>Ascent - Kids Kindergarden School HTML Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/faveicon.png') }}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/icomoon.css') }}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <span></span>
        <span></span>
        <span class="man-pre">
            <img src="{{ asset('frontend/assets/img/aservices/sertd-shape.png') }}" alt="img">
        </span>
    </div>

    <!-- Offcanvas Area Start -->
  
   
    <!-- Header Section Start -->
  @include('include.frontend.header')

    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Breadcrumnd Banner Start -->
    <section class="breadcrumnd-banner cmn-bg overflow-hidden">
        <div class="container">
            <div class="breadcrumnd-wrapper">
                <div class="breadcrumnd-content">
                    <h1 class="black mb-lg-4 mb-md-3 mb-2">
                        Contact Us
                    </h1>
                    <ul class="bread-list d-flex align-items-center gap-lg-4 gap-md-3 gap-2">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
                <div class="breadcrumnd-thumb position-relative">
                    <img src="{{ asset('frontend/assets/img/abanner/bread-thumb.png') }}" alt="img" class="mimg">
                    <img src="{{ asset('frontend/assets/img/abanner/bread-child.png') }}" alt="img" class="bread-child">
                    <img src="{{ asset('frontend/assets/img/abanner/bread-cat.png') }}" alt="img" class="bread-cat">
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumnd Banner Start -->

    <!-- Contact Info Start -->
    <section class="contact-infosectionv1 space-top overflow-hidden space-bottom">
        <div class="container">
            <div class="row g-lg-4 g-3 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="contact-call-info">
                        <div class="icon d-center">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h5 class="black">
                            Location
                        </h5>
                        <a href="#" class="pra">
                            120os road no12.Mirpur,Bangladesh
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="contact-call-info">
                        <div class="icon d-center">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h5 class="black">
                            Mail
                        </h5>
                        <a href="#" class="pra">
                            nafiz123@gmail.com- fahad 1234@gmail.com
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="contact-call-info">
                        <div class="icon d-center">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h5 class="black">
                            Contact
                        </h5>
                        <a href="#" class="pra">
                            013254974147,01258369741
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map -->
    <section class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52816169.558200695!2d-161.49265223136007!3d36.102185713814805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1717004161632!5m2!1sen!2sbd"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>




    <!--<< Footer Section Start >>-->
   @include('include.frontend.footer')

    <!--<< All JS Plugins >>-->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('frontend/assets/js/viewport.jquery.js') }}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.js') }}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!--<< Main.js >>-->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>