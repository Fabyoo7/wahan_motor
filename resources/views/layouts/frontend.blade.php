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
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/faveicon.png')}}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css')}}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css')}}">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/icomoon.css')}}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css')}}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css')}}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css')}}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css')}}">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <span></span>
        <span></span>
        <span class="man-pre">
            <img src="{{ asset('frontend/assets/img/aservices/sertd-shape.png')}}" alt="img">
        </span>
    </div>

    <!-- Offcanvas Area Start -->
    
    <!-- Header Section Start -->
    @include('include.frontend.header')
    <!-- Header Section End -->

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


     @include('include.frontend.content')

    <!-- Hero Section Start -->

    <!-- Talk Counter Section Start -->
    
    <!-- Aboutv1 Section Start -->
    
    <!-- Program Section Start -->

    <!-- Protfolio Section Start -->

    <!-- Service Section Start -->

    <!-- Faq Section Start -->
  
    <!-- professional Section Start -->

    <!-- Knowledge Section Start -->

    <!-- Testimonial V1 Section Start -->

    <!-- Blogv1 Section Start -->

    <!--<< Inspair Section Start >>-->
   
    <!--<< Footer Section Start >>-->
    @include('include.frontend.footer')
    <!--<< Footer Section Start >>-->

    <!--<< All JS Plugins >>-->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js')}}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('frontend/assets/js/viewport.jquery.js')}}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.js')}}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js')}}"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
    <!--<< Main.js >>-->
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>
