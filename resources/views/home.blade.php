@extends('layouts.app')

@section('content')
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>--}}

<!-- banner-section start -->
<section class="banner-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="banner-content">
                    <p>Earn up to $300 per trip when you fly with JetPak! </p>
                    <h3 class="title">You Fly, We Pay</h3>
                  {{--  <div class="btn-area">
                        <a href="{{route('about')}}" class="cmn-btn">know more us</a>
                        <a href="{{co}}" class="cmn-btn-active">Contact us</a>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->
<!-- search-widget-area start -->
<div class="search-widget-area search-widget-area--style">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <flight-search></flight-search>
            </div>
        </div>
    </div>
</div>
<!-- search-widget-area end -->

<!-- offer-section start -->
{{--<section class="offer-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 pl-0 pr-0">
                <div class="offer-thunb">
                    <img src="assets/images/offer.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>--}}
<!-- offer-section end -->


<a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>


<!-- service-section start -->
<section class="service-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center mb-60-none">
            <div class="col-lg-4 col-md-6 col-sm-8 text-center mb-60">
                <div class="service-item service-item--style mt-30">
                    <div class="service-icon">
                        <i class="flaticon-startup"></i>
                    </div>
                    <div class="service-content">
                        <h3 class="title"><a href="#">fast & easy booking</a></h3>
                        <p>Mauris pede dui in eunam nlnulla odio ut sitac Lacus eleifend frinlla scelerisque vitaeorci</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 text-center mb-60">
                <div class="service-item service-item--style mt-30">
                    <div class="service-icon">
                        <i class="flaticon-internet"></i>
                    </div>
                    <div class="service-content">
                        <h3 class="title"><a href="#">any time any where</a></h3>
                        <p>Mauris pede dui in eunam nlnulla odio ut sitac Lacus eleifend frinlla scelerisque vitaeorci</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 text-center mb-60">
                <div class="service-item service-item--style mt-30">
                    <div class="service-icon">
                        <i class="flaticon-audio-headset-of-auriculars-with-microphone-included"></i>
                    </div>
                    <div class="service-content">
                        <h3 class="title"><a href="#">24/7 support</a></h3>
                        <p>Mauris pede dui in eunam nlnulla odio ut sitac Lacus eleifend frinlla scelerisque vitaeorci</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-section end -->


<!-- flight-section start -->
<section class="flight-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">upcoming Flight</h2>
                    <span class="title-border title-border-center"></span>
                    <p> Augue eros ultrices amet, viverra nec nunc massa magna. Sit a, lacus mattis odio sem placerat ante, lacus aliquam sit id ligula est ante fringilla </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-lg-6 mb-30">
                <div class="flight-item flight-item--style d-flex flex-wrap">
                    <div class="flight-thumb">
                        <img src="assets/images/flight-1.jpg" alt="image">
                        <h3 class="flight-overlay">form $250</h3>
                    </div>
                    <div class="flight-details">
                        <a href="flight-facilities.html">
                            <h3 class="title">Dhaka</h3>
                            <i class="flaticon-exchange"></i>
                            <h3 class="title">las vegas</h3>
                        </a>
                        <ul class="flight-content">
                            <li><i class="flaticon-clock"></i> 13:00 ----- 13h00 ----- 08:10</li>
                            <li><i class="flaticon-calendar"></i> dec 14 - dec 22</li>
                            <li><i class="flaticon-plane"></i> dhaka air line</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="flight-item flight-item--style d-flex flex-wrap">
                    <div class="flight-thumb">
                        <img src="assets/images/flight-2.jpg" alt="image">
                        <h3 class="flight-overlay">form $400</h3>
                    </div>
                    <div class="flight-details">
                        <a href="flight-facilities.html">
                            <h3 class="title">Dhaka</h3>
                            <i class="flaticon-exchange"></i>
                            <h3 class="title">singapur</h3>
                        </a>
                        <ul class="flight-content">
                            <li><i class="flaticon-clock"></i> 14:00 ----- 15h00 ----- 10:10</li>
                            <li><i class="flaticon-calendar"></i> dec 15 - dec 30</li>
                            <li><i class="flaticon-plane"></i> dhaka air line</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="flight-item flight-item--style d-flex flex-wrap">
                    <div class="flight-thumb">
                        <img src="assets/images/flight-3.jpg" alt="image">
                        <h3 class="flight-overlay">form $658</h3>
                    </div>
                    <div class="flight-details">
                        <a href="flight-facilities.html">
                            <h3 class="title">Dhaka</h3>
                            <i class="flaticon-exchange"></i>
                            <h3 class="title">Dubai  city</h3>
                        </a>
                        <ul class="flight-content">
                            <li><i class="flaticon-clock"></i> 15:00 ----- 10h00 ----- 10:10</li>
                            <li><i class="flaticon-calendar"></i> dec 09 - dec 30</li>
                            <li><i class="flaticon-plane"></i> dhaka air line</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="flight-item flight-item--style d-flex flex-wrap">
                    <div class="flight-thumb">
                        <img src="assets/images/flight-4.jpg" alt="image">
                        <h3 class="flight-overlay">form $479</h3>
                    </div>
                    <div class="flight-details">
                        <a href="flight-facilities.html">
                            <h3 class="title">Dhaka</h3>
                            <i class="flaticon-exchange"></i>
                            <h3 class="title">thailand</h3>
                        </a>
                        <ul class="flight-content">
                            <li><i class="flaticon-clock"></i> 14:00 ----- 15h00 ----- 11:10</li>
                            <li><i class="flaticon-calendar"></i> dec 14 - dec 22</li>
                            <li><i class="flaticon-plane"></i> dhaka air line</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="flight-item flight-item--style d-flex flex-wrap">
                    <div class="flight-thumb">
                        <img src="assets/images/flight-5.jpg" alt="image">
                        <h3 class="flight-overlay">form $350</h3>
                    </div>
                    <div class="flight-details">
                        <a href="flight-facilities.html">
                            <h3 class="title">Dhaka</h3>
                            <i class="flaticon-exchange"></i>
                            <h3 class="title">Canada</h3>
                        </a>
                        <ul class="flight-content">
                            <li><i class="flaticon-clock"></i> 09:00 ----- 18h00 ----- 08:10</li>
                            <li><i class="flaticon-calendar"></i> dec 15 - dec 30</li>
                            <li><i class="flaticon-plane"></i> dhaka air line</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="flight-item flight-item--style d-flex flex-wrap">
                    <div class="flight-thumb">
                        <img src="assets/images/flight-6.jpg" alt="image">
                        <h3 class="flight-overlay">form $590</h3>
                    </div>
                    <div class="flight-details">
                        <a href="flight-facilities.html">
                            <h3 class="title">Dhaka</h3>
                            <i class="flaticon-exchange"></i>
                            <h3 class="title">london</h3>
                        </a>
                        <ul class="flight-content">
                            <li><i class="flaticon-clock"></i> 13:00 ----- 13h00 ----- 08:10</li>
                            <li><i class="flaticon-calendar"></i> dec 09 - dec 30</li>
                            <li><i class="flaticon-plane"></i> dhaka air line</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- flight-section end -->


<!-- about-section start -->
<section class="about-section about-section--style pt-120 pb-120">
    <div class="container-fluid">
        <div class="row mb-30-none">
            <div class="col-lg-6 mb-30">
                <div class="about-content">
                    <h2 class="title">trusted , universal and faster online air ticket booking agency</h2>
                    <span class="title-border"></span>
                    <p>Consectetuer donec at, ipsum nulla in id. Justo pharetra vel. Ac qsquntasse odio, turpis ante suspendisse mauris integer.</p>
                    <p>Augue commodo nibh orci, vel consectetuer nisl velit nunc consectetuer Donec sollicitudin etiam a sollicitudin tempor ac, aliquam arcu sed, et ut ultricieLorem mauris, non mauris nec donec pellentesque vel ac, commodo adipisicingtellus porttitor metus vivamus. Ipsum dolor sed nulla viverr pellentesque cursus duis tincidunt pellentesque integer massa, porttitor nec incididunt sit pharetra metus orci a. Consectetuer in vehicula wisi commodo </p>
                    <a href="contact.html" class="cmn-btn">discover more</a>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="about-thumb">
                    <img src="assets/images/about-2.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- client-section start -->
<section class="client-section--style pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="client-slider--style">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="client-item--style d-flex flex-wrap">
                                <div class="client-thumb--style">
                                    <img src="assets/images/client-4.png" alt="image">
                                </div>
                                <div class="client-content--style">
                                    <p>Commodo justo auctor. Cras praesent. Porttitorceptsietrcu lectus nunc fermentum ultrices vestibulum sporitopendisse ante porta dignissim estconsectetutesque scelerisque  dolor pellentesque, risus vel egetmattis donec tellus bibenddtum massa nulla neque bi sed a. Morbi posuere urna velit sit venenatis.</p>
                                    <div class="client-header">
                                        <h3 class="title">martin jobs</h3>
                                        <span class="sub-title">business man</span>
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
<!-- client-section end -->


<!-- choose-us-section start -->
<section class="choose-us-section choose-us-section--style pt-120">
    <div class="container-fluid">
        <div class="row mb-30-none">
            <div class="col-lg-6 pl-lg-0 mb-30">
                <div class="choose-us-thumb">
                    <img src="assets/images/choose-us-2.png" alt="image">
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="choose-us-content">
                    <h2 class="title">why we are best booking agency for air ticket</h2>
                    <span class="title-border"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed desmod tempor incididunt ut labore et dolore </p>
                    <div class="faq-right-content">
                        <div class="faq-wrapper">
                            <div class="faq-item active open">
                                <h3 class="faq-title"><span class="title">fast service</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Platea tincidunt praesent mauris, facilisis vel sed ornare nulltcies proin luctus velilibero. At ligula amet, sit velit est morbi, sit eros tempus mus sit at ut tortor ut. Morbi nulla antmauris</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">why need online booking</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Platea tincidunt praesent mauris, facilisis vel sed ornare nulltcies proin luctus velilibero. At ligula amet, sit velit est morbi, sit eros tempus mus sit at ut tortor ut. Morbi nulla antmauris</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">24 hours customer support</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Platea tincidunt praesent mauris, facilisis vel sed ornare nulltcies proin luctus velilibero. At ligula amet, sit velit est morbi, sit eros tempus mus sit at ut tortor ut. Morbi nulla antmauris</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h3 class="faq-title"><span class="title">iso certificate</span><span class="right-icon"></span></h3>
                                <div class="faq-content">
                                    <p>Platea tincidunt praesent mauris, facilisis vel sed ornare nulltcies proin luctus velilibero. At ligula amet, sit velit est morbi, sit eros tempus mus sit at ut tortor ut. Morbi nulla antmauris</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- choose-us-section end -->


<!-- check-section start -->
<section class="check-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">check popular hotel</h2>
                    <span class="title-border title-border-center"></span>
                    <p> Augue eros ultrices amet, viverra nec nunc massa magna. Sit a, lacus mattis odio sem placerat ante, lacus aliquam sit id ligula est ante fringilla </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                <div class="check-item">
                    <div class="check-thumb">
                        <img src="assets/images/check-1.jpg" alt="image">
                        <h3 class="check-overlay">$2500.00 / per day</h3>
                    </div>
                    <div class="check-body">
                        <div class="check-details">
                            <h3 class="title"><a href="hotel-details.html">softking 5 star hotel</a></h3>
                            <span class="sub-title"><i class="fas fa-map-marker-alt"></i>milwaukee , USA</span>
                        </div>
                        <div class="meta-post d-flex flex-wrap justify-content-between">
                            <div class="meta-food">
                                <a href="#"><i class="fas fa-coffee"></i> <span>free brekfast</span></a>
                            </div>
                            <div class="meta-ratings">
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>5.0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                <div class="check-item">
                    <div class="check-thumb">
                        <img src="assets/images/check-2.jpg" alt="image">
                        <h3 class="check-overlay">$3200.00 / per day</h3>
                    </div>
                    <div class="check-body">
                        <div class="check-details">
                            <h3 class="title"><a href="hotel-details.html">lavara hotel</a></h3>
                            <span class="sub-title"><i class="fas fa-map-marker-alt"></i>bannani , bangladesh</span>
                        </div>
                        <div class="meta-post d-flex flex-wrap justify-content-between">
                            <div class="meta-food">
                                <a href="#"><i class="fas fa-coffee"></i> <span>free brekfast</span></a>
                            </div>
                            <div class="meta-ratings">
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                <div class="check-item">
                    <div class="check-thumb">
                        <img src="assets/images/check-3.jpg" alt="image">
                        <h3 class="check-overlay">$2500.00 / per day</h3>
                    </div>
                    <div class="check-body">
                        <div class="check-details">
                            <h3 class="title"><a href="hotel-details.html">king hup hotel</a></h3>
                            <span class="sub-title"><i class="fas fa-map-marker-alt"></i>mumbai , india</span>
                        </div>
                        <div class="meta-post d-flex flex-wrap justify-content-between">
                            <div class="meta-food">
                                <a href="#"><i class="fas fa-coffee"></i> <span>free brekfast</span></a>
                            </div>
                            <div class="meta-ratings">
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                <div class="check-item">
                    <div class="check-thumb">
                        <img src="assets/images/check-4.jpg" alt="image">
                        <h3 class="check-overlay">$3400.00 / per day</h3>
                    </div>
                    <div class="check-body">
                        <div class="check-details">
                            <h3 class="title"><a href="hotel-details.html">hotel thianoka</a></h3>
                            <span class="sub-title"><i class="fas fa-map-marker-alt"></i>milwaukee , USA</span>
                        </div>
                        <div class="meta-post d-flex flex-wrap justify-content-between">
                            <div class="meta-food">
                                <a href="#"><i class="fas fa-coffee"></i> <span>free brekfast</span></a>
                            </div>
                            <div class="meta-ratings">
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>3.0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                <div class="check-item">
                    <div class="check-thumb">
                        <img src="assets/images/check-5.jpg" alt="image">
                        <h3 class="check-overlay">$3200.00 / per day</h3>
                    </div>
                    <div class="check-body">
                        <div class="check-details">
                            <h3 class="title"><a href="hotel-details.html">lavara hotel</a></h3>
                            <span class="sub-title"><i class="fas fa-map-marker-alt"></i>bannani , bangladesh</span>
                        </div>
                        <div class="meta-post d-flex flex-wrap justify-content-between">
                            <div class="meta-food">
                                <a href="#"><i class="fas fa-coffee"></i> <span>free brekfast</span></a>
                            </div>
                            <div class="meta-ratings">
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>5.0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 mb-30">
                <div class="check-item">
                    <div class="check-thumb">
                        <img src="assets/images/check-6.jpg" alt="image">
                        <h3 class="check-overlay">$2500.00 / per day</h3>
                    </div>
                    <div class="check-body">
                        <div class="check-details">
                            <h3 class="title"><a href="hotel-details.html">king hup hotel</a></h3>
                            <span class="sub-title"><i class="fas fa-map-marker-alt"></i>mumbai , india</span>
                        </div>
                        <div class="meta-post d-flex flex-wrap justify-content-between">
                            <div class="meta-food">
                                <a href="#"><i class="fas fa-coffee"></i> <span>free brekfast</span></a>
                            </div>
                            <div class="meta-ratings">
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>5.0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- check-section end -->


<!-- video-section start -->
<section class="video-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="video-icon">
                    <a class="popup-youtube mfp-iframe" href="../../../../www.youtube.com/watchb87b.html?v=0O2aH4XLbto">
                        <i class="flaticon-play-button"></i>
                    </a>
                </div>
            </div>
            <div class="video-content">
                <h3 class="title">how to book your air ticket </h3>
            </div>
        </div>
    </div>
</section>
<!-- video-section end -->


<!-- blog-section start -->
<section class="blog-section blog-section--style pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">our recent post</h2>
                    <span class="title-border title-border-center"></span>
                    <p> Augue eros ultrices amet, viverra nec nunc massa magna. Sit a, lacus mattis odio sem placerat ante, lacus aliquam sit id ligula est ante fringilla </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-lg-4 col-md-6 col-sm-8 text-center mb-30">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="assets/images/blog-1.jpg" alt="image">
                    </div>
                    <div class="blog-content">
                        <h3 class="title"><a href="blog-details.html">Gravida Vitae soci Lectus Velit Risus Ipsum Proin.</a> </h3>
                        <p>Scelerisque cras ipsum platea poberen nullam magna vitae. Proin midiam amet at in. acsuscipit morbi </p>
                    </div>
                    <div class="blog-footer d-flex flex-wrap justify-content-between">
                        <div class="meta-date">
                            <a href="#"><i class="far fa-calendar"></i> <span>05 may 2019 </span></a>
                        </div>
                        <div class="meta-writer">
                            <span class="provide">By</span>
                            <span class="admin">admin</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 text-center mb-30">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="assets/images/blog-2.jpg" alt="image">
                    </div>
                    <div class="blog-content">
                        <h3 class="title"><a href="blog-details.html">Porttitor Inceptos Saente Curabitur Arcu Lectus</a> </h3>
                        <p>Scelerisque cras ipsum platea poberen nullam magna vitae. Proin midiam amet at in. acsuscipit morbi </p>
                    </div>
                    <div class="blog-footer d-flex flex-wrap justify-content-between">
                        <div class="meta-date">
                            <a href="#"><i class="far fa-calendar"></i> <span>05 may 2019 </span></a>
                        </div>
                        <div class="meta-writer">
                            <span class="provide">By</span>
                            <span class="admin">admin</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 text-center mb-30">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="assets/images/blog-3.jpg" alt="image">
                    </div>
                    <div class="blog-content">
                        <h3 class="title"><a href="blog-details.html">Metusnibh Donec Etduin  Platea Dictumnullam</a> </h3>
                        <p>Scelerisque cras ipsum platea poberen nullam magna vitae. Proin midiam amet at in. acsuscipit morbi </p>
                    </div>
                    <div class="blog-footer d-flex flex-wrap justify-content-between">
                        <div class="meta-date">
                            <a href="#"><i class="far fa-calendar"></i> <span>05 may 2019 </span></a>
                        </div>
                        <div class="meta-writer">
                            <span class="provide">By</span>
                            <span class="admin">admin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-section end -->


<!-- brand-section start -->
<div class="brand-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-wrapper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="BrandSlider">
                                <div class="brand-item">
                                    <img src="assets/images/brand-1.png" alt="logo images">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="BrandSlider">
                                <div class="brand-item">
                                    <img src="assets/images/brand-2.png" alt="logo images">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="BrandSlider">
                                <div class="brand-item">
                                    <img src="assets/images/brand-3.png" alt="logo images">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="BrandSlider">
                                <div class="brand-item">
                                    <img src="assets/images/brand-4.png" alt="logo images">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="BrandSlider">
                                <div class="brand-item">
                                    <img src="assets/images/brand-5.png" alt="logo images">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="BrandSlider">
                                <div class="brand-item">
                                    <img src="assets/images/brand-6.png" alt="logo images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-section end -->


@endsection
