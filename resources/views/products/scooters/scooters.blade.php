@extends('layouts.app')
@section('header')
<title>Abou El Goukh - Products - Petrol Scooters/Motorcycles</title>
<meta name="description" content="Abou El Goukh is known for its speciallty in petrol scooters and motorcycles, We are known for our EGOS scooters & motorcycles with low prices. Abou El Goukh have many scooter products like EGOS Kelly, EGOS MONOD, EGOS TITAN, EGOS CRUISER, EGOS AMID, EGOS FORCE">
<meta name="keywords" content="petrol scooters, motorcycles, Vesba, Fesba, EGOS Kelly, EGOS MONOD, EGOS TITAN, EGOS CRUISER, EGOS AMID, EGOS FORCE, madinaty, el rehab, maadi">
<link rel="canonical" href="http://abouelgoukhstore.com/scooters" />
@endsection
@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href={{route('home')}}>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Petrol Scooters</li>
            </ol>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="boxed-slider owl-carousel owl-carousel-lazy owl-theme owl-theme-light">
                    <div class="category-slide">
                        <div class="slide-bg owl-lazy"  data-src="{{asset('assets/images/abouelgoukh/2000_60d26f433c2bf.jpg')}}"></div><!-- End .slide-bg -->
                        <div class="banner boxed-slide-content offset-1">
                            <h2 class="banner-subtitle" style="color: white;">check out over <span>200+</span></h2>
                            <h1 class="banner-title" style="color: white;">
                                INCREDIBLE deals
                            </h1>
                            <a href="#" class="btn btn-primary">Shop Now</a>
                        </div><!-- End .home-slide-content -->
                    </div><!-- End .home-slide -->

                    <div class="category-slide" style="background-color: white;">
                        <div class="category-banner mb-2">
                            <div class="container">
                                <div class="content-left">
                                    <span>EXTRA</span>
                                    <h2>20% OFF</h2>
                                    <h4 class="cross-txt">BIKES</h4>
                                </div>
                                <div class="content-center">
                                    <img src="{{asset('assets/images/abouelgoukh/800_610d57021404d.png')}}" class="bike_padding">
                                </div>
                                <div class="content-right">
                                    <p>Sale</p>
                                    <button class="btn">Shop All Sale</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .home-slide -->
                </div><!-- End .home-slider -->

            
                
                <div class="row row-sm">

        @if(count($scooters)>0)

                    @foreach ($scooters as $scooter)
                    @if ($scooter->category_id === 2 && $scooter->visibility === 1)
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>

                                @if ($scooter->status === 0 && $scooter->routeName != 'new')
                                <a href="{{route('scooters.show',$scooter->id)}}">
                                    <img src="{{asset('assets/images/abouelgoukh/scooters/'.$scooter->image)}}">
                                </a>
                                <a href="{{route('scooters.show',$scooter->id)}}" class="btn-quickview" title="Quick View">View</a> 
            
                                @elseif ($scooter->status === 1 && $scooter->routeName != 'new')
                                <a href="{{route('scooters.show',$scooter->id)}}">
                                    {{-- <img src="{{asset('storage/'.$scooter->image)}}"> --}}
                                    <img src="{{env('AWS_URL').$scooter->image}}">
                                </a>
                                <a href="{{route('scooters.show',$scooter->id)}}" class="btn-quickview" title="Quick View">View</a> 
                                @else
                         
                                <a href="{{route('scooters.show',$scooter->id)}}">
                                    {{-- <img src="{{asset('storage/'.$scooter->image)}}"> --}}
                                    <img src="{{env('AWS_URL').$scooter->image}}">
                                </a>
                                <a href="{{route('scooters.show',$scooter->id)}}" class="btn-quickview" title="Quick View">View</a> 

                                @endif


   
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="{{route('scooters.show',$scooter->id)}}">{{$scooter->name}}</a>
                                </h2>
                                <h2 class="product-price">
                                    <h3>{{number_format($scooter->price)}} EGP</h3>
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @else
                    <h1>Stay tuned for new products.</h1>
        @endif 
                </div><!-- End .row -->

            </div><!-- End .col-lg-9 -->
            <div class="sidebar-overlay"></div>
            <div class="sidebar-toggle"><i class="icon-right-open"></i></div>
            <aside class="sidebar-product col-lg-3 col-xl-2 padding-left-lg mobile-sidebar">
                <div class="sidebar-wrapper">

                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Featured Products</a>
                        </h3>

                        <div class="collapse show" id="widget-body-2">
                            <div class="widget-body">
                                <div class="product-intro">
                                    @foreach ($scooters->take(52) as $scooter)
                                    @if ($scooter->category_id === 2)
                                        
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            @if ($scooter->status === 0 && $scooter->routeName != 'new')
                                            <a href="{{route('scooters.show',$scooter->id)}}">
                                                <img src="{{asset('assets/images/abouelgoukh/scooters/'.$scooter->image)}}">
                                            </a>
                        
                                            @elseif ($scooter->status === 1 && $scooter->routeName != 'new')
                                            <a href="{{route('scooters.show',$scooter->id)}}">
                                                {{-- <img src="{{asset('storage/'.$scooter->image)}}"> --}}
                                                <img src="{{env('AWS_URL').$scooter->image}}">
                                            </a>
                                            @else
                                     
                                            <a href="{{route('scooters.show',$scooter->id)}}">
                                                {{-- <img src="{{asset('storage/'.$scooter->image)}}"> --}}
                                                <img src="{{env('AWS_URL').$scooter->image}}">
                                            </a>
            
                                            @endif
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">{{$scooter->name}}</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">{{number_format($scooter->price)}} EGP</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                    @endif
                                    @endforeach

                                </div>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

            </aside><!-- End .col-md-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- margin -->
</main><!-- End .main -->

@endsection