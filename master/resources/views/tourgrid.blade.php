@extends('layout.master')

@section('content')

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Destination Grid View</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Destinations</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>

<section class="destinations destination-padding">
    <div class="container">
        <div class="row mix asia">
            <div class="col-lg-4 col-md-6">
                <div class="destination-item">
                    <div class="destination-image">
                        <img src="images/destination1.jpg" alt="Image">
                        <div class="destination-overlay"></div>
                        <div class="destination-btn">
                            <a href="#" class="btn-blue btn-red">Book Now</a>
                        </div>
                    </div>
                    <div class="destination-content">
                        <h3><a href="tour-detail.html">Bahamas Carribean Cruises</a></h3>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-item">
                    <div class="destination-image">
                        <img src="images/destination2.jpg" alt="Image">
                        <div class="destination-overlay"></div>
                        <div class="destination-btn">
                            <a href="#" class="btn-blue btn-red">Book Now</a>
                        </div>
                    </div>
                    <div class="destination-content">
                        <h3><a href="tour-detail.html">Belgian Beer Tour</a></h3>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-item">
                    <div class="destination-image">
                        <img src="images/destination3.jpg" alt="Image">
                        <div class="destination-overlay"></div>
                        <div class="destination-btn">
                            <a href="#" class="btn-blue btn-red">Book Now</a>
                        </div>
                    </div>
                    <div class="destination-content">
                        <h3><a href="tour-detail.html">Oktoberfest - 5 Days Camping</a></h3>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-item">
                    <div class="destination-image">
                        <img src="images/destination4.jpg" alt="Image">
                        <div class="destination-overlay"></div>
                        <div class="destination-btn">
                            <a href="#" class="btn-blue btn-red">Book Now</a>
                        </div>
                    </div>
                    <div class="destination-content">
                        <h3><a href="tour-detail.html">The Chelsea Flower Show</a></h3>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-item">
                    <div class="destination-image">
                        <img src="images/destination1.jpg" alt="Image">
                        <div class="destination-overlay"></div>
                        <div class="destination-btn">
                            <a href="#" class="btn-blue btn-red">Book Now</a>
                        </div>
                    </div>
                    <div class="destination-content">
                        <h3><a href="tour-detail.html">Harbin Ice Festival</a></h3>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-item">
                    <div class="destination-image">
                        <img src="images/destination4.jpg" alt="Image">
                        <div class="destination-overlay"></div>
                        <div class="destination-btn">
                            <a href="#" class="btn-blue btn-red">Book Now</a>
                        </div>
                    </div>
                    <div class="destination-content">
                        <h3><a href="tour-detail.html">Bahamas Carribean Cruises</a></h3>
                        <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-content">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
