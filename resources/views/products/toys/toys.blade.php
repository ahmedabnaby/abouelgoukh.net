@extends('layouts.app')
@section('header')
<title>Abou El Goukh - Products - Kid Toys</title>
<meta name="description" content="Abou El Goukh is one of the many good suppliers of toys toys in Egypt, we are known for our many products for your toys happiness.">
<meta name="keywords" content="toys, toys, kid toys, egypt, cairo, elrehab, madinaty, maadi">
<link rel="canonical" href="http://abouelgoukhstore.com/toys" />
@endsection
@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href={{route('home')}}>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Toys</li>
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

                    <div style="display: none;">
                        {{$countToys=\App\Models\Products::where(['category_id' => 6])->get()}}
                    </div>
                    @if(count($countToys)>0)

                    @foreach ($toys as $toy)
                    @if ($toy->category_id === 6 && $toy->visibility === 1)
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>

                               
                                <a href="{{route('toys.show',$toy->id)}}">
                                    {{-- <img src="{{asset('storage/'.$toy->image)}}"> --}}
                                    <img src="{{env('AWS_URL').$toy->image}}">
                                </a>
                                <a href="{{route('toys.show',$toy->id)}}" class="btn-quickview" title="Quick View">View</a> 


   
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="{{route('toys.show',$toy->id)}}">{{$toy->name}}</a>
                                </h2>
                                <h2 class="product-price">
                                    <h3>{{number_format($toy->price)}} EGP</h3>
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

            <aside class="sidebar-shop col-lg-2 order-lg-first">
                <div class="sidebar-wrapper">
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Toys</a>
                        </h3>

                        <div class="collapse show" id="widget-body-2">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li><a href="#">None</a></li>
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