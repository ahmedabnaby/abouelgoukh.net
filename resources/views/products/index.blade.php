@extends('layouts.app')
@section('content')
<main class="home main">
    <div class="top-slider owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
        'items' : 1,
        'margin' : 0,
        'nav': true,
        'dots': false,
        'autoplay': false
    }">

        <div class="home-slide">
            <div class="slide-content flex-column flex-lg-row">
                {{-- <img src="assets/images/slider/slide1.png" class="mx-auto mr-lg-0 py-5" alt="slide image"> --}}
                <div class="content-right order-first order-lg-1 mx-auto py-5">
                    <span>EXTRA</span>
                    <h2>20% OFF</h2>
                    <h4 class="cross-txt">BIKES</h4>
                    <h3 class="mb-2 mb-lg-8">Summer Sale</h3>
                    <button class="btn">Shop All Sale</button>
                </div>
                <video autoplay loop muted playsinline id="myVideo">
                    <source src="{{asset('assets/videos/Abulajoukh.mp4')}}" type="video/mp4" />
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
                    <h3 class="mb-2 mb-lg-8">Summer Sale</h3>
                    <button class="btn">Shop All Sale</button>
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
                    <h3 class="mb-2 mb-lg-8">Summer Sale</h3>
                    <button class="btn">Shop All Sale</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <section class="product-panel">
            <div class="section-title">
                <h2>Categories</h2>
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
                <div class="product-default inner-quickview inner-icon center-details">
                    <figure>
                        <a href="{{route('bicycles')}}">
                            <img src="assets/images/abouelgoukh/800_610d57021404d.png">
                        </a>
                        <a href="{{route('bicycles')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details">
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
                    <div class="product-details">
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
                    <div class="product-details">
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
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="{{route('kids_scooter')}}">Kids scooter</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>      
                <div class="product-default inner-quickview inner-icon center-details" style="padding:40px;">
                    <figure>
                        <a href="{{route('sports')}}">
                            <img src="assets/images/abouelgoukh/800_610c3b2691786.jpg">
                        </a>
                        <a href="{{route('sports')}}" class="btn-quickview" title="Quick View">Quick View</a> 
                    </figure>
                    <div class="product-details">
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
                    <div class="product-details">
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
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="{{route('car_holders')}}">Bicycle Car Holder</a>
                        </h2>
                    </div><!-- End .product-details -->
                </div>                

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
                    <a href="#" class="btn">Shop All Sale</a>
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
                    <div class="product-details">
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
                        <span>Summer Sale</span>
                        <h3>20% OFF</h3>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <img class="banner-image" src="assets/images/banners/banner4.jpg" alt="banner">
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <button class="btn">shop all sale</button>
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
                        <button class="btn">shop all sale</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- End .main -->

    
@endsection