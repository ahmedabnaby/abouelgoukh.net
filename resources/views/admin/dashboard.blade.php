@extends('layouts.app')

@section('header')
<title>Abou El Goukh - Dashboard</title>
<meta name="description" content="Abou El Goukh started the business in 1952 & along time it became known as one the best importers of Bikes, Bicycles, Scooters, E-cars, Petrol Scooters, Motorcycles, Kids Equipment, & Kids Toys. We have some of the best brands worldwide in our field">
<meta name="keywords" content="A summary about of webpage content">
<link rel="canonical" href="http://abouelgoukhstore.com/admin" />
@endsection

@section('content')

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-lg-last dashboard-content">
                <h2>My Dashboard</h2>

                <div class="alert alert-success alert-intro" role="alert">
                    You have succesfully logged in!
                </div><!-- End .alert -->

                <div class="mb-4"></div><!-- margin -->

                <h3>All Orders</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-table-container">
                    @if(count($orders)>0)
            
                                <table class="table table-cart">
                                    <thead>
                                        <tr>
                                            <th class="product-col">Product</th>
                                            <th class="price-col">Price</th>
                                            <th class="qty-col">Qty</th>
                                            <th>Subtotal</th>
                                            <th class="qty-col">Name</th>
                                            <th class="price-col">Address</th>
                                            <th class="qty-col">Phone Number</th>
                                            <th class="qty-col">Email</th>
                                            <th class="qty-col">Payment Method</th>
                                        </tr>
                                    </thead>
                            @foreach ($orders as $order)
            
                            <tbody>
                                @foreach ($order->cart as $item)
                                <tr class="product-row">
                                            <td class="product-col">
                                                <figure class="product-image-container">

                                                    @if ($item->status === 0 && $item->routeName != 'new')
                                                    <a href="#" class="product-image">
                                                        <img src="assets/images/abouelgoukh/all/{{$item['associatedModel']['image']}}" alt="product">
                                                    </a>
                                
                                                    @elseif ($item->status === 1 && $item->routeName != 'new')
                                                    <a href="#" class="product-image">
                                                        {{-- <img src="{{asset('storage/'.$category->image)}}" alt="product"> --}}
                                                        <img src="{{env('AWS_URL').$item['associatedModel']['image']}}" alt="product"/>
                                                    </a>
                                                    @else
                                             
                                                    <a href="#" class="product-image">
                                                        <img src="{{env('AWS_URL').$item['associatedModel']['image']}}" alt="product"/>
                                                    </a>
                                                    @endif

                                                    {{-- <a href="product.html" class="product-image">
                                                        <img src="assets/images/abouelgoukh/all/{{$item['associatedModel']['image']}}" alt="product">
                                                    </a> --}}
                                                </figure>
                                                <h2 class="product-title">
                                                    <a href="product.html">{{$item['name'] }}</a>
                                                </h2>
                                            </td>
                                            <td class="product-title">{{number_format($item['price'])}} EGP</td>
                                            <td class="product-title">
                                                <span>{{$item['quantity'] }}<span>
                                            </td>
                                            <td class="product-title">{{number_format($item['price']*$item['quantity'])}} EGP</td>
                                            <td class="product-title">
                                                    {{$order['name'] }}
                                            </td>
                                            <td class="product-title">{{$order['street'] }}/{{$order['city'] }}</td>
                                            <td class="product-title">
                                                <span>{{$order['phone'] }}<span>
                                            </td>
                                            <td class="product-title">{{$order['email']}} </td>
                                            <td class="product-title">{{$order['method']}} </td>
            
                                        </tr>
                                        @endforeach
                                        <tr class="product-action-row">
                                            <td colspan="4" class="clearfix">
                                                <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <div class="float-right">
                                                    <a href="#" title="Edit product" class="btn-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                                                    <button title="Remove product" type="submit" class="btn-remove" style="background: transparent;border:none;cursor: pointer;"><span class="sr-only">Remove</span></button>
                                                </div><!-- End .float-right -->
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                            @endforeach
            
                                    <tfoot>
                                        <tr>
                                            <td colspan="12" class="clearfix">
                                                <div class="float-left">
                                                    <a href="category.html" class="btn btn-outline-secondary">Continue Shopping</a>
                                                </div><!-- End .float-left -->
            
                                                <div class="float-right">
                                                    <a href="#" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping Cart</a>
                                                </div><!-- End .float-right -->
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                @else
                                <h1>No Orders<h1>
                                    @endif
                            </div><!-- End .cart-table-container -->
            
                        </div><!-- End .col-lg-8 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->


            </div><!-- End .col-lg-9 -->

            <aside class="sidebar col-lg-3">
                <div class="widget widget-dashboard">
                    <h3 class="widget-title">My Account</h3>

                    <ul class="list">
                        <li class="active"><a href="{{route('dashboard')}}">Orders</a></li>
                        <li><a href="{{route('adminPanel')}}">Admin Panel</a></li>
                    </ul>
                </div><!-- End .widget -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</main><!-- End .main -->

    
@endsection