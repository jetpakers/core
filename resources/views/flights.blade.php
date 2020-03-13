@extends('layouts.app')

@section('content')




    <a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>


    <!-- search-widget-area start -->
    <div class="search-widget-area pt-120" style="background-image: url({{asset('assets/images/banner-1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <flight-search></flight-search>
                </div>
            </div>
        </div>
    </div>
    <!-- search-widget-area end -->


    @if(isset($data))

        <!-- flight-search-section start -->
        <section class="flight-search-section pb-120">
            <div class="container">
                <div class="row mb-30-none">
                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="widget-box mb-30">
                                <h3 class="caption">Flight details</h3>
                                <ul class="flight-category">
                                    <li><span class="category-date">fri 01/11/19</span></li>
                                    <li><a href="#">Dhaka (DCA)</a><span class="count">03:30</span></li>
                                    <li><a href="#">Paris</a><span class="count">13:10</span></li>
                                    <li><span class="category-date">fri 01/11/19</span></li>
                                    <li><a href="#">Paris</a><span class="count">15:30</span></li>
                                    </li>
                                    <li><a href="#">Dhaka(Dca)</a><span class="count">09:10</span></li>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-box mb-30">
                                <h3 class="caption">recent Flight</h3>
                                <div class="recent-flight-area">
                                    <h5 class="title"><a href="#">Thuki air line</a></h5>
                                    <div class="recent-flight-content d-flex flex-wrap">
                                        <span class="place">dhaka to dubai</span>
                                        <div class="time">
                                            <span class="first-time">13:00</span>
                                            <span class="middle-time">05h00</span>
                                            <span class="last-time">08:10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-flight-area">
                                    <h5 class="title"><a href="#">Softking Air</a></h5>
                                    <div class="recent-flight-content d-flex flex-wrap">
                                        <span class="place">dhaka to dubai</span>
                                        <div class="time">
                                            <span class="first-time">13:00</span>
                                            <span class="middle-time">05h00</span>
                                            <span class="last-time">08:10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-flight-area">
                                    <h5 class="title"><a href="#">Dhaka Air Line</a></h5>
                                    <div class="recent-flight-content d-flex flex-wrap">
                                        <span class="place">dhaka to dubai</span>
                                        <div class="time">
                                            <span class="first-time">13:00</span>
                                            <span class="middle-time">05h00</span>
                                            <span class="last-time">08:10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-flight-area">
                                    <h5 class="title"><a href="#">Thuki air line</a></h5>
                                    <div class="recent-flight-content d-flex flex-wrap">
                                        <span class="place">dhaka to dubai</span>
                                        <div class="time">
                                            <span class="first-time">13:00</span>
                                            <span class="middle-time">05h00</span>
                                            <span class="last-time">08:10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-flight-area">
                                    <h5 class="title"><a href="#">Softking Air</a></h5>
                                    <div class="recent-flight-content d-flex flex-wrap">
                                        <span class="place">dhaka to dubai</span>
                                        <div class="time">
                                            <span class="first-time">13:00</span>
                                            <span class="middle-time">05h00</span>
                                            <span class="last-time">08:10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-flight-area">
                                    <h5 class="title"><a href="#">Dhaka Air Line</a></h5>
                                    <div class="recent-flight-content d-flex flex-wrap">
                                        <span class="place">dhaka to dubai</span>
                                        <div class="time">
                                            <span class="first-time">13:00</span>
                                            <span class="middle-time">05h00</span>
                                            <span class="last-time">08:10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        @forelse($data['data'] as $flight )
                            @php
                                $itineraries = $flight['itineraries'];
                                $price = $flight['price'];
                                $pricingOptions = $flight['pricingOptions'];
                                $validatingAirlineCodes = $flight['validatingAirlineCodes'];
                                $travelerPricings = $flight['travelerPricings'];

                                $segments = $itineraries[0]['segments'];

            $start_date = date('h:i A', strtotime($segments[0]['departure']['at']));
            $end_date = date('h:i A', strtotime($segments[sizeof($segments)-1]['arrival']['at']));
            $diff = date_diff(date_create($start_date),date_create($end_date));



                            @endphp
                            <div class="col-lg-12 col-md-12 mb-30">
                                <div class="flight-search-box">
                                    <div class="flight-search-item d-flex flex-wrap">
                                        <div class="flight-search-thumb">
                                            <img src="assets/images/search-1.png" alt="image">
                                        </div>
                                        <div class="flight-search-title">
                                            <h5 class="title">{{$data['dictionaries']['carriers'][$segments[0]['carrierCode']]}}
                                                <span style="color: red">{{sizeof($segments)}}</span></h5>
                                            <h5 class="cost">${{$price['grandTotal']}}</h5>
                                            <a href="{{route('flight.show',['flight' => $flight,'dictionaries'=>$data['dictionaries']])}}"   class="cmn-btn" style="    right: 0px;
    top: 42px;
    position: absolute;">Select</a>

                                            {{--<form id="fly" action="{{ route('flight.show') }}" method="POST" style="display: none;">
                                                @csrf
                                                <input type="hidden" name="body" value="{{$flight}}">
                                            </form>--}}
                                        </div>
                                    </div>
                                    <div class="flight-search-body">
                                        <h5 class="flight-start">{{$start_date}}</h5>
                                        <h5 class="flight-middle">{{ $diff->format('%hh %im')  }}</h5>
                                        <h5 class="flight-end">{{$end_date}}</h5>
                                    </div>
                                    <div class="flight-place">
                                    <span
                                        class="start-place">{{ $segments[0]['departure']['iataCode']}}</span>
                                        <span
                                            class="end-place">{{$segments[sizeof($segments)-1]['arrival']['iataCode']}}</span>
                                    </div>
                                </div>
                                <div class="faq-wrapper faq-wrapper--style">
                                    <div class="faq-item">
                                        <a class="faq-title"><span class="title"> View Details</span><span
                                                class="right-icon"></span></a>
                                        <div class="faq-content">
                                            <div class="tabs-container">

                                                <section class="tab-pane on" id="section-offer-leg0-details">
                                                    <div class="details-wrapper" data-leg-index="0">
                                                        <div class="segment-info" data-test-id="segment-info">
                                <span class="visuallyhidden">10:00pm to 9:55am     6h 55m
                            </span>
                                                            <span class="visuallyhidden">
                                        Overnight Arrives Fri, Oct 2
                                    </span>
                                                            <div class="segment-info-primary" aria-hidden="true">
                                                            <span class="times segment-info-departure"
                                                                  data-test-id="details-departure-time">10:00pm</span>
                                                                <span class="icon icon-arrow90"
                                                                      aria-hidden="true"></span><span
                                                                    class="alt">to</span>

                                                                <span class="times segment-info-arrival"
                                                                      data-test-id="details-arrival-time">9:55am</span>
                                                                <span class="times segment-info-duration">
                                        <span class="flight-duration" data-test-id="details-duration-time">
                                                6h 55m
                                        </span>
                                            <span class="segment-info-overnight" data-test-id="details-overnight">
                                                <span class="icon icon-overnight" aria-hidden="true"></span>


                                                Overnight · Arrives Fri, Oct 2
                                            </span>
                                    </span>
                                                                <div class="segment-info-details-item class"
                                                                     data-test-cabin-class="3"
                                                                     data-test-id="details-class-type"></div>
                                                            </div>
                                                            <ul class="details-utility-item segment-info-details secondary">
                                                                <li class="details-utility-item-value segment-info-details-item route">
                                                                <span
                                                                    data-test-id="details-departure-city">New York</span>
                                                                    to <span
                                                                        data-test-id="details-arrival-city">Lisbon</span>
                                                                </li>
                                                                <li class="details-utility-item-value segment-info-details-item airport">
                                                                    <span data-test-id="details-departure-localName">John F. Kennedy Intl. (JFK)</span>
                                                                    to <span data-test-id="details-arrival-localName">Humberto Delgado (LIS)</span>
                                                                </li>
                                                                <li class="details-utility-item-value segment-info-details-item flight"
                                                                    data-test-id="details-airline-data"
                                                                    data-test-airline-name="TAP Portugal"
                                                                    data-test-airline-flight-number="208">
                                                                    TAP Portugal 208
                                                                </li>
                                                                <li class="details-utility-item-value segment-info-details-item class"
                                                                    data-test-id="details-class-type">
                                                                    Economy / Coach (E)
                                                                </li>
                                                                <li class="details-utility-item-value segment-info-details-item aircraft"
                                                                    data-test-id="aircraft-in-details">


                                                                    Breakfast
                                                                    |

                                                                    Dinner

                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="layover-info" data-test-overnight="0"
                                                             data-test-id="layover-info-container">
                                                            <span class="icon icon-time" aria-hidden="true"></span><span
                                                                class="alt">layover</span>

                                                            <span class="layover-duration"
                                                                  data-test-id="details-layover-duration">
                                      23h 55m stop
                              </span>
                                                            <span class="layover-city"
                                                                  data-test-id="details-layover-city">Lisbon (LIS)</span>
                                                        </div>
                                                        <div class="segment-info" data-test-id="segment-info">
                                <span class="visuallyhidden">9:50am to 2:25pm     5h 35m
                            </span>
                                                            <div class="segment-info-primary" aria-hidden="true">
                                                            <span class="times segment-info-departure"
                                                                  data-test-id="details-departure-time">9:50am</span>
                                                                <span class="icon icon-arrow90"
                                                                      aria-hidden="true"></span><span
                                                                    class="alt">to</span>

                                                                <span class="times segment-info-arrival"
                                                                      data-test-id="details-arrival-time">2:25pm</span>
                                                                <span class="times segment-info-duration">
                                        <span class="flight-duration" data-test-id="details-duration-time">
                                                5h 35m
                                        </span>
                                    </span>
                                                                <div class="segment-info-details-item class"
                                                                     data-test-cabin-class="3"
                                                                     data-test-id="details-class-type"></div>
                                                            </div>
                                                            <ul class="details-utility-item segment-info-details secondary">
                                                                <li class="details-utility-item-value segment-info-details-item route">
                                                                <span
                                                                    data-test-id="details-departure-city">Lisbon</span>
                                                                    to <span
                                                                        data-test-id="details-arrival-city">Accra</span>
                                                                </li>
                                                                <li class="details-utility-item-value segment-info-details-item airport">
                                                                    <span data-test-id="details-departure-localName">Humberto Delgado (LIS)</span>
                                                                    to <span data-test-id="details-arrival-localName">Kotoka Intl. (ACC)</span>
                                                                </li>
                                                                <li class="details-utility-item-value segment-info-details-item flight"
                                                                    data-test-id="details-airline-data"
                                                                    data-test-airline-name="TAP Portugal"
                                                                    data-test-airline-flight-number="1529">
                                                                    TAP Portugal 1529
                                                                </li>
                                                                <li class="details-utility-item-value segment-info-details-item class"
                                                                    data-test-id="details-class-type">
                                                                    Economy / Coach (E)
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="details-utility-info secondary">
                                                            <dl class="details-utility-item details-baggage-fee-info">
                                                                <dt class="details-utility-item-label">Estimated bag
                                                                    fees
                                                                </dt>

                                                                <dd class="details-utility-item-value hidden">
                                                                    <span class="hidden" data-test-id="bag-fee-carrier">TAP Portugal</span>
                                                                </dd>

                                                                <dd class="details-utility-item-value"
                                                                    data-test-id="bag-fee-info">
                                                                    <table data-test-id="baggage-info-table">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="bag-fee-label bag-fee-label-0">
                                                                                Carry
                                                                                on:
                                                                            </td>
                                                                            <td data-test-id="carry-on-bag-price">
                                                                                No fee
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="bag-fee-label bag-fee-label-0">
                                                                                1st
                                                                                checked bag:
                                                                            </td>
                                                                            <td data-test-id="first-checked-bag-price">
                                                                                $88.00 - $240.00
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="bag-fee-label bag-fee-label-0">
                                                                                2nd
                                                                                checked bag:
                                                                            </td>
                                                                            <td data-test-id="second-checked-bag-price">
                                                                                $88.00 - $240.00
                                                                            </td>
                                                                        </tr>

                                                                        </tbody>
                                                                    </table>
                                                                    <p data-test-id="bag-fee-more-info-link">
                                                                        Confirm bag fees, weight and size restrictions
                                                                        with
                                                                        <a data-test-id="details-airline-baggage-url"
                                                                           target="_blank"
                                                                           href="https://www.flytap.com/en-us/baggage"
                                                                           data-airline-code="TP"><span
                                                                                class="details-baggage-info-airline">TAP Portugal</span><span
                                                                                class="icon icon-popup"
                                                                                aria-hidden="true"></span><span
                                                                                class="alt">Opens in a new window</span></a>
                                                                    </p>


                                                                </dd>
                                                            </dl>
                                                            <div class="details-legal-text">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </section>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
        </section>
        <!-- flight-search-section end -->
    @endif

    <!-- flight-section start -->
    <section class="flight-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title">upcoming Flight</h2>
                        <span class="title-border title-border-center"></span>
                        <p> Augue eros ultrices amet, viverra nec nunc massa magna. Sit a, lacus mattis odio sem
                            placerat ante, lacus aliquam sit id ligula est ante fringilla </p>
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
                                <h3 class="title">Dubai city</h3>
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
                        <p> Augue eros ultrices amet, viverra nec nunc massa magna. Sit a, lacus mattis odio sem
                            placerat ante, lacus aliquam sit id ligula est ante fringilla </p>
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
                                        <p>Cursus nunc fames rutruetnuutate nec ullamcorper nibh eget. Viverra vitae ac
                                            ultricies eget, et donec sed bibendum. Ornare enim euulum in magna
                                            maecenas</p>
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
                                        <p>Cursus nunc fames rutruetnuutate nec ullamcorper nibh eget. Viverra vitae ac
                                            ultricies eget, et donec sed bibendum. Ornare enim euulum in magna
                                            maecenas</p>
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
                                        <p>Cursus nunc fames rutruetnuutate nec ullamcorper nibh eget. Viverra vitae ac
                                            ultricies eget, et donec sed bibendum. Ornare enim euulum in magna
                                            maecenas</p>
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
@section('style')
    <link href="https://b.travel-assets.com/bundles/expweb/flight-search-styles/flight-search-styles-f2f906f83c8ebf9d5494c477b1709a64-min.css">
    <style>
        .faq-item .faq-title .title {
            width: calc(100% - 40px);
            padding: 10px 25px;
            display: inline-block;
            font-size: small;
            color: #4e37b2;
            font-weight: 500;
            margin-bottom: 0;
        }
    </style>
@endsection
