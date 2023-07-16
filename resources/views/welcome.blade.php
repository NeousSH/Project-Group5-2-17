<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta content="" name="description"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
        name="viewport"
    />
    <title>Fashion-Home</title>
    <link href="{{asset('img/core-img/favicon.ico')}}" rel="icon"/>
    <link href="{{asset('css/core-style.css')}}" rel="stylesheet"/>
    <link href="{{asset('style.css')}}" rel="stylesheet"/>
</head>

<body>
<div class="main-content-wrapper d-flex clearfix">
    <div class="mobile-nav">
        <div class="amado-navbar-brand">
            <a href="{{route('welcome')}}"
            ><img alt="" src="{{asset('img/core-img/Fashion shop.png')}}"
                /></a>
        </div>
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <header class="header-area clearfix">
        <div class="nav-close">
            <i aria-hidden="true" class="fa fa-close"></i>
        </div>
        <div class="logo">
            <a href="{{route('welcome')}}"
            ><img alt="" src="{{asset('img/core-img/Fashion shop.png')}}"
                /></a>
        </div>
        <nav class="amado-nav">
            <ul>
                <li class="active"><a href="{{route('welcome')}}">popular</a></li>
                <li><a href="{{route('products')}}">Product</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
            </ul>
        </nav>
        <div class="amado-btn-group mt-30 mb-100">&nbsp&nbsp</div>
        <div class="cart-fav-search mb-100"></div>
        <hr/>
        <div class="social-info d-flex justify-content-between">
            <a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a>
            <a href="https://www.instagram.com/tanafatto/"><i aria-hidden="true" class="fa fa-instagram"></i></a>
            <a href="https://www.facebook.com/thanapat.ponraksa"><i aria-hidden="true" class="fa fa-facebook"></i></a>
            <a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>
        </div>
    </header>
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
            @foreach($products as $product)
                <div class="single-products-catagory clearfix">
                    <a href="{{route('product_detail',$product->id)}}">
                        <img alt="$product->name" src="{{$product->img}}"/>
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From ${{$product->price}}</p>
                            <h4>{{$product->name}}</h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Product Catagories Area End -->
</div>
<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <div class="footer-logo mr-50">
                        <a href="{{route('welcome')}}"
                        ><img alt="" src="{{asset('img/core-img/logo2.png')}}"
                            /></a>
                    </div>
                    <p class="copywrite">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template is made with
                        <i aria-hidden="true" class="fa fa-heart-o"></i> by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a> &
                        Re-distributed by
                        <a href="https://themewagon.com/" target="_blank">Themewagon</a>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button
                                aria-controls="footerNavContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                                class="navbar-toggler"
                                data-target="#footerNavContent"
                                data-toggle="collapse"
                                type="button"
                            >
                                <i class="fa fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('welcome')}}">popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('products')}}"
                                        >Product</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('login')}}">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/active.js')}}"></script>
</body>
</html>

