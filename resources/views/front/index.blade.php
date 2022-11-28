@extends('front.layout.master')

@section('title', 'home')

@section('body')
    <!-- -->
    <!-- Hero section begin -->
    <section class="hero-section" xmlns="http://www.w3.org/1999/html">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/1-2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Action Figures</span>
                            <h1>Black friday</h1>
                            <p> Sell Off 50%</p>
                            <a href="./shop" class="primary-btn">Shop Now </a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2> Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/3-2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Scale Figures</span>
                            <h1>Black friday</h1>
                            <p> Sell Off 50%</p>
                            <a href="./shop" class="primary-btn">Shop Now </a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- Banner section begin -->
    <div class="banner-secton spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="single-banner">
                        <img src="front/img/miku3.jpg" alt="" height="636px">
                        <div class="inner-text">
                            <h4>Anime Figures</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-banner">
                        <img src="front/img/her.jpg" alt="" height="636px">
                        <div class="inner-text">
                            <h4>Scale Figures</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-banner">
                        <img src="front/img/god1.jpg" alt="" height="636px">
                        <div class="inner-text">
                            <h4>kaiju Figures</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-banner">
                        <img src="front/img/gun1.jpg" alt="" height="636px">
                        <div class="inner-text">
                            <h4>Gundam Figures</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 text-center">
        <h4 style="color:black;position:absolute;right:330px">Figures From The One Piece Collection</h4>
    </div>

    <!-- Banner section end -->

    <!-- Anime figures (banner) begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/zoro3.jpg">
                        <h2>Onepiece Figure</h2>
                        <a href="shop.html">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="women">All</li>
{{--                            <li class="item " data-tag=".Banpresto" data-category="women">Banpresto</li>--}}
{{--                            <li class="item " data-tag=".Luffy" data-category="women">Luffy</li>--}}
{{--                            <li class="item " data-tag=".Sanji" data-category="women">Sanji</li>--}}
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        @foreach($womenProducts as $womenProduct)
                            @include('front.component.product-item',['product'=> $womenProduct])
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime figures  (banner)end-->

    <!-- Deal of the week begin-->
    <section class="deal-of-week set-bg spad" data-setbg="front/img/2-2.png">
        <div class="container">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2 style="color: #ffffff">Deal of the week</h2>
                    <div class="product-price">
                        $450
                        <span>For 2 Goku</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="./shop" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!--Deal of the weak   end-->

    <!--Naruto banner section begin  -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 style="color:black;position:absolute;right:287px">Figures From Naruto Collection</h4>
                </div>
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/na1.jpg">
                        <h2>Naruto Figure</h2>
                        <a href="shop.html">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active"data-tag="*" data-category="men">All</li>
{{--                            <li class="item " data-tag=".Madara" data-category="men">Madara</li>--}}
{{--                            <li class="item " data-tag=".Shikamaru" data-category="men">Shikamaru</li>--}}
{{--                            <li class="item " data-tag=".Sasuke" data-category="men">Sasuke</li>--}}
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach($menProducts as $menProduct)
                            @include('front.component.product-item',['product'=> $menProduct])
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Naruto banner section end  -->

    <!-- Instagram section begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="front/img/gi.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">DLCShop_collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/gun.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">DLCShop_collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/aot.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">DLCShop_collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/lubu.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">DLCShop_collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/thor.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">DLCShop_collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/hades.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">DLCShop_collection</a></h5>
            </div>
        </div>

    </div>
    <!-- Instagram section end -->

    <!-- Latest Blog Section begin -->
{{--    <section class="latest-blog spad">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <h2>From The Blog</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                @foreach($blogs as $blog)--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-latest-blog">--}}
{{--                        <img src="front/img/blog/{{$blog->image}}" alt="">--}}
{{--                        <div class="latest-text">--}}
{{--                            <div class="tag-list">--}}
{{--                                <div class="tag-item">--}}
{{--                                    <i class="fa fa-calendar-o"></i>--}}
{{--                                    {{date('M d, Y',strtotime($blog->created_at)) }}--}}
{{--                                </div>--}}
{{--                                <div class="tag-item">--}}
{{--                                    <i class="fa fa-comment-o"></i>--}}
{{--                                    {{count($blog->blogComments)}}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="blog2.html">--}}
{{--                                <h4>{{$blog->title}}</h4>--}}
{{--                            </a>--}}
{{--                            <p>{{$blog->subtitle}}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                @endforeach--}}
{{--            </div>--}}
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 500$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Deliver on time</h6>
                                <p>Promise On time</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Section End -->

@endsection
