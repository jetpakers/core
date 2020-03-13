<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- fontawesome css link -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- nice-select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- swipper css link -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- datepicker.css -->
    <link rel="stylesheet" href="assets/css/datepicker.min.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive css link -->
    <link rel="stylesheet" href="assets/css/responsive.css">

@yield('style')

    {{--  <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    {{--
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>
<div id="app">
{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
     <div class="container">
         <a class="navbar-brand" href="{{ url('/') }}">
             {{ config('app.name', 'Laravel') }}
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <!-- Left Side Of Navbar -->
             <ul class="navbar-nav mr-auto">

             </ul>

             <!-- Right Side Of Navbar -->
             <ul class="navbar-nav ml-auto">
                 <!-- Authentication Links -->
                 @guest
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                     </li>
                     @if (Route::has('register'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                         </li>
                     @endif
                 @else
                     <li class="nav-item dropdown">
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             {{ Auth::user()->name }} <span class="caret"></span>
                         </a>

                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                         </div>
                     </li>
                 @endguest
             </ul>
         </div>
     </div>
 </nav>--}}

<!--Start Preloader-->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Preloader-->

    <!-- header-section start -->
    <header class="header-section">
      {{--  <div class="header-top d-none d-lg-block">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-3 pl-lg-0">
                         <div class="header-socials">
                             <ul class="social-links">
                                 <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                 <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                 <li><a href="#0"><i class="fab fa-linkedin"></i></a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-9 d-flex flex-wrap justify-content-end pr-lg-0">
                         <div class="money-select-list d-flex flex-wrap">
                             <div class="money-thumb">
                                 <img src="assets/images/dolor.png" alt="image">
                             </div>
                             <div class="money-select">
                                 <select class="select-bar">
                                     <option data-display=""></option>
                                     <option value="1">USD</option>
                                     <option value="2">GHS</option>
                                 </select>
                             </div>
                         </div>
                         <div class="language-select-list d-flex flex-wrap">
                             <div class="language-thumb">
                                 <img src="assets/images/flag.png" alt="image">
                             </div>
                             <div class="language-select">
                                 <select class="select-bar">
                                     <option data-display=""></option>
                                     <option value="1">USA</option>
                                     <option value="2">GH</option>
                                 </select>
                             </div>
                         </div>
                         <div class="header-top-btn">
                             <a href="#" class=" custom-btn--style">Sign in</a>
                             <a href="#" class="custom-btn">Create an account</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>--}}
        {{--<div class="header-middle d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 pl-lg-0">
                        <div class="header-wrapper">
                            <div class="header-info">
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <i class="flaticon-clock"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">working hours</h6>
                                        <span>24/7 hours</span>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">location</h6>
                                        <span>medino, NY 10012, USA</span>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-thumb">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="title">email address</h6>
                                        <span>exmple@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 pr-lg-0">
                        <div class="header-action d-flex flex-wrap align-items-center justify-content-end">
                            <a href="register.html" class="cmn-btn-active">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        <div class="header-bottom">
            <div class="container">
                <div class="row header-border align-items-center justify-content-between">
                    <a class="site-logo site-title" href="{{route('root')}}"><img src="assets/images/logo.png" alt="site-logo"></a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-bars"></span>
                    </button>
                    <div class="header-bar d-lg-none">
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    <div class="header-btn-group d-lg-none">
                        <div class="header-top-btn">
                            <a href="#" class=" custom-btn--style">Sign in</a>
                            <a href="#" class="custom-btn">Create an account</a>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto">
                                <li ><a href="{{route('root')}}">Home</a></li>
                                <li><a href="{{route('about')}}">How it Works</a></li>
                                <li><a href="{{route('flights')}}">Flights</a></li>
                                <li><a href="{{route('faqs')}}">FAQs</a></li>
                                <li><a class="cmn-btn" href="{{route('send.root')}}" style="    padding: 5px 5px 0px 5px;
    margin: 20px 0px 0px 0; color: white">Send With JetPak</a></li>

                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->


    <!-- register-section start -->
    <div class="header-register-form">
        <div class="header-register-form-area">
            <div class="account-section">
                <div class="container">
                    <div class="account-wrapper">
                        <div class="login-area account-area change-form">
                            <div class="row m-0">
                                <div class="col-lg-6 p-0">
                                    <div class="common-form-style bg-one create-account">
                                        <div class="close d-lg-none"><i class="fas fa-times"></i></div>
                                        <h4 class="title">create new account</h4>
                                        <p>Maecenas mollis dictum aliquam Velit sapien </p>
                                        <form class="create-account-form">
                                            <div class="form-group">
                                                <input type="text" placeholder="User Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" id="myInput" placeholder="Password">
                                                <a href="#0" id="show-pass-one" class="show-pass"><i
                                                        class="fas fa-eye"></i></a>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox-wrapper d-flex flex-wrap align-items-center ">
                                                    <div class="checkbox-item">
                                                        <input type="radio" id="c1" name="ticket-type">
                                                        <label for="c1">I Wish To Receieve All News & Update?</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="submit" value="Create arion Account">
                                            </div>
                                        </form>
                                        <ul class="sign-up-option justify-content-center">
                                            <li>
                                                <a href="#0" class="google"><i class="fab fa-google"></i> google</a>
                                            </li>
                                            <li>
                                                <a href="#0" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                                            </li>
                                            <li>
                                                <a href="#0" class="twitter"><i class="fab fa-twitter"></i>Twitter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="change-catagory-area bg_img">
                                        <div class="close"><i class="fas fa-times"></i></div>
                                        <div class="register-thumb">
                                            <img src="assets/images/register.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- register-section end -->


    <!-- login-section start -->
    <div class="header-login-form">
        <div class="header-register-form-area">
            <div class="account-section">
                <div class="container">
                    <div class="account-wrapper">
                        <div class="login-area account-area change-form">
                            <div class="row m-0">
                                <div class="col-lg-6 p-0">
                                    <div class="common-form-style bg-one create-account">
                                        <div class="stop d-lg-none"><i class="fas fa-times"></i></div>
                                        <h4 class="title">login your account</h4>
                                        <p>Maecenas mollis dictum aliquam Velit sapien </p>
                                        <form class="create-account-form">
                                            <div class="form-group">
                                                <input type="text" placeholder="User Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" id="myInput2" placeholder="Password">
                                                <a href="#0" id="show-pass-one" class="show-pass"><i
                                                        class="fas fa-eye"></i></a>
                                            </div>
                                            <ul class="lost-pass">
                                                <li>
                                                    <a href="#0">Forget Password?</a>
                                                </li>
                                                <li>
                                                    <div class="form-group form-group--style">
                                                        <input type="submit" value="Login">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                        <ul class="sign-up-option justify-content-center">
                                            <li>
                                                <a href="#0" class="google"><i class="fab fa-google"></i> google</a>
                                            </li>
                                            <li>
                                                <a href="#0" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                                            </li>
                                            <li>
                                                <a href="#0" class="twitter"><i class="fab fa-twitter"></i>Twitter</a>
                                            </li>
                                        </ul>
                                        <div class="terms-area text-center mt-30">
                                            <p class="terms-and-conditions"><a href="#0">Tream & Condition &
                                                    Privacy?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="change-catagory-area bg_img">
                                        <div class="stop"><i class="fas fa-times"></i></div>
                                        <div class="register-thumb">
                                            <img src="assets/images/register.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login-section end -->


    <form class="header-form">
        <div class="skip"><i class="fas fa-times"></i></div>
        <div class="header-form-area">
            <input type="text" placeholder="Search Here">
            <button type="submit"><i class="flaticon-search-interface-symbol"></i></button>
        </div>
    </form>

@yield('content')
<!-- footer-section start -->
    <footer class="footer-section pt-120 pb-120">
        <div class="container">
            <div class="row mb-30-none">
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="footer-widget widget-menu">
                        <h3 class="widget-title">quick links</h3>
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Popular Airlines</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>popular flight routes</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Destination</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Booking</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Popular Hotel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="footer-widget widget-menu">
                        <h3 class="widget-title">company</h3>
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>About</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Booking</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Air Line Fee</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Careers</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Partners</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="footer-widget widget-menu">
                        <h3 class="widget-title">legal</h3>
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>privacy & Police</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Terms & Conditions</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Post Ticketing Fees</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Price match Proise</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i>Service Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="footer-widget widget-menu">
                        <h3 class="widget-title">about us</h3>
                        <p>Sociosqu, lectus velit risus ipsum proin, felis pellentesque nullam ipsum tincidunt ad.
                            Pellentesque</p>
                        <ul class="footer-social">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0" class="active"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="privacy-area wow fadeIn" data-wow-duration="0.5" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright © 2019 . All rights reserved </p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-section end -->
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/all.js') }}" defer></script>
{{--<!-- jquery -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- migarate-jquery -->
<script src="assets/js/jquery-migrate-3.0.0.js"></script>
<!-- bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- magnific-popup js -->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!-- isotope -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- nice-select js-->
<script src="assets/js/jquery.nice-select.js"></script>
<!-- swipper js -->
<script src="assets/js/swiper.min.js"></script>
<!-- waypoints js link -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<!-- counterup js -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- paroller js -->
<script src="assets/js/jquery.paroller.min.js"></script>
<!-- datepicker js -->
<script src="assets/js/datepicker.min.js"></script>
<!-- datepicker js -->
<script src="assets/js/datepicker.en.js"></script>
<!-- main -->
<script src="assets/js/main.js"></script>
--}}
</body>
</html>
