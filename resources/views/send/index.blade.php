@extends('layouts.app')

@section('content')



    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="inner-banner-content">
                        <h2 class="title">Send with JetPak</h2>
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
                            <li class="breadcrumb-item active" aria-current="page">Send with JetPak</li>
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
                            <h3 class="title">Send Request</h3>
                            <form class="general-information">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Product Type</label>
                                    <div class="col-lg-8">
                                        <select class="select-bar">
                                            <option data-display="- Select Product Type -">- Select Product Type -</option>
                                            <option value="1">Mobile Phone</option>
                                            <option value="2">Laptop</option>
                                            <option value="2">Other Electronic</option>
                                            <option value="2">Clothing</option>
                                            <option value="2">Document</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Product Name</label>
                                    <div class="col-lg-8">
                                        <input name="adress" id="adress" placeholder="Product Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Product Description</label>
                                    <div class="col-lg-8">
                                        <textarea name="adress"  placeholder="Product Description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Estimated Weight</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="Estimated Weight">
                                    </div>
                                </div>
                                <div class="row mb-30-none">
                                    <div class="col-lg-6 mb-30">
                                        <div class="payment-area d-flex flex-wrap">
                                            <div class="payment-thumb">
                                                <i style="font-size: x-large" class="fa fa-shopping-cart"></i>
                                            </div>
                                            <div class="payment-content">
                                                <span>Retail Shop</span>
                                                <input checked type="checkbox">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <div class="payment-area d-flex flex-wrap">
                                            <div class="payment-thumb">
                                                <i style="font-size: x-large" class="fa fa-home"></i>
                                            </div>
                                            <div class="payment-content">
                                                <span>Pre-Owned Package</span>
                                                <input type="checkbox">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Product Url</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="Product Url">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="educational-registration-form">
                        <div class="booking-form-area">

                            <div class="row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <p>Please ship your package to JetPak address below or use address during checkout for packages from retails shop</p>
                                    <h5 class="total-cost">7354 Division St.
                                        New York, NY 10025</h5>
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
                        <div style="text-align: center" class="widget-box mb-30">
                            <p class="caption">Earn JetPak bonus by inviting other</p>
                            <button class="cmn-btn">Invite</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
