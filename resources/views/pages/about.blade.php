@extends('layouts.app')
@section('header')
<title>Abou El Goukh - About Us</title>
<meta name="description" content="Abou El Goukh started the business in 1952 & along time it became known as one the best importers of Bikes, Bicycles, Scooters, E-cars, Petrol Scooters, Motorcycles, Kids Equipment, & Kids Toys. We have some of the best brands worldwide in our field">
<meta name="keywords" content="A summary about of webpage content">
<link rel="canonical" href="http://abouelgoukhstore.com/abouelgoukh" />
@endsection
@section('content')
    <div class="container">
        <h1 style="text-align: center;padding-top:35px;">About Abou El-Goukh</h1>
        <div class="row">
            <div class="col">
                <video controls autoplay playsinline preload="auto" id="myVideo" style="padding:25px;">
                    <source src="{{asset('assets/videos/video.mp4')}}" type="video/mp4" />
                  </video>
            </div>
        </div>
    </div>
@endsection