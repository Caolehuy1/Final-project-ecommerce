<!DOCTYPE html>
<html lang="zxx">

<head>

    <base href="{{ asset('/') }}">

    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Shop eCommerce</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->


    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloader -->
<div id='Preloader'>
    <div class="loader"></div>

</div>
<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    NguyenTkGCS18605@fpt.edu.vn
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                    +84 933.387.027
                </div>
            </div>
            <div class="ht-right">
                <a href="./login" class="login-panel"> <i class="fa fa-user"></i>Login</a>
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='yt' data-image="front/img/flag-1.jpg" data-imagecss="falg yt" data-title="English">
                            English</option>
                        <option value='yu' data-image="front/img/flag-2.jpg" data-imagecss="falg yu"
                                data-title="Bangladesh">
                            German</option>

                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 ">
                    <div class="logo">
                        <a href="/">
                            <img src="front/img/shopicon.png" height="50px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7  ">
                    <form action="shop">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All categories</button>
                        <div class="input-group">
                            <input name="search" type="text" value="{{ request('search') }}" placeholder="Search Something Here">
                            <button type="submit"><i class="ti-search"></i> </button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 text-right">
                    <ul class="nav-right">
                        <li  class="cart-icon">
                            <a href="./cart">
                                <i class="icon_bag_alt"></i>
                                <span>{{ Cart::count() }}</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                        @foreach(Cart::content() as $cart)
                                        <tr>
                                            <td class="si-pic"><img style="height: 70px" src="front/img/products/{{  $cart->options->images[0]->path}}" height="50px"></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>${{number_format($cart->price)}} x {{$cart->qty}}</p>
                                                    <h6>{{$cart->name}}</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i onclick="window.location='./cart/delete/{{ $cart->rowId }}'" class="ti-close"></i>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>${{Cart::total()}}</h5>
                                </div>
                                <div class="select-button">
                                    <a href="./cart" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="./checkout" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li  class="cart-price">${{Cart::total()}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"> </i>
                    <span>ALL Department</span>
                    <ul class="depart-hover">
                        <li class="active"><a href="#">Action Figures</a></li>
                        <li><a href="#">Non-action figures</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="{{(request()->segment(1)=='') ? 'active' : '' }}"><a href="./">HOME</a></li>
                    <li class="{{(request()->segment(1)=='shop') ? 'active' : '' }}"><a href="./shop">SHOP</a></li>
                    <li class="{{(request()->segment(1)=='blog') ? 'active' : '' }}"><a href="./blog">Blog</a></li>
                    <li class="{{(request()->segment(1)=='contact') ? 'active' : '' }}"><a href="./contact">Contact</a></li>
                    <li><a href="">page</a>
                        <ul class="dropdown">
                            <li class="{{(request()->segment(1)=='page') ? 'active' : '' }}"><a href="./page">Blog-details</a></li></li>
                            <li class="{{(request()->segment(1)=='faq') ? 'active' : '' }}"><a href="./faq">Faq</a></li></li>
                            <li class="{{(request()->segment(1)=='register') ? 'active' : '' }}"><a href="./register">Register</a></li></li>
                            <li class="{{(request()->segment(1)=='login') ? 'active' : '' }}"><a href="./login">Login</a></li>

                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"> </div>
        </div>
    </div>
</header>
<!-- Header Section End -->



{{--body here--}}
@yield('body')



<!-- Partner Logo section begin -->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-1.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-2.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-3.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-4.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-5.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-7.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner Logo secion end  -->



<!-- Footer section begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="front/img/shopicon.png" height="50" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>20 Cong Hoa - Ho Chi Minh</li>
                        <li>Phone: +84 93.33.87.027</li>
                        <li>Email: NguyenTkGCS18605@fpt.edu.vn</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Check Out</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Serivius</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Shopping Cart</a></li>
                        <li><a href="">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Join Our Newsletter Now</h5>
                    <p>Get E-mail update about our latest shop and special offers.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                    </div>
                    <div class="payment-pic">
                        <img src="front/img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer section end -->
<!-- Js Plugins -->
<script src="front/js/jquery-3.3.1.min.js"></script>
<script src="front/js/bootstrap.min.js"></script>
<script src="front/js/jquery-ui.min.js"></script>
<script src="front/js/jquery.countdown.min.js"></script>
<script src="front/js/jquery.nice-select.min.js"></script>
<script src="front/js/jquery.zoom.min.js"></script>
<script src="front/js/jquery.dd.min.js"></script>
<script src="front/js/jquery.slicknav.js"></script>
<script src="front/js/owl.carousel.min.js"></script>
<script src="front/js/owlcarousel2-filter.min.js"></script>

<script src="front/js/main.js"></script>
</body>

</html>

