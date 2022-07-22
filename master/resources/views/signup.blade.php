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
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6">
                <div class="login-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-title">
                                    <h2>Register</h2>
                                    <p>Enter your details to be a member.</p>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Name:</label>
                                <input type="text" class="form-control" id="Name" placeholder="Enter full name">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="abc@xyz.com">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Phone Number:</label>
                                <input type="text" class="form-control" id="date1" placeholder="Select Date">
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Select Password :</label>
                                <input type="password" class="form-control" id="date" placeholder="Enter Password">
                            </div>
                            <div class="form-group col-xs-6 col-left-padding">
                                <label>Confirm Password :</label>
                                <input type="password" class="form-control" id="phnumber"
                                    placeholder="Re-enter Password">
                            </div>
                            <div class="col-lg-12">
                                <div class="checkbox-outer">
                                    <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms
                                        and conditions.</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment-btn">
                                    <a href="#" class="btn-blue btn-red">Register Now</a>
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
