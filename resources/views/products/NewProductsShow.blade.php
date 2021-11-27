@extends('layouts.app')
@section('header')
<title>Abou El Goukh - Products </title>
@endsection
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
        @if($errors->any())
        <div class="alert alert-success success-intro" role="alert">
            {{$errors->first()}}
        </div><!-- End .alert -->
    
        <div class="mb-4"></div><!-- margin -->
        @endif
        <div class="row row-sm">
            <div class="col-lg-9 col-xl-10">
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 product-single-gallery">
                            <div class="product-slider-container product-item">
                                <div class="product-single-carousel owl-carousel owl-theme">
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{env('AWS_URL').$product[0]->image}}" data-zoom-image="{{env('AWS_URL').$product[0]->image}}"/>
                                    </div>
                                    @if ($product[0]->image2 != null)
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{env('AWS_URL').$product[0]->image2}}" data-zoom-image="{{env('AWS_URL').$product[0]->image2}}"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{env('AWS_URL').$product[0]->image3}}" data-zoom-image="{{env('AWS_URL').$product[0]->image3}}"/>
                                    </div> 
                                    @endif

                                </div>
                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                <div class="col-3 owl-dot">
                                    <img src="{{env('AWS_URL').$product[0]->image}}"/>
                                </div>
                                @if ($product[0]->image2 != null && $product[0]->image3 != null)
                                <div class="col-3 owl-dot">
                                    <img src="{{env('AWS_URL').$product[0]->image2}}"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="{{env('AWS_URL').$product[0]->image3}}"/>
                                </div>
                                @elseif ($product[0]->image3 === null)
                                <div class="col-3 owl-dot">
                                    <img src="{{env('AWS_URL').$product[0]->image2}}"/>
                                </div>
                                <div class="col-3 owl-dot" style="display: none;">
                                    <img src="{{env('AWS_URL').$product[0]->image3}}"/>
                                </div>
                                @endif
                            </div>
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-8 col-md-6">
                            <div class="product-single-details">
                                <h1 class="product-title">{{$product[0]->name}}</h1>

                                <div class="price-box">
                                    <span class="product-price">{{number_format($product[0]->price)}} EGP</span>
                                </div><!-- End .price-box -->

                                <div class="product-desc">
                                    <p>{{$product[0]->description}}</p>
                                </div><!-- End .product-desc -->

                                <form action="{{route('cart.add',$product[0]->id)}}" method="get">

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

            
        </div><!-- End .row -->
    </div><!-- End .container -->
</main><!-- End .main -->

    
@endsection