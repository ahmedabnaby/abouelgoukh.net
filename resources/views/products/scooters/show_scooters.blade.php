@extends('layouts.app')
@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="row row-sm">
            <div class="col-lg-9 col-xl-10">
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 product-single-gallery">
                            <div class="product-slider-container product-item">
                                <div class="product-single-carousel owl-carousel owl-theme">
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('assets/images/abouelgoukh/scooters/'.$product->image)}}" data-zoom-image="{{asset('assets/images/abouelgoukh/bicycles/'.$product->image)}}"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('assets/images/abouelgoukh/scooters/'.$product->image)}}" data-zoom-image="{{asset('assets/images/abouelgoukh/bicycles/'.$product->image)}}"/>
                                    </div>
                                </div>
                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                <div class="col-3 owl-dot">
                                    <img src="{{asset('assets/images/abouelgoukh/scooters/'.$product->image)}}"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="{{asset('assets/images/abouelgoukh/scooters/'.$product->image)}}"/>
                                </div>
                            </div>
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-8 col-md-6">
                            <div class="product-single-details">
                                <h1 class="product-title">{{$product->name}}</h1>

                                <div class="price-box">
                                    <span class="product-price">{{$product->price}} EGP</span>
                                </div><!-- End .price-box -->

                                <div class="product-desc">
                                    <p>{{$product->description}}</p>
                                </div><!-- End .product-desc -->

                                <form action="{{route('cart.add',$product->id)}}" method="get">

                                    <div class="product-single-qty">
                                        <input class="horizontal-quantity form-control" name="quantity" value="1" type="text">
                                    </div><!-- End .product-single-qty -->
    
                                    <div class="product-action product-all-icons">
                                        <button type="submit" style="cursor: pointer;" class="paction add-cart">
                                            Add to Bag
                                        </button>
                                    </div><!-- End .product-action -->
                                </form>
                            </div><!-- End .product-single-details -->
                        </div><!-- End .col-lg-7 -->
                    </div><!-- End .row -->
                </div><!-- End .product-single-container -->

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
                                    @foreach ($scooters as $scooter)
                                        @if ($scooter->category_id === 2)
                                        
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{route('scooters.show',$scooter->id)}}">
                                                <img src="{{asset('assets/images/abouelgoukh/scooters/'.$scooter->image)}}">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="{{route('scooters.show',$scooter->id)}}">{{$scooter->name}}</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">{{$scooter->price}} EGP</span>
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
</main><!-- End .main -->

    
@endsection