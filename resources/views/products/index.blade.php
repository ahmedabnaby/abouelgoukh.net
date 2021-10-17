@extends('layouts.app')
@section('header')
<title>Abou El Goukh - Home</title>
<meta name="description" content="Abou El Goukh Egypt founded our business in 1952. We started as importers of bicycles, bicycles parts , & accessories. We extended our business by adding fitness equipment category and now we have some of the best brands worldwide in our field.">
<meta name="keywords" content="bicycles, egypt, scooters, bikes, sports, sports egypt, treadmill, beach, buggies, golf, cars, scooter, kids, toys, kids bikes, kid bicycles, electric scooter, fitness, equipment, cairo, elrehab, madinaty, el sherouk, maadi">
<link rel="canonical" href="http://abouelgoukhstore.com" />
@endsection
@section('content')
<main class="home main">
    <div class="top-slider owl-carousel owl-theme pb-5" data-toggle="owl" data-owl-options="{
        'items' : 1,
        'margin' : 0,
        'nav': true,
        'dots': true,
        'autoplay': false
    }">

        <div class="home-slide">
            <div class="slide-content flex-column flex-lg-row">
                {{-- <img src="assets/images/slider/slide1.png" class="mx-auto mr-lg-0 py-5" alt="slide image"> --}}
                <div class="content-right order-first order-lg-1 mx-auto py-5">
                    <span>EXTRA</span>
                    <h2>20% OFF</h2>
                    <h4 class="cross-txt">BIKES</h4>
                    <h3 class="mb-2 mb-lg-8">Sale</h3>
                    <button type="button" class="btn">Get into it</button>
                </div>
                <video autoplay loop muted playsinline preload="auto" id="myVideo">
                    <source src="{{asset('assets/videos/video.mp4')}}" type="video/mp4" />
                  </video>
                  <div class="bg">
                  </div>
            </div>
        </div>
        <div class="home-slide">
            <div class="slide-content flex-column flex-lg-row">
                <div class="content-left mx-auto mr-lg-0 py-5">
                    <span>EXTRA</span>
                    <h2>20% OFF</h2>
                    <h4 class="cross-txt">BIKES</h4>
                    <h3 class="mb-2 mb-lg-8">Special Sale</h3>
                    <a href="#categories" class="btn btn-dark">Shop All Sale</a>
                </div>
                <div class="image-container mx-auto py-5">
                    <img src="assets/images/slider/slide2.png" class="slide-img1" alt="slide image">
                    <div class="image-info mt-2 mt-lg-6 flex-column flex-sm-row">
                        <div class="info-left">
                            <h4>only <span>2500 <sup>EGP</sup></span></h4>
                        </div>
                        <div class="info-right">
                            <h4>Start Shopping Right Now</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-slide">
            <div class="slide-content flex-column flex-lg-row">
                <img src="assets/images/abouelgoukh/imageonline-co-lightenimage.png" class="slider_img mx-auto mr-lg-0 py-5" alt="slide image">
                <div class="content-right order-first order-lg-1 mx-auto py-5">
                    <span>EXTRA</span>
                    <h2>20% OFF</h2>
                    <h4 class="cross-txt">BIKES</h4>
                    <h3 class="mb-2 mb-lg-8">Special Sale</h3>
                    <a href="#categories" class="btn btn-dark">Shop All Sale</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <section class="product-panel">
            <div class="section-title">
                <h2 id="categories">Categories</h2>
            </div>
            <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                'margin': 4,
                'items': 2,
                'autoplayTimeout': 5000,
                'dots': false,
                'nav' : true,
                'responsive': {
                    '768': {
                        'items': 3
                    },
                    '992' : {
                        'items' : 4
                    },
                    '1200': {
                        'items': 5
                    }
                }
            }">
            @foreach ($categories as $category)
            <div class="product-default inner-quickview inner-icon center-details" id="category1">
                <figure>
                    @if ($category->status === 0 && $category->routeName != 'new')
                    <a href="{{route($category->routeName)}}" class="product-image">
                        <img src="{{asset('assets/images/abouelgoukh/'.$category->image)}}" alt="product">
                    </a>

                    @elseif ($category->status === 1 && $category->routeName != 'new')
                    <a href="{{route($category->routeName)}}" class="product-image">
                        <img src="{{asset('storage/'.$category->image)}}" alt="product">
                    </a>
                    @else
             
                    <a href="{{route('NewCategoryShow',$category->id)}}" class="product-image">
                        <img src="{{asset('storage/'.$category->image)}}" alt="product">
                    </a>
                    @endif
                    <a href="#" class="btn-quickview" title="Quick View">Quick View</a> 
                </figure>
                <div class="product-details product_details_edited">
                    <h2 class="product-title">
                        <a href="#">{{$category->name}}</a>
                    </h2>
                </div><!-- End .product-details -->
            </div>  
            @endforeach
                {{-- <div class="product-default inner-quickview inner-icon center-details" id="category1">
                    <figure>
                        <a href="{{route('bicycles')}}">
                            <img src="assets/images/abouelgoukh/Untitled design.png">
                        </a>
                        <a href="{{route('bicycles')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <h2 class="product-title">
                            <a href="{{route('bicycles')}}">Bicycles</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>  
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('scooters')}}">
                            <img src="assets/images/abouelgoukh/800_60f2e2db467fa.jpg"  style="padding:35px;">
                        </a>
                        <a href="{{route('scooters')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <h2 class="product-title">
                            <a href="{{route('scooters')}}">Petrol Scooter</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>       
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('accessories')}}">
                            <img src="assets/images/abouelgoukh/800_60f041c5ce2b7.jpg">
                        </a>
                        <a href="{{route('accessories')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <h2 class="product-title">
                            <a href="{{route('accessories')}}">Accessories</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>      
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('kids_scooter')}}">
                            <img src="assets/images/abouelgoukh/800_610d967fc8a82.png" style="padding:35px;">
                        </a>
                        <a href="{{route('kids_scooter')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <h2 class="product-title">
                            <a href="{{route('kids_scooter')}}">Kids scooter</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>      
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('sports')}}">
                            <img src="assets/images/abouelgoukh/sports.png">
                        </a>
                        <a href="{{route('sports')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <h2 class="product-title">
                            <a href="{{route('sports')}}">Sport</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>      
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('toys')}}">
                            <img src="assets/images/abouelgoukh/800_610d956133c54.png">
                        </a>
                        <a href="{{route('toys')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <h2 class="product-title">
                            <a href="{{route('toys')}}">Toys</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>      
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('car_holders')}}">
                            <img src="assets/images/abouelgoukh/800_610c3b9a7702b.jpg">
                        </a>
                        <a href="{{route('car_holders')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <h2 class="product-title">
                            <a href="{{route('car_holders')}}">Bicycle Car Holder</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>                
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('buggy')}}">
                            <img src="assets/images/abouelgoukh/buggy.png">
                        </a>
                        <a href="{{route('buggy')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <h2 class="product-title">
                            <a href="{{route('buggy')}}">Beach Buggy</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>  
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('electric_scooter')}}">
                            <img src="assets/images/abouelgoukh/3_wheel.png">
                        </a>
                        <a href="{{route('electric_scooter')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <h2 class="product-title">
                            <a href="{{route('electric_scooter')}}">3-Wheel Electric Scooter</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>  
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('e_car')}}" target="_blank">
                            <img src="assets/images/abouelgoukh/e_car.png">
                        </a>
                        <a href="{{route('e_car')}}" class="btn-quickview" target="_blank" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <h2 class="product-title">
                            <a href="{{route('e_car')}}" target="_blank">E-Cars</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>   --}}
            </div>
        </section>

        <div class="product-cat-box owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
            'margin': 0,
            'items': 2,
            'loop' : false,
            'autoplay' : false,
            'dots': false,
            'nav' : true,
            'responsive': {
                '0' : {
                    'items' : 2
                },
                '768': {
                    'items': 3
                },
                '992' : {
                    'items' : 4
                },
                '1200': {
                    'items': 5
                }
            }
        }">
            <div class="product-cat">
                <i class="icon-category-saddle"></i>
                <span>Bike Saddles</span>
            </div>
            <div class="product-cat">
                <i class="icon-category-pedals font-lg"></i>
                <span>Bike Pedals</span>
            </div>
            <div class="product-cat">
                <i class="icon-category-frames font-lg"></i>
                <span>Bike Frames</span>
            </div>
            <div class="product-cat">
                <i class="icon-category-chains"></i>
                <span>Bike Chains</span>
            </div>
            <div class="product-cat">
                <i class="icon-category-tools"></i>
                <span>Bike Tools</span>
            </div>
        </div>
    </div>

    <div class="home-banner mb-3 flex-wrap flex-md-nowrap">
        <div class="banner-left mb-1 mb-md-0 mx-auto ml-md-0 mr-md-3">
            <img src="assets/images/banners/banner1.jpg" alt="banner">
        </div>
        <div class="banner-right">
            <img src="assets/images/banners/banner2.jpg" alt="banner">
            <div class="banner-content">
                <h2>get ready</h2>
                <div class="mb-1">
                    <h3 class="align-middle d-inline">20% Off</h3>
                    <a href="#category1" class="btn">Shop All Sale</a>
                </div>
                <h4 class="cross-txt">bikes</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="product-panel">
            <div class="section-title">
                <h2>Trending Accessories</h2>
            </div>
            <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                'margin': 4,
                'items': 2,
                'autoplayTimeout': 5000,
                'dots': false,
                'nav' : true,
                'responsive': {
                    '768': {
                        'items': 3
                    },
                    '992' : {
                        'items' : 4
                    },
                    '1200': {
                        'items': 5
                    }
                }
            }">
            @foreach ($products as $product)
                @if ($product->category_id === '3')
                    
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('accessories.show',$product->id)}}">
                            <img src="{{asset('assets/images/abouelgoukh/accessories/'.$product->image)}}">
                        </a>
                        <div class="btn-icon-group">
                                
                            <form action="{{route('cart.add',$product->id)}}" method="get">
                                <input type="hidden" name="quantity" value="1">
                            <button class="btn-icon btn-add-cart" type="submit" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </form>

                        </div>
                        <a href="{{route('accessories.show',$product->id)}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details product_details_edited">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="#" class="product-category">{{$product->category}}</a>
                            </div>
                        </div>
                        <h2 class="product-title">
                            <a href="{{route('accessories.show',$product->id)}}">{{$product->name}}</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">{{$product->price}} EGP</span>
                            {{-- £ --}}
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
                @endif

            @endforeach

            </div>
        </section>

        <div class="row row-sm mb-5 home-banner4 text-center">
            <div class="col-sm-6">
                <div class="row row-sm home-banner4-white">
                    <div class="col-md-4">
                        <span>Sale</span>
                        <h3>20% OFF</h3>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <img class="banner-image" src="assets/images/banners/banner4.jpg" alt="banner">
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <a href="#category1" class="btn btn-primary">Shop All Sale</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row row-sm home-banner4-primary">
                    <div class="col-md-4">
                        <span>Flash Sale</span>
                        <h3>30% OFF</h3>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <img class="banner-image" src="assets/images/banners/banner5.jpg" alt="banner">
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <a href="#category1" class="btn btn-dark">Shop All Sale</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- End .main -->

    
@endsection