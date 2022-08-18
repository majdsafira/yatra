@extends('layout.master')

@section('content')

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Packges</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Packges</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
@php
$i = 0 ;
@endphp
<section class="destinations destination-padding">

    <div class="container">

        <div class="row mix asia">
            @foreach ($tours as $item)
            <div class="col-lg-4 col-md-6">
                <div class="destination-item">
                    <div class="destination-image">
                        <img src="{{url('storage/'.$item->image1)}}" alt="Image" height="200" width="200">
                        <div class="destination-overlay"></div>
                        <div class="destination-btn">
                            <a href="/tourdetails/{{$item->id}}" class="btn-blue btn-red">Book Now</a>
                        </div>
                    </div>
                    <div class="destination-content">
                        <h3><a href="/tourdetails/{{$item->id}}">{{$item->name}}</a></h3>

                        <p> <span class="bold">${{$item->price}}</span> </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section>

@endsection
