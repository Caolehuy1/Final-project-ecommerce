@extends('front.layout.master')
@section('title','login')
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

    <!-- Register section begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        @if (count($errors) >0)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-danger"> {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if (session('status'))
                            <ul>
                                <li class="text-danger"> {{ session('status') }}</li>
                            </ul>
                        @endif
                        <h2>Login</h2>
                        <form action="{{ route('getLogin') }}" method="post">
                            {{ csrf_field() }}
                            <div class="group-input">
                                <label for="username">Username or Email * </label>
                                <input type="email" class="form-control" name="txtEmail" placeholder="Email">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" class="form-control" placeholder="Password" name="txtPassword">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label>
                                        Save Password
                                        <input type="checkbox" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">Forget Password</a>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">Sign In</button>
                        </form>
                        <div class="switch-login">
                            <a href="./register" class="or-login">Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Register section end -->

@endsection
