@extends('font-end.master.master')
@section('title','SausageShop')
@section('content')
    <!-- Slider Area -->
    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="single-slider" style="background-image: url('{{asset('img/back.png')}}') ; ">
            <section class="midium-banner">
                <div class="container">
                    <div class="row">
                        <!-- Single Banner  -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="single-banner">
                                <div class="content">
                                    <p>New Smart Phone</p>
                                    <a href="{{route('shopGrid')}}" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- /End Single Banner  -->
                    </div>
                </div>
            </section>

        </div>
        <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->

    <!-- Start Small Banner  -->
    <section class="small-banner section">
        <div class="container-fluid">
            <div class="row">
                <!-- Single Banner  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="{{asset('img/apple-watch.jpg')}}" alt="#">
                        <div class="content">
                            <h3 style="color: orange">Apple Watch <br> collection</h3>
                            <a href="{{route('Apple-Watch')}}">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
                <!-- Single Banner  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="{{asset('img/macbook.jpg')}}" style="width: 600px" height="370px" alt="#">
                        <div class="content">
                            <h3 style="color: white">MacBook Pro <br> 2020</h3>
                            <a href="{{route('MacBook')}}">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
                <!-- Single Banner  -->
                <div class="col-lg-4 col-12">
                    <div class="single-banner tab-height">
                        <img src="{{asset('img/iphone.jpg')}}" alt="#">
                        <div class="content">
                            <h3 style="color: orange">Smart Phone</h3> <br>
                            <a href="{{route('iphone')}}">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
            </div>
        </div>
    </section>
    <!-- End Small Banner -->


    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free ship</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Secure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Price</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->

@endsection


