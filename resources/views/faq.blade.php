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
                        Faq
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
                            Faq
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

    <!-- Faq Section Start -->
    <section class="faq-sectionv mt-60 overflow-hidden space-bottom">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 col-md-5">
                    <div class="faq-thumbs">
                        <img src="{{ asset('frontend/assets/img/about/faq.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="faq-content">
                        <div class="section-title mb-40">
                            <span class="sub-title wow fadeInUp p5-clr">
                                Some Faq
                            </span>
                            <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                                Empowering Children Through Education Playful Mind
                            </h3>
                        </div>
                        <div class="tab-faq faq">
                            <div class="accordion-section d-grid gap-xxl-4 gap-lg-3 gap-2">
                                <div class="accordion-single">
                                    <h5 class="header-area">
                                        <button
                                            class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                            type="button">
                                            What are the prerequisites for this course?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by the
                                                read content of a page when looking at its layout.
                                                Many desktop publish packages and web page editors now use Loremdefault
                                                model
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-single">
                                    <h5 class="header-area">
                                        <button
                                            class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                            type="button">
                                            What subjects will I learn in school?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by the
                                                read content of a page when looking at its layout.
                                                Many desktop publish packages and web page editors now use Loremdefault
                                                model
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-single">
                                    <h5 class="header-area">
                                        <button
                                            class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                            type="button">
                                            How long is a school day?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by the
                                                read content of a page when looking at its layout.
                                                Many desktop publish packages and web page editors now use Loremdefault
                                                model
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-single">
                                    <h5 class="header-area">
                                        <button
                                            class="accordion-btn d-flex align-items-center d-flex position-relative w-100"
                                            type="button">
                                            What are the prerequisites course?
                                        </button>
                                    </h5>
                                    <div class="content-area">
                                        <div class="content-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by the
                                                read content of a page when looking at its layout.
                                                Many desktop publish packages and web page editors now use Loremdefault
                                                model
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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