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
    <title>Ascent - Chindcare & Kids School HTML Template</title>
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
                        About Us
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
                            About Us
                        </li>
                    </ul>
                </div>
                <div class="breadcrumnd-thumb position-relative">
                    <img src="{{ asset('frontend/assets/img/abanner/bread-thumb.png')}}" alt="img" class="mimg">
                    <img src="{{ asset('frontend/assets/img/abanner/bread-child.png')}}" alt="img" class="bread-child">
                    <img src="{{ asset('frontend/assets/img/abanner/bread-cat.png')}}" alt="img" class="bread-cat">
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumnd Banner Start -->

    <!-- Aboutv1 Section Start -->
    <section class="about-sectionv1 space-top overflow-hidden space-bottom">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about-one-thumbs">
                        <div class="thumbs position-relative wow fadeInUp" data-wow-delay="1200">
                            <img src="{{ asset('frontend/assets/img/about/about-1.png') }}" alt="img" class="round10 main-img">
                            <div class="customer-satisfaction">
                                <div class="icon d-center">
                                    <img src="{{ asset('frontend/assets/img/abanner/customer.png') }}" alt="img">
                                </div>
                                <div class="cont">
                                    <h4 class="white">
                                        5,000+
                                    </h4>
                                    <p class="white">
                                        Satisfied Clients
                                    </p>
                                </div>
                            </div>
                            <!-- Element -->
                            <img src="{{ asset('frontend/assets/img/about/lighing-cmn.png') }}" alt="img" class="about-light1">
                            <img src="{{ asset('frontend/assets/img/about/arrows-cmn.png') }}" alt="img" class="about-arrows">
                        </div>
                        <div class="about-one-grow">
                            <div class="academy-box text-center mb-30 wow fadeInUp" data-wow-delay="1400">
                                <img src="{{ asset('frontend/assets/img/about/grow.png') }}" alt="img">
                                <h4 class="black">
                                    Academy
                                </h4>
                                <p class="pra">
                                    Learning Ladder School
                                </p>
                            </div>
                            <div class="academy-box2 gra-border round10 wow fadeInUp" data-wow-delay="1600">
                                <div class="content">
                                    <h3>
                                        <span class="count">10</span>+
                                    </h3>
                                    <p>years of experiences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about-contentv1 ps-xxl-5">
                        <div class="section-title mb-60">
                            <span class="sub-title wow fadeInUp p5-clr">
                                About Us
                            </span>
                            <h3 class="m-title wow fadeInUp black mb-sm-3 mb-2" data-wow-delay=".3s">
                                Unlocking Potential, One Child at a just Time in school
                            </h3>
                            <p class="mb-24 wow fadeInUp" data-wow-delay=".4s">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit platea pharetra, nostra mattis
                                hendrerit proin mollis pretium
                                facilisi in, ligula volutpat lobortis molestie sed per accumsan conubia. Sed dis loren
                                ipsum dummy text
                            </p>
                            <a href="contact.html" class="theme-btn gra-border2">
                                <span class="black fw-medium">
                                    Get a quote
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section Start -->
   

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