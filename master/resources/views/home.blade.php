@extends('layout.master')

@section('content')

{{--
@php
$i = 0 ;
@endphp
@foreach ($tours as $in)



<h5 class="font-weight-medium">{{$in->name}}</h5>

@endforeach --}}
<section class="swiper-banner">
    <div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(images/slider/slider7.jpg)">
                    <div class="swiper-content" data-animation="animated fadeInDown">
                        <h2>Book a ticket & Just Leave</h2>
                        <h1>Search your next destination</h1>
                        <a href="/tourgrid" class="btn-blue btn-red">View Our Tour</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(images/slider/slider2.jpg)">
                    <div class="swiper-content" data-animation="animated fadeInRight">
                        <h2>Cost friendly packages on your way</h2>
                        <h1>We offer you better deals</h1>
                        <a href="/tourgrid" class="btn-blue btn-red">View Our Tour</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(images/slider/slider3.jpg)">
                    <div class="swiper-content" data-animation="animated fadeInUp">
                        <h2>exciting schemes just a click away</h2>
                        <h1>Amazing Santorini 7 days tour</h1>
                        <a href="/tourgrid" class="btn-blue btn-red">View Our Tour</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="overlay"></div>
    </div>
</section>

<div class="search-box clearfix">
    <div class="container">
        <div class="search-outer">
            <div class="search-content">
                <form>
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="search-title d-flex align-items-center justify-content-between">
                                <p>Find Your <span>Holiday</span></p>
                                <i class="flaticon-sun-umbrella "></i>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="table_item">
                                <div class="form-group">
                                    <select id="custom-select-1" class="selectpicker form-control">
                                        <option value="0">Destination</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                    </select>
                                    <i class="flaticon-maps-and-flags"></i>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="table_item">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' class="form-control" value="dd-mm-yyyy" />
                                        <i class="flaticon-calendar"></i>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group form-icon">
                                    <div class='input-group date' id='datetimepicker2'>
                                        <input type='text' class="form-control" value="dd-mm-yyyy" />
                                        <i class="flaticon-calendar"></i>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="table_item table-item-slider">
                                <div class="range-slider">
                                    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price"
                                        data-max-name="max_price"
                                        class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        aria-disabled="false">
                                        <span class="min-value">0 $</span>
                                        <span class="max-value">2000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"
                                            style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="search">
                                    <a href="#" class="btn-blue btn-red">SEARCH</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <section class="popular-packages">
    <div class="container">

        <div class="section-title text-center">
            <h2>Popular Packages</h2>
            <div class="section-icon">
                <i class="flaticon-diamond"></i>
            </div>
            <p>Plan your perfect vacation with our travel agency. Choose among hundreds of all-inclusive
                offers!</p>
        </div>

<div class="col-lg-2">
      @foreach ($tours as $item)
    <div class="package-item">
                @php
                $i = 1 ;
                @endphp





                @if ($i++ < 3)

                    <div class="package-image">
                        <img src="{{url('storage/'.$item->image1)}}" alt="Image" height="400" width="400">
<div class="package-price">

    <p><span>${{$item->price}}</span></p>

</div>
</div>
<div class="package-content">
    <h3>{{$item->name}}</h3>
    <p class="package-days"></p>
    <div class="package-info">
        <a href="/tourdetails/{{$item->id}}" class="btn-blue btn-red">View more details</a>
    </div>
</div>

@endif

@endforeach
</div>
</div>

</div>
</section> --}}

<section class="deals">
    <div class="container ">
        <div class="section-title section-title-white text-center">
            <h2>Best Offers Tours</h2>
            <div class="section-icon">
                <i class="flaticon-diamond"></i>
            </div>
            <p>Plan your perfect vacation with our travel agency. Choose among hundreds of all-inclusive
                offers!</p>
        </div>
<div class="deals-outer d-flex justify-content-center">
        @php
        $i = 0 ;
        @endphp

        @foreach ($tours as $item)

        @if ($i++ < 4)

            <div class="col-md-3">
                <div class="deals-item">

                    <div class="deals-item-outer">
                        <div class="deals-image">
                            <img src="{{url('storage/'.$item->image1)}}" alt="Image" height="300" width="600">
                            <span class="deal-price">${{$item->price}}</span>
                        </div>
                        <div class="deal-content">

                            <h3>${{$item->name}}</h3>
                            <a href="/tourdetails/{{$item->id}}" class="btn-blue btn-red">More Details</a>
                        </div>
                    </div>

                    @endif
                </div>
            </div>

    @endforeach
   </div>
    </div>
    <div class="section-overlay"></div>
</section>

<section class="top-destinations">
    <div class="container">
        <div class="section-title text-center">
            <h2>Top Destinations</h2>
            <p>In this section we show the most popular destination on the world , this link will take you to the video
                on each destination</p>
            <div class="section-icon">
                <i class="flaticon-diamond"></i>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="top-destination-item">
                    <img class="img-responsive" src="images/deal1.jpg" alt="Image">
                    <div class="overlay">
                        <h2><a href="https://youtu.be/RTNzD6GcC0s">Bahamas</a></h2>
                        <p>Watch this video to know more about Bahamas</p>
                    </div>
                </div>
                <div class="top-destination-item">
                    <img class="img-responsive" src="images/deal2.jpg" alt="Image">
                    <div class="overlay">
                        <h2><a href="https://youtu.be/zS4AP0Q8L8g">Italy</a></h2>
                        <p>Watch this video to know more about Bahamas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="top-destination-item destination-margin">
                    <img class="img-responsive" src="images/deal5.jpg" alt="Image">
                    <div class="overlay overlay-full">
                        <h2><a href="https://youtu.be/rsv4drcgHys">Egypt</a></h2>
                        <p>Watch this video to know more about Egypt</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="top-destination-item">
                    <img class="img-responsive" src="images/deal3.jpg" alt="Image">
                    <div class="overlay">
                        <h2><a href="https://youtu.be/b9qidXa7gZU">Nepal</a></h2>
                        <p>Watch this video to know more about Nepal</p>
                    </div>
                </div>
                <div class="top-destination-item">
                    <img class="img-responsive" src="images/deal4.jpg" alt="Image">
                    <div class="overlay">
                        <h2><a href="https://youtu.be/vNQR3ixE8AE">Thailand</a></h2>
                        <p>Watch this video to know more about Thailand</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="countdown-section">
    <div class="container">
        <div class="countdown-title">
            <h2>Special Tour in May, Discover <span>Thailand</span> for 50 Customers with <span>Discount 30%</span></h2>
            <p>It’s limited seating! Hurry up</p>
        </div>
        <div class="countdown countdown-container">
            <p id="demo"></p>
        </div>
    </div>
    <div class="testimonial-overlay"></div>
</section>

<section class="trusted-partners">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="partners-title">
                    <h3>Our <span>Partners</span></h3>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <ul class="partners-logo partners-slider">
                    <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                    <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
