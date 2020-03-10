@extends('layouts.app')

@section('content')




    <a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>


    <!-- search-widget-area start -->
    <div class="search-widget-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-widget">
                        <form method="POST" action="{{route('flights.show')}}">
                            @csrf
                            <div class="checkbox-form d-flex flex-wrap">
                                <div class="checkbox-area">
                                    <input type="checkbox">
                                    <label>One Way</label>
                                </div>
                                <div class="checkbox-area">
                                    <input type="checkbox">
                                    <label>Round Trip</label>
                                </div>
                                <div class="checkbox-area">
                                    <input type="checkbox">
                                    <label>Multi City</label>
                                </div>
                            </div>
                            <div class="rt-input-group">
                                <div class="single-input  col-rt-in-3">
                                    <input type="text" placeholder="form:">
                                    <span class="input-iconbadge"><img src="assets/images/icon-1.png" alt="" draggable="false"></span>
                                    <span class="input-iconbadge-right"><img src="assets/images/icon-5.png" alt="" draggable="false"></span>
                                </div>
                                <div class="single-input  col-rt-in-3">
                                    <input type="text" placeholder="to:">
                                    <span class="input-iconbadge"><img src="assets/images/icon-1.png" alt="" draggable="false"></span>
                                </div>
                                <div class="single-input  col-rt-in-3">
                                    <input type='text' id="booking_date_from" name="booking_date_from" class='datepicker-here' data-language='en' placeholder="depart">
                                    <span class="input-iconbadge"><img src="assets/images/icon-2.png" alt="" draggable="false"></span>
                                </div>
                                <div class="single-input  col-rt-in-3">
                                    <input type='text' id="booking_date_from" name="booking_date_from" class='datepicker-here' data-language='en' placeholder="return">
                                    <span class="input-iconbadge"><img src="assets/images/icon-2.png" alt="" draggable="false"></span>
                                </div>
                                <div class="single-input  col-rt-in-3">
                                    <input type="submit" class="cmn-btn" value="search">
                                </div>
                            </div>
                            <div class="rt-input-group rt-input-group--style">
                                <div class="single-input  col-rt-in-3">
                                    <select class="select-bar">
                                        <option data-display="Passengers">Passengers</option>
                                        <option value="1">Option-1</option>
                                        <option value="2">Option-2</option>
                                        <option value="3">Option-3</option>
                                    </select>
                                    <span class="input-iconbadge"><img src="assets/images/icon-3.png" alt="" draggable="false"></span>
                                </div>
                                <div class="single-input  col-rt-in-3">
                                    <select class="select-bar">
                                        <option data-display="Business">Business</option>
                                        <option value="1">Option-1</option>
                                        <option value="2">Option-2</option>
                                        <option value="3">Option-3</option>
                                    </select>
                                    <span class="input-iconbadge"><img src="assets/images/icon-4.png" alt="" draggable="false"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-widget-area end -->


    <!-- flight-search-section start -->
    <section class="flight-search-section pb-120">
        <div class="container">
            <div class="row mb-30-none">
                @forelse($data['data'] as $flight )
                    @php
                    $segments = $flight['offerItems'][0]['services'][0]['segments'];
$start_date = date('h:i A', strtotime($segments[0]['flightSegment']['departure']['at']));
$end_date = date('h:i A', strtotime($segments[sizeof($segments)-1]['flightSegment']['arrival']['at']));
$diff = date_diff(date_create($start_date),date_create($end_date))
                    @endphp
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="flight-search-box">
                        <div class="flight-search-item d-flex flex-wrap">
                            <div class="flight-search-thumb">
                                <img src="assets/images/search-1.png" alt="image">
                            </div>
                            <div class="flight-search-title">
                                <h5 class="title">{{$data['dictionaries']['carriers'][$segments[0]['flightSegment']['carrierCode']]}}  <snap style="color: red">{{sizeof($segments)}}</snap></h5>
                                <h5 class="cost">${{$flight['offerItems'][0]['price']['total']}}</h5>
                            </div>
                        </div>
                        <div class="flight-search-body">
                            <h5 class="flight-start">{{$start_date}}</h5>
                            <h5 class="flight-middle">{{ $diff->format('%hh %im')  }}</h5>
                            <h5 class="flight-end">{{$end_date}}</h5>
                        </div>
                        <div class="flight-place">
                            <span  class="start-place">{{ Str::title($data['dictionaries']['locations'][$segments[0]['flightSegment']['departure']['iataCode']]['detailedName'])}}</span>
                            <span class="end-place">{{Str::title($data['dictionaries']['locations'][$segments[sizeof($segments)-1]['flightSegment']['arrival']['iataCode']]['detailedName'])}}</span>
                        </div>
                    </div>
                </div>
               @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- flight-search-section end -->


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


    <!-- offer-section start -->
    <section class="offer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pl-0 pr-0">
                    <div class="offer-thunb">
                        <img src="assets/images/offer.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer-section end -->


    <!-- client-section start -->
    <section class="client-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title">our happy passengers</h2>
                        <span class="title-border title-border-center"></span>
                        <p> Augue eros ultrices amet, viverra nec nunc massa magna. Sit a, lacus mattis odio sem placerat ante, lacus aliquam sit id ligula est ante fringilla </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-slider-area">
                        <div class="client-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="client-item d-flex flex-wrap">
                                        <div class="client-thumb">
                                            <img src="assets/images/client-1.png" alt="image">
                                        </div>
                                        <div class="client-content">
                                            <h3 class="title">robin hook</h3>
                                            <span>business man</span>
                                        </div>
                                        <p>Cursus nunc fames rutruetnuutate nec ullamcorper nibh eget. Viverra vitae ac ultricies eget, et donec sed bibendum. Ornare enim euulum in magna maecenas</p>
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
                                <div class="swiper-slide">
                                    <div class="client-item d-flex flex-wrap">
                                        <div class="client-thumb">
                                            <img src="assets/images/client-2.png" alt="image">
                                        </div>
                                        <div class="client-content">
                                            <h3 class="title">martin jobs</h3>
                                            <span>business man</span>
                                        </div>
                                        <p>Cursus nunc fames rutruetnuutate nec ullamcorper nibh eget. Viverra vitae ac ultricies eget, et donec sed bibendum. Ornare enim euulum in magna maecenas</p>
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
                                <div class="swiper-slide">
                                    <div class="client-item d-flex flex-wrap">
                                        <div class="client-thumb">
                                            <img src="assets/images/client-3.png" alt="image">
                                        </div>
                                        <div class="client-content">
                                            <h3 class="title">zihad kuna</h3>
                                            <span>business man</span>
                                        </div>
                                        <p>Cursus nunc fames rutruetnuutate nec ullamcorper nibh eget. Viverra vitae ac ultricies eget, et donec sed bibendum. Ornare enim euulum in magna maecenas</p>
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
            </div>
        </div>
    </section>
    <!-- client-section end -->

@endsection
