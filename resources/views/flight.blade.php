@extends('layouts.app')

@section('content')

    @php
        $itineraries = $flight['itineraries'];
        $price = $flight['price'];
        $pricingOptions = $flight['pricingOptions'];
        $validatingAirlineCodes = $flight['validatingAirlineCodes'];
        $travelerPricings = $flight['travelerPricings'];

        $segments = $itineraries[0]['segments'];





    @endphp

    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="inner-banner-content">
                        <h2 class="title">booking flight</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- breadcrumb-section start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('root')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>


    <!-- booking-registration-section start -->
    <section class="booking-registration-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="booking-registration-form">
                        <div class="booking-form-area">
                            <h3 class="title">General information</h3>
                            <form class="general-information">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Full Name</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Adress</label>
                                    <div class="col-lg-8">
                                        <textarea name="adress" id="adress"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Date Of Birth</label>
                                    <div class="col-lg-8">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Nationality</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Sex</label>
                                    <div class="col-lg-8">
                                        <select class="select-bar">
                                            <option data-display="- Select Gender -">- Select Gender -</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Passport Number</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Expiry Date</label>
                                    <div class="col-lg-5 mb-30">
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="checkbox">
                                        <span>No Expiry</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Mobile </label>
                                    <div class="col-lg-8">
                                        <input type="tel" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Email</label>
                                    <div class="col-lg-8">
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Occupation</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="educational-registration-form">
                        <div class="booking-form-area">
                            <h3 class="title">baggage</h3>
                            <form class="general-information general-information--style">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Cabin baggage  </label>
                                    <div class="col-lg-6">
                                        <span>35*45*30cm</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span>Free</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Checked baggage  </label>
                                    <div class="col-lg-4 mb-30">
                                        <input type="text" class="form-control" placeholder="55kg">
                                    </div>
                                    <div class="col-lg-2 mb-30">
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-lg-2">
                                        <span>$180</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="educational-registration-form">
                        <div class="booking-form-area">
                            <h3 class="title">payment</h3>
                        </div>
                        <div class="row mb-30-none">
                            <div class="col-lg-6 mb-30">
                                <div class="payment-area d-flex flex-wrap">
                                    <div class="payment-thumb">
                                        <img src="assets/images/card-1.png" alt="image">
                                    </div>
                                    <div class="payment-content">
                                        <span>master credit card</span>
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="payment-area d-flex flex-wrap">
                                    <div class="payment-thumb">
                                        <img src="assets/images/card-2.png" alt="image">
                                    </div>
                                    <div class="payment-content">
                                        <span>visa debit card</span>
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="payment-area d-flex flex-wrap">
                                    <div class="payment-thumb">
                                        <img src="assets/images/card-3.png" alt="image">
                                    </div>
                                    <div class="payment-content">
                                        <span>discover card</span>
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="payment-area d-flex flex-wrap">
                                    <div class="payment-thumb">
                                        <img src="assets/images/card-4.png" alt="image">
                                    </div>
                                    <div class="payment-content">
                                        <span>maestro</span>
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="educational-registration-form">
                        <div class="booking-form-area">
                            <input type="checkbox">
                            <span>Please send me special offers, deals and new product emails form JetPak</span>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h3 class="total-cost">total: 86,505.95</h3>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <a href="#" class="cmn-btn">Submit now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8">
                    <div class="sidebar">
                        <div class="widget-box mb-30">
                            <h3 class="caption">Flight Summary</h3>
                            <ul class="flight-category">

                                <div class="flight-search-box">
                                    <div class="flight-search-item d-flex flex-wrap">
                                        <div class="flight-search-thumb">
                                            <img src="assets/images/search-1.png" alt="image">
                                        </div>
                                        <div class="flight-search-title">
                                            <h5 class="title">{{$dictionaries['carriers'][$segments[0]['carrierCode']]}}
                                                <span style="color: red">{{sizeof($segments)}}</span></h5>


                                        </div>
                                    </div>
                                    @foreach($segments as $segment)
                                        @php
                                            $start_date = date('h:i A', strtotime($segment['departure']['at']));
    $end_date = date('h:i A', strtotime($segment['arrival']['at']));
    $diff = date_diff(date_create($start_date),date_create($end_date));
                                        @endphp
                                    <div class="flight-search-body">
                                        <h5 style="font-size: small" class="flight-start">{{$start_date}}</h5>
                                        <h5 style="font-size: small" class="flight-middle">{{ $diff->format('%hh %im')  }}</h5>
                                        <h5 style="font-size: small" class="flight-end">{{$end_date}}</h5>
                                    </div>
                                    <div class="flight-place">
                                    <span style="font-size: small"
                                        class="start-place">{{ $segment['departure']['iataCode']}}</span>
                                        <span style="font-size: small"
                                            class="end-place">{{$segment['arrival']['iataCode']}}</span>
                                    </div>
                                        @endforeach
                                    <h5> Estimated bag fees</h5>
                                    <p>Carry on: <small> No fee </small> </p>
                                    <p>1st checked bag: <small> No fee </small> </p>
                                    <p> 2nd checked bag:	<small> No fee</small> </p>
                                    <p> 3rd+ checked bag:	<small> $88.00 - $240.00</small> </p>



                                    <h5 class="cost">Trip Total: ${{$price['grandTotal']}}</h5>
                                </div>
                            </ul>
                        </div>
                        <div class="widget-box mb-30 " style="background-color: rgb(234, 115, 23);color: white;text-align: center">
                            <h3  class="text-white">Save Up to</h3>
                            <h2 class="text-white">20%</h2>
                            <h4 class="text-white">On your ticket</h4>
                            <p class="text-white">by using unused baggage space to become and Onboard Courier with JetPak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
