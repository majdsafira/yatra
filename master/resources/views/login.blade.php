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
                    @if (Session::has('message'))
                        <div class="alert alert-danger" role="alert">
                            <strong>{{Session('message')}}</strong>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{Session('success')}}</strong>
                        </div>
                    @endif
                    <form method="POST" action="/postLogin" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-title">
                                    <h2>Login</h2>
                                    <a href="signup">Register if you don't have an account.</a>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Username</label>
                                <input type="email" class="form-control" name="email" id="Name1"
                                    placeholder="Enter email" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" id="email1"
                                    placeholder="Enter correct password" required>
                            </div>

                            <div class="col-lg-12">
                                <div class="comment-btn">
                                    <button type="submit" class="btn-blue btn-red" >Login</button>
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
