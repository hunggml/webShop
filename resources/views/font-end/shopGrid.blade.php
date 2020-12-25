@extends('font-end.master.master')
@section('title','SausageShop')
@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="{{route('shopGrid')}}">Shop </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Product Style -->
    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6"
                     style="background-image: url('{{asset('img/imagee.jpeg')}}'); background-attachment: fixed ">
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <!-- Shop Top -->
                            <div class="shop-top">
                                <div class="shop-shorter">
                                    <div class="single-shorter">
                                        <label>Show :</label>
                                        <select>
                                            <option selected="selected">09</option>
                                            <option>15</option>
                                            <option>25</option>
                                            <option>30</option>
                                        </select>
                                    </div>
                                    <div class="single-shorter">
                                        <label>Sort By :</label>
                                        <select>
                                            <option selected="selected">Name</option>
                                            <option>Price</option>
                                            <option>Size</option>
                                        </select>
                                    </div>
                                </div>
                                <ul class="view-mode">
                                    <li class="active"><a href="#"><i class="fa fa-th-large"></i></a></li>
                                    <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                            </div>
                            <!--/ End Shop Top -->
                        </div>
                    </div>
                    <div class="row">

                        @forelse($product as $key => $value)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a data-toggle="modal" data-target="#exampleModal{{$key}}"
                                           title="Quick View"
                                           href="#">
                                            <img style="width: 264px ; height: 270px"
                                                 src='{{asset("$value->image")}}'
                                                 alt="image">
                                            <span class="out-of-stock">{{$value->status}}</span>
                                        </a>
                                        <div class="button-head" style="background: black">
                                            <div class="product-action-2">
                                                <a style="text-align: center" title="Add to cart"
                                                   href="{{ route('cart.addToCart', $value->id) }}"><h3>Add
                                                        to
                                                        cart</h3></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content"
                                         style="background: black ;border-radius: 10px;text-align: center;">
                                        <h3 style="color: white"><a href="#">{{$value->name}}</a></h3>
                                        <div>
                                            <span style="color:white;">
                                                {{$value->note}}
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span
                                                style="color: white">$ {{number_format($value->price,2,",",".")}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->

                            <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span
                                                    class="ti-close"
                                                    aria-hidden="true"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row no-gutters">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <!-- Product Slider -->
                                                    <div class="product-gallery">
                                                        <div class="quickview-slider-active">
                                                            <div class="single-slider">
                                                                <img style="width: 600px ; height: 600px"
                                                                     src='{{asset("$value->image")}}'
                                                                     alt="image">
                                                            </div>
                                                            <div class="single-slider">
                                                                <img style="width: 600px ; height: 600px"
                                                                     src='{{asset("$value->image")}}'
                                                                     alt="image">
                                                            </div>
                                                            <div class="single-slider">
                                                                <img style="width: 600px ; height: 600px"
                                                                     src='{{asset("$value->image")}}'
                                                                     alt="image">
                                                            </div>
                                                            <div class="single-slider">
                                                                <img style="width: 600px ; height: 600px"
                                                                     src='{{asset("$value->image")}}'
                                                                     alt="image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Product slider -->
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="quickview-content">
                                                        <h2> {{$value->name}}</h2>
                                                        <div class="quickview-ratting-review">
                                                            <div class="quickview-stock">
                                                                <span><i
                                                                        class="fa fa-check-circle-o"></i> in stock</span>
                                                            </div>
                                                        </div>
                                                        <h3>Price: ${{number_format($value->price,2,",",".")}}</h3>
                                                        <div class="quickview-peragraph">
                                                            <strong>{{$value->note}}.</strong>
                                                        </div>
                                                        <div class="size">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-12">
                                                                    <h5 class="title">Size: {{$value->size}}</h5>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <h5 class="title">RAM: {{$value->ram}}G</h5>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <h5 class="title">Capacity: {{$value->capacity}}
                                                                        G</h5>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <h5 class="title">SIM: {{$value->sim}}</h5>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <h5 class="title">
                                                                        Screen_size: {{$value->screen_size}}</h5>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <h5 class="title">CPU: {{$value->cpu}}</h5>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <h5 class="title">GPU: {{$value->gpu}}</h5>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <h5 class="title">PIN: {{$value->pin}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="quantity">
                                                            <!-- Input Order -->
                                                            <div class="input-group">
                                                                <div class="button minus">
                                                                    <button type="button"
                                                                            class="btn btn-primary btn-number"
                                                                            disabled="disabled"
                                                                            data-type="minus" data-field="quant[1]">
                                                                        <i class="ti-minus"></i>
                                                                    </button>
                                                                </div>
                                                                <input type="text" name="quant[1]"
                                                                       class="input-number"
                                                                       data-min="1"
                                                                       data-max="1000" value="1">
                                                                <div class="button plus">
                                                                    <button type="button"
                                                                            class="btn btn-primary btn-number"
                                                                            data-type="plus"
                                                                            data-field="quant[1]">
                                                                        <i class="ti-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!--/ End Input Order -->
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="{{ route('cart.addToCart', $value->id) }}"
                                                               class="btn">Add to cart</a>
                                                        </div>
                                                        <div class="default-social">
                                                            <h4 class="share-now">Share:</h4>
                                                            <ul>
                                                                <li><a class="facebook" href="#"><i
                                                                            class="fa fa-facebook"></i></a></li>
                                                                <li><a class="twitter" href="#"><i
                                                                            class="fa fa-twitter"></i></a></li>
                                                                <li><a class="youtube" href="#"><i
                                                                            class="fa fa-pinterest-p"></i></a></li>
                                                                <li><a class="dribbble" href="#"><i
                                                                            class="fa fa-google-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p style="margin-left:15px;margin-top:30px;color: black;font-size: 20px!important;">No
                                Product</p>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
        {{--        <div style="text-align: center;margin-top: 75px" >--}}
        {{--            {{ $product->links() }}--}}
        {{--        </div>--}}
    </section>
    <!--/ End Product Style 1  -->
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
