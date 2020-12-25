@extends('font-end.master.master')
@section('title','Cart')
@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="{{route('cart.showCart')}}">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shopping Cart -->
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Shopping Summery -->
                    <table class="table shopping-summery">
                        <thead>
                        <tr class="main-hading">
                            <th>PRODUCT</th>
                            <th>NAME</th>
                            <th class="text-center">UNIT PRICE</th>
                            <th class="text-center">QUANTITY</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>

                        </thead>
                        <tbody>
                        @if(Session::has('cart') && $cart->totalQty > 0)
                            @foreach($cart->items as $product)
                                <tr>
                                    <td class="image" data-title="No"><img src="{{asset($product['item']->image)}}"
                                                                           alt="#">
                                    </td>
                                    <td class="product-des" data-title="Description">
                                        <p class="product-name"><a href="#">{{$product['item']->name}}</a></p>
                                        <p class="product-des"></p>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <span>${{$product['item']->price}} </span></td>
                                    <td data-th="Quantity">
                                        <input type="number" data-id="{{ $product['item']->id }}"
                                               class="form-control text-center update-product-cart" min="0" name="qty"
                                               value="{{ $product['qty'] }}">
                                    </td>
                                    <td data-th="Subtotal" id="product-subtotal-{{$product['item']->id}}"
                                        class="text-center">{{ '$' . $product['price']  }}
                                    </td>
                                    <td class="actions" data-th="">
                                        <a style="color: white" class="btn btn-danger btn-sm"
                                           href="{{ route('cart.removeProductIntoCart', $product['item']->id) }}"><i
                                                class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td><a href="{{route('shopGrid')}}" style="color: white;" class="btn btn-warning">Continue
                                    Shopping</a>
                            </td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td id="total-price-cart" class="hidden-xs text-center"><strong>Total Price:
                                    ${{ $cart->totalPrice }}</strong></td>
                            <td><a href="{{route('cart.showCheckOut')}}" style="color: white;"
                                   class="btn btn-success btn-block">Checkout</a></td>
                        </tr>
                        </tfoot>
                        @else
                            <tr>
                                <td colspan="5" class="text-center"><p>{{ "You have not bought any products" }}</p></td>
                            </tr>
                        @endif
                    </table>
                    <!--/ End Shopping Summery -->
                </div>
            </div>

        </div>
    </div>
    <!--/ End Shopping Cart -->

    <!-- Start Shop Services Area  -->
    <section class="shop-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
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
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->

    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">

    </section>
    <!-- End Shop Newsletter -->

@endsection
