@extends('layouts.app')
@section('header')
<title>Abou El Goukh - Products - Bicycles</title>
<meta name="description" content="Abou El Goukh is one of the best bicycle importers in Egypt especially Cairo, with many biking proucts from Hybrid bicycles to Mountain bikes to Kids bikes & toys">
<meta name="keywords" content="bicycles, bikes, kids bicycles, cairo, egypt, madinaty, el rehab, maadi, ">
<link rel="canonical" href="http://abouelgoukhstore.com/bicycles" />
@endsection
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
                <div class="category-banner mb-2">
                    <div class="container">
                        <div class="content-left">
                            <span>EXTRA</span>
                            <h2>20% OFF</h2>
                            <h4 class="cross-txt">BIKES</h4>
                        </div>
                        <div class="content-center">
                            <img src="assets/images/abouelgoukh/800_610d57021404d.png" class="bike_padding">
                        </div>
                        <div class="content-right">
                            <p>Sale</p>
                            <button class="btn">Shop All Sale</button>
                        </div>
                    </div>
                </div>
            

                <div class="row row-sm">
                    @foreach ($sub_categories as $sub_category)
                        
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href={{route('sub_categories.show',$sub_category->id)}}>
                                    <img src={{$sub_category->image}}>
                                </a>
                                <a href={{route('sub_categories.show',$sub_category->id)}} class="btn-quickview" title="Quick View">View</a> 
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="#" class="product-category">Bicycles</a>
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    <a href="#">{{$sub_category->name}}</a>
                                </h2>
                            </div><!-- End .product-details -->
                        </div>
                    </div>

                    @endforeach

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