@extends('layouts.app')
@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href={{route('home')}}>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bicycles</li>
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
                                    <p>Summer Sale</p>
                                    <button class="btn">Shop All Sale</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .home-slide -->
                </div><!-- End .home-slider -->

            
                
                <div class="row row-sm">

                    {{-- @foreach ($subsub_categories as $subsub_category)
                    @if ($sub_category->id === $subsub_category->sub_category_id)
  
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="#">
                                    <img src="{{asset('assets/images/abouelgoukh/'.$subsub_category->image)}}">
                                </a>
                                <a href="#" class="btn-quickview" title="Quick View">View</a> 
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="#" class="product-category">Bicycles under the age of 13</a>
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    <a href="#">{{$subsub_category->name}}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach --}}
        @if(count($subcategories)>0)

                    @foreach ($subcategories as $subcategory)
  
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{route('subsub_categories.show',$subcategory->id)}}">
                                    <img src="{{asset('assets/images/abouelgoukh/'.$subcategory->image)}}">
                                </a>
                                <a href="{{route('subsub_categories.show',$subcategory->id)}}" class="btn-quickview" title="Quick View">View</a> 
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="#" class="product-category">{{($subcategoryname[0]->name)}}</a>
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    <a href="{{route('subsub_categories.show',$subcategory->id)}}">{{$subcategory->name}}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h1>No Categories</h1>
        @endif 

                    {{-- @for ($i = 0; $i < count($subsub_categories); $i++)
                    @if ($sub_category->id === $subsub_categories[$i]->sub_category_id)

                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="#">
                                    <img src="{{asset('assets/images/abouelgoukh/'.$subsub_categories[$i]->image)}}">
                                </a>
                                <a href="#" class="btn-quickview" title="Quick View">View</a> 
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="#" class="product-category">Bicycles under the age of 13</a>
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    <a href="#">{{$subsub_categories[$i]->name}}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endfor --}}
                </div><!-- End .row -->

            </div><!-- End .col-lg-9 -->

            <aside class="sidebar-shop col-lg-2 order-lg-first">
                <div class="sidebar-wrapper">
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Bicycles</a>
                        </h3>

                        <div class="collapse show" id="widget-body-2">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li><a href="#">Mountain Bikes</a></li>
                                    <li><a href="#">Racing Bikes</a></li>
                                    <li><a href="#">Hybird Bikes</a></li>
                                    <li><a href="#">Bicycles under the age of 13</a></li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->
                </div><!-- End .sidebar-wrapper -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- margin -->
</main><!-- End .main -->

@endsection