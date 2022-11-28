@extends('front.layout.master')

@section('title', 'Result')

@section('body')

    <!--Breadcrumb Section Begin  -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./index"><i class="fa fa-home">Home</i></a>
                        <a href="./checkout">Check Out</a>
                        <span>Result</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End  -->

    <!-- section begin  -->
    <div class="checkout-section spad">
        <div class="container">
            <div class="col-lg-12">
                <div style="font-size: 40px" >  {{$notification}} </div>
                <h4>
                </h4>
                <a href="./" class="primary-btn mt-5"> Continue shopping</a>

            </div>
        </div>
    </div>
    <!--  section end -->

@endsection

