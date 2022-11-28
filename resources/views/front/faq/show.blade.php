@extends('front.layout.master')
@section('title','faq')
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

    <!-- Faq section begin -->
    <div class="faq-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-accordin">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">
                                        Is there Anything I can get for Free ?
                                    </a>
                                </div>
                                <div class="collapse" id="collapseOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>DLCShopping : Yes Your Account :)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseTwo">
                                        What Can I Do When Shipping Too Long ?
                                    </a>
                                </div>
                                <div class="collapse show" id="collapseTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>DLCShopping : Please be patient we will contact to shipping Company and give
                                            you the solution ♥ (as soon as possible)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">
                                        What if the figure broken when shipping ?
                                    </a>
                                </div>
                                <div class="collapse" id="collapseThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>DLCShopping : We'll recheck the figure upon release as well as upon
                                            delivery - we'll protect your right, don't worry</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq section end -->

@endsection
