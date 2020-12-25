<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="ti-headphone-alt"></i> +84 0989634265</li>
                            <li><i class="ti-email"></i><a href="mailto:dvhungg123@gmail.com">dvhungg123@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            <li><i class="ti-location-pin"></i><a
                                    href="https://www.google.com/maps/place/CodeGym/@21.0357542,105.7660233,17z/data=!3m1!4b1!4m5!3m4!1s0x313454b9444c676b:0xe713200541b7456d!8m2!3d21.0357492!4d105.768212?hl=vi-VN"
                                    target="_blank"> Store location</a></li>
                        </ul>
                        <ul class="list-main">
                            <li>
                                @if(session()->has('login'))
                                    <p style="color: black">Hello : {{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-link ">Logout</button>
                                    </form>
                                @else
                                    <div class="sinlge-bar">
                                        <a href="{{route('login.show')}}" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Login</a>
                                    </div>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('font-end/images/logo.png')}}" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <form style="width: 500px;" action="{{route('search')}}" method="post">
                                @csrf
                                <input style="width: 500px;" name="name" placeholder="Search Products Here....." type="search">
                                <button type="submit" class="btnn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">

                        <div class="sinlge-bar shopping">
                            <a href="{{route('cart.showCart')}}" class="single-icon"><i class="ti-bag"></i> <span
                                    class="total-count">{{\Illuminate\Support\Facades\Session::get('cart')->totalQty ?? 0}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li><a href="{{route('home')}}">Home</a></li>
                                            <li><a href="{{route('iphone')}}">iPhone</a></li>
                                            <li><a href="{{route('iPad')}}">iPad</a></li>
                                            <li><a href="{{route('MacBook')}}">MacBook</a></li>
                                            <li><a href="{{route('Apple-Watch')}}">Apple Watch</a></li>
                                            <li><a href="{{route('shopGrid')}}">Shop</a>
                                            </li>
                                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<style>

</style>

