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
    <title>Fashion-Products</title>
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
                <li><a href="{{route('welcome')}}">popular</a></li>
                <li class="active"><a href="{{route('products')}}">Product</a></li>
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
    <!-- Header Area End -->

    <!-- Product Details Area Start -->
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">
            <!-- <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-50">
                            <li class="breadcrumb-item">
                                <a href="{{route('welcome')}}">popular</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">FASHION</a></li>
                            <li class="breadcrumb-item"><a href="#">Woman</a></li>
                            <li aria-current="page" class="breadcrumb-item active">
                                SHIRT
                            </li>
                        </ol>
                    </nav>
                </div>
            </div> -->

            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="single_product_thumb">
                        <div
                            class="carousel slide"
                            data-ride="carousel"
                            id="product_details_slider"
                        >
                            <!-- <ol class="carousel-indicators">
                                <li
                                    class="active"
                                    data-slide-to="0"
                                    data-target="#product_details_slider"
                                    style="background-image: url({{asset($products->img)}})"
                                ></li>
                            </ol> -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="gallery_img" href="{{asset($products->img)}}">
                                        <img
                                            alt="First slide"
                                            class="d-block w-100"
                                            src="{{asset($products->img)}}"
                                        />
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">${{$products->price}}</p>
                            <a>
                                <h6>{{$products->name}}</h6>
                            </a>
                            <!-- Ratings & Review -->
                            <div
                                class="ratings-review mb-15 d-flex align-items-center justify-content-between"
                            >
                                <div class="ratings">
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                </div>
                                <!-- <div class="review">
                                  <a href="#">Write A Review</a>
                                </div> -->
                            </div>
                            <!-- Avaiable -->
                            <p class="avaibility">
                                <i class="fa fa-circle"></i> In Stock
                            </p>
                        </div>

                        <div class="short_overview my-5">
                            <p>
                                ร้านเสื้อผ้ามือสอง by แม่เบน shop เป็นร้านค้าที่มีความหลากหลายของสินค้า ไม่ว่าจะเป็น เสื้อผ้า กางเกง รองเท้า และ สินค้ามือสองคุณภาพดีอีกมากมาย
                                ในราคาที่จับต้องได้ สามารถ มิกซ์แอนด์แมทช์ กับการแต่งตัวที่หลากหลายบ่งบอกความเป็นตัวเองได้อย่างมั่นใจ จากสิกค้ามือสอง by แม่เบน shop

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Area End -->
</div>
<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="{{route('welcome')}}"
                        ><img alt="" src="img/core-img/logo2.png"
                            /></a>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template is made with
                        <i aria-hidden="true" class="fa fa-heart-o"></i> by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a> &
                        Re-distributed by
                        <a href="https://themewagon.com/" target="_blank">Themewagon</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('welcome')}}">popular</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                      <a class="nav-link" href="#">Shop</a>
                                    </li> -->
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('products')}}"
                                        >Product</a
                                        >
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact')}}">CONTACT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('login')}}">lOGIN</a>
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
<!-- ##### Footer Area End ##### -->

<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>
</body>
</html>

