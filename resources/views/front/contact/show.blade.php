@extends('front.layout.master')
@section('title','contact')
@section('body')
    <!--Breadcrumb Section Begin  -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i>Home</a>
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End  -->

    <!--Map section begin  -->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1054319459486!2d106.65064241478778!3d10.80323646165239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e639bf01243%3A0x700ebdccb5a04987!2sGreenwich%20Vi%E1%BB%87t%20Nam!5e0!3m2!1sen!2s!4v1661753877598!5m2!1sen!2s"
                    height="610" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!--Map section end  -->

    <!-- Contact section begin -->
    <section class="contact-section spad">
        <section class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Contact us</h4>
                        <div class="contact-widget">
                            <div class="cw-item">
                                <div class="ci-icon">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div class="ci-text">
                                    <span>Address:</span>
                                    <p>20 Cong Hoa - Ho Chi Minh City</p>
                                </div>
                            </div>
                            <div class="cw-item">
                                <div class="ci-icon">
                                    <i class="ti-mobile"></i>
                                </div>
                                <div class="ci-text">
                                    <span>Phone :</span>
                                    <p>+84 933.387.027</p>
                                </div>
                            </div>
                            <div class="cw-item">
                                <div class="ci-icon">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="ci-text">
                                    <span>Email:</span>
                                    <p>NguyenTkGCS18605@fpt.edu.vn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-lg-6 offset-lg-1">--}}
{{--                    <div class="contact-form">--}}
{{--                        <div class="leave-comment">--}}
{{--                            <h4>Leave Comment</h4>--}}
{{--                            <p>We'll Answer as soon as possible</p>--}}
{{--                            <form action="#" class="comment-form">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <input type="text" placeholder="Your name">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <input type="text" placeholder="Your email">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <textarea placeholder="Your Message"></textarea>--}}
{{--                                        <button type="submit" class="site-btn">Send Message</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </section>
    </section>
    <!-- Contact section end -->




@endsection
