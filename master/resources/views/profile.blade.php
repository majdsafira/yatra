@extends('layout.master')

@section('content')



<section class="breadcrumb-outer text-center">
    <div class="container">
    <div class="breadcrumb-content">
    <h2>Contact Us Page</h2>
    <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>

    <li class="breadcrumb-item active" aria-current="page">Booking</li>
    </ul>
    </nav>
    </div>
    </div>
    <div class="section-overlay"></div>
</section>


<div class="container w-60 p-3">
    <div class="container" >
        <div class="row justify-content-center">

            <div class="col">
                <div class="dashboard-list-box">
                    <h4 class="gray">Profile Details</h4>
                    <div class="dashboard-list-box-static">

                        <div class="edit-profile-photo">
                            <img src="images/user-avatar.jpg" alt="">
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" class="upload" />
                                </div>
                            </div>
                        </div>

                        <div class="my-profile">
                            <label>Your Name *</label>
                            <input value="Tom Perrin" type="text">
                            <label>Phone Number *</label>
                            <input value="(123) 123-456" type="text">
                            <label>Email Address *</label>
                            <input value="tom@example.com" type="text">
                        </div>
                        <button class="button">Save Changes</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
