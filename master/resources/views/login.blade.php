@extends('layout.master')

@section('content')

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Login/Register Page</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login/Register Page</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>

<section class="login">
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-title">
                                    <h2>Login</h2>
                                    <p>Register if you don't have an account.</p>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Username</label>
                                <input type="email" class="form-control" id="Name1"
                                    placeholder="Enter username or email id">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" class="form-control" id="email1"
                                    placeholder="Enter correct password">
                            </div>
                            <div class="col-lg-12">
                                <div class="checkbox-outer">
                                    <input type="checkbox" name="vehicle2" value="Car"> Remember Me?
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment-btn">
                                    <a href="#" class="btn-blue btn-red">Login</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="login-accounts">
                                    <a href="forgot-password.html" class="forgotpw">Forgot Password?</a>
                                    <h3>Login using</h3>
                                    <div class="login-accounts-btn">
                                        <a class="btn-blue" href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                                            Facebook</a>
                                        <a class="btn-blue btn-google" href="#"><i class="fa fa-google"
                                                aria-hidden="true"></i> Google</a>
                                        <a class="btn-blue btn-twit" href="#"><i class="fa fa-twitter"
                                                aria-hidden="true"></i> Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
