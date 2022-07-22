@extends('layout.master')

@section('content')

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Booking Page</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Destinations</a></li>
                    <li class="breadcrumb-item"><a href="#">Bahamas Cruises</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Booking</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>

<section class="booking">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="booking-form booking-outer">
                    <div class="payment-info detail">
                        <div class="row">
                            <div class="col-lg-5">
                                <img src="images/destination-fw1.jpg" alt="Image">
                            </div>
                            <div class="col-lg-7">
                                <h3>Bahamas Cruises</h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="title">Total Cost</td>
                                            <td class="b-id">569$</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Total Days</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Arrival Date</td>
                                            <td>13 August 2019</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Departure Date</td>
                                            <td>13 August 2019</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Name:</label>
                                <input type="text" class="form-control" id="Name" placeholder="Enter full name">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="abc@xyz.com">
                            </div>
                            <div class="form-group col-lg-6 col-left-padding">
                                <label>Phone Number:</label>
                                <input type="text" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Arrival Date:</label>
                                <input type="date" class="form-control" id="arrival-date">
                            </div>
                            <div class="form-group col-lg-6 col-left-padding">
                                <label>Departure Date:</label>
                                <input type="date" class="form-control" id="departure-date">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Name:</label>
                                <input type="text" class="form-control" id="date" placeholder="Select Date">
                            </div>
                            <div class="form-group col-lg-6 col-left-padding">
                                <label>No of Tickets:</label>
                                <input type="number" class="form-control" id="phnumber1" placeholder="Select a number">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Gender:</label>
                                <select>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-left-padding">
                                <label>Nationality:</label>
                                <select>
                                    <option value="american">American</option>
                                    <option value="opel">Malaysian</option>
                                    <option value="audi">German</option>
                                </select>
                            </div>
                            <div class="textarea col-lg-12">
                                <label>Message:</label>
                                <textarea placeholder="Enter a message"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkbox-outer">
                                    <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms
                                        and conditions.</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment-btn">
                                    <a href="#" class="btn-blue btn-red">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="sidebar-sticky" class="col-lg-4">
                <aside class="detail-sidebar sidebar-wrapper">
                    <div class="sidebar-item">
                        <div class="detail-title">
                            <h3>Popular Packages</h3>
                        </div>
                        <div class="sidebar-content sidebar-slider">
                            <div class="sidebar-package">
                                <div class="sidebar-package-image">
                                    <img src="images/detailslider1.jpg" alt="Image">
                                </div>
                                <div class="destination-content sidebar-package-content">
                                    <h4><a href="tour-detail.html">Royal Caribbean Cruises</a></h4>
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span>
                                    </p>
                                    <a href="#" class="btn-blue btn-red">Book Now</a>
                                </div>
                            </div>
                            <div class="sidebar-package">
                                <div class="sidebar-package-image">
                                    <img src="images/detailslider2.jpg" alt="Image">
                                </div>
                                <div class="destination-content sidebar-package-content">
                                    <h4><a href="tour-detail.html">Bahamas Royal Cruises</a></h4>
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span>
                                    </p>
                                    <a href="#" class="btn-blue btn-red">Book Now</a>
                                </div>
                            </div>
                            <div class="sidebar-package">
                                <div class="sidebar-package-image">
                                    <img src="images/detailslider3.jpg" alt="Image">
                                </div>
                                <div class="destination-content sidebar-package-content">
                                    <h4><a href="tour-detail.html">Royal Caribbean Cruises</a></h4>
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span>
                                    </p>
                                    <a href="#" class="btn-blue btn-red">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-item sidebar-helpline">
                        <div class="sidebar-helpline-content">
                            <h3>Any Questions?</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor
                                incididunt ut.</p>
                            <p><i class="flaticon-phone-call"></i> (012)-345-6789</p>
                            <p><i class="flaticon-mail"></i> <a
                                    href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="d0a4bfa5a2bea4a2b1a6b5bc90a4b5a3a4bdb1b9bcfeb3bfbd">[email&#160;protected]</a>
                            </p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
