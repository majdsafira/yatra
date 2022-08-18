@extends('layout.master')

@section('content')

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>{{$tour->name}}</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Destinations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$tour->name}}</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay">

    </div>
</section>
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    <strong>{{Session::get('success')}}</strong>
</div>
@endif
<section class="main-content detail">
    <div class="container">
        <div class="row">
            <div id="content" class="col-lg-8">
                <div class="detail-content content-wrapper">
                    <div class="detail-info">
                        <div class="detail-info-content clearfix">
                            <h2>{{$tour->name}}</h2>
                            <p class="detail-info-price"><span class="bold">${{$tour->price}}</span></p>

                        </div>
                    </div>
                    <div class="gallery detail-box">

                        <div id="in_th_030"
                            class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint"
                            data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">

                            <ol class="carousel-indicators">

                                <li data-target="#in_th_030" data-slide-to="0" class="active">

                                    <img src="{{url('storage/'.$tour->image1)}}" alt="Image" height="90">

                                </li>

                                <li data-target="#in_th_030" data-slide-to="1">

                                    <img src="{{url('storage/'.$tour->image2)}}" alt="Image" height="90">
                                </li>

                                <li data-target="#in_th_030" data-slide-to="2">

                                    <img src="{{url('storage/'.$tour->image3)}}" alt="Image" height="90">
                                </li>
                                <li data-target="#in_th_030" data-slide-to="3">

                                    <img src="{{url('storage/'.$tour->image4)}}" alt="Image" height="90">
                                </li>
                            </ol>

                            <div class="carousel-inner" role="listbox">

                                <div class="item active">

                                    <img src="{{url('storage/'.$tour->image1)}}" alt="Image" >
                                </div>

                                <div class="item">

                                    <img src="{{url('storage/'.$tour->image2)}}" alt="Image" >
                                </div>

                                <div class="item">

                                    <img src="{{url('storage/'.$tour->image3)}}" alt="Image" >
                                </div>

                                <div class="item">

                                    <img src="{{url('storage/'.$tour->image4)}}" alt="Image" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description detail-box">
                        <div class="detail-title">
                            <h3>Description</h3>
                        </div>
                        <div class="description-content">
                            <p>{{$tour->description}}</p>
                            <table>
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="title">Departure</td>
                                        <td> {{$tour->departure}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Departure Time</td>
                                        <td> Please arrive by {{$tour->departure_time}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Maximum travellers</td>
                                        <td> {{$tour->maximum_travellers}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Languages</td>
                                        <td> {{$tour->languages}}</td>
                                    </tr>

                                    <tr>
                                        <td class="title">Popular Places</td>
                                        <td> {{$tour->popular_places}}</td>

                                     </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="location-map detail-box">
                        <div class="detail-title">
                            <h3>Location Map</h3>
                        </div>
                        <div class="map-frame">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28185.510535377554!2d86.90746548742861!3d27.98811904127681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e854a215bd9ebd%3A0x576dcf806abbab2!2z4KS44KSX4KSw4KSu4KS-4KSl4KS-!5e0!3m2!1sne!2snp!4v1544516755007"
                                style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>


                </div>
            </div>
            <div id="sidebar-sticky" class="col-lg-4">
                <aside class="detail-sidebar sidebar-wrapper">
                    <div class="sidebar-item sidebar-item-dark">
                        <div class="detail-title">
                            <h3>Book this tour</h3>
                        </div>
                        <form method="POST" action="/book-now">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" id="Name1" placeholder="Name" value="{{Session::get('user')->name}}">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="email" class="form-control" id="email1" placeholder="Email" value="{{Session::get('user')->email}}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="hidden" class="form-control" name='user_id' value={{Session::get('user')->id}} id="email1" placeholder="Email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="hidden" class="form-control" name='tour_id' value={{$tour->id}} id="email1" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <div class="comment-btn">
                                        <button type="submit" class="btn-blue btn-red">Book Now</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="sidebar-item sidebar-helpline">
                        <div class="sidebar-helpline-content">
                            <h3>Any Questions?</h3>
                            <p>if you have any question please contact us.</p>
                            <p><i class="flaticon-phone-call"></i> 0778091928 </p>

                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<div id="back-to-top">
    <a href="#"></a>
</div>

@endsection
