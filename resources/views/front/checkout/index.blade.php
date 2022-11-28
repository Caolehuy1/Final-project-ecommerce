@extends('front.layout.master')

@section('title', 'Check Out')

@section('body')

<!--Breadcrumb Section Begin  -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home">Home</i></a>
                    <a href="shop.html">Shop</a>
                    <span>Check out</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb Section End  -->

<!--Shopping cart section begin  -->
<div class="checkout-section spad">
    <div class="container">
        <form action="" method="post" class="checkout-form">
            @csrf
            <div class="row">

                @if(Cart::count() >0 )
                <div class="col-lg-6">

                    <h4>Biling Details</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fir">First Name<span>*</span></label>
                            <input type="text" id="fir" name="first_name">
                        </div>
                        <div class="col-lg-6">
                            <label for="last">Last Name<span>*</span></label>
                            <input type="text" id="last"name="last_name">
                        </div>
                        <div class="col-lg-12">
                            <label for="cun-name">Company Name</label>
                            <input type="text" id="cun-name"name="company_name">
                        </div>
                        <div class="col-lg-12">
                            <label for="cun">Country<span>*</span></label>
                            <input type="text" id="cun"name="country">
                        </div>
                        <div class="col-lg-12">
                            <label for="street">Street Address<span>*</span></label>
                            <input type="text" id="street"name="street_address" class="street-first">

                        </div>
                        <div class="col-lg-12">
                            <label for="zip">Postcode/ Zip (optional)<span>*</span></label>
                            <input type="text" id="zip"name="postcode_zip">
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Town/City<span>*</span></label>
                            <input type="text" id="town"name="town_city">
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email Address<span>*</span></label>
                            <input type="text" id="email"name="email">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Phone Number<span>*</span></label>
                            <input type="text" id="phone"name="phone">
                        </div>
                        <div class="col-lg-12">
                            <div class="create-item">
                                <label for="acc-create">
                                    Create Account Now
                                    <input type="checkbox" id="acc-create">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-content">
                        <input type="text" placeholder="Enter Your Coupon code Here">
                    </div>
                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Product <span>Total</span></li>

                                @foreach($carts as $cart)
                                <li class="fw-normal">{{$cart->name}} x{{$cart->qty}}
                                    <span>${{$cart->price * $cart->qty}}</span>
                                </li>
                                @endforeach

                                <li class="fw-normal">Subtotal <span>${{$subtotal}}</span></li>
                                <li class="total-price">Total<span>${{$total}}</span></li>
                            </ul>
                            <div class="payment-check">
                                <div class="pc-item">
                                    <label for="pc-check">
                                       Pay later
                                        <input type="radio" id="pc-check" name="payment_type" value="pay_later" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="pc-item">
                                    <label for="pc-paypal">
                                        Online payment
                                        <input type="radio" id="pc-paypal" name="payment_type" value="online_payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="col-lg-12">

                        <div style="font-size: 40px" >  You cart is empty. </div>

                    </div>
                    <h4></h4>
                @endif
            </div>
    </form>
</div>
</div>
<!-- Shopping cart section end -->

@endsection

