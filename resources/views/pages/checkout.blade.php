@extends('layouts.app')
<title>Abou El Goukh - Checkout</title>
@section('content')
<main class="main">

    <nav aria-label="breadcrumb" class="breadcrumb-nav">   
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">checkout</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        @if($errors->any())
        <div class="alert alert-success alert-intro" role="alert">
            {{$errors->first()}}
        </div><!-- End .alert -->

        <div class="mb-4"></div><!-- margin -->
        @endif
        <div class="row">
            <div class="col-lg-4">
                <div class="order-summary">
                    <h3>Cart Summary</h3>

                    <h4>
                        <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">{{Cart::getContent()->count()}} products in Cart</a>
                    </h4>

                    <div class="collapse" id="order-cart-section">
                    <div style="display: none;">{{$cartItems =  \Cart::getContent()}}</div>
                        <table class="table table-mini-cart">
                            <tbody>
                                @foreach ($cartItems as $cartItem)
                                 {{dd($cartItem)}}     
                                <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            @if ($cartItem->status === 0 && $cartItem->routeName != 'new')
                                            <a href="product.html" class="product-image">
                                                <img src="{{asset('assets/images/abouelgoukh/all/'.$cartItem->attributes->image)}}" alt="product">
                                            </a>
                        
                                            @elseif ($cartItem->status === 1 && $cartItem->routeName != 'new')
                                            <a href="#" class="product-image">
                                                {{-- <img src="{{asset('storage/'.$category->image)}}" alt="product"> --}}
                                                <img src="{{env('AWS_URL').$cartItem->attributes->image}}" alt="product"/>
                                            </a>
                                            @else
                                     
                                            <a href="#" class="product-image">
                                                <img src="{{env('AWS_URL').$cartItem->attributes->image}}" alt="product"/>
                                            </a>
                                            @endif
 
                                        </figure>
                                        <div>
                                            <h2 class="product-title">
                                                <a href="product.html">{{$cartItem->name}}</a>
                                            </h2>

                                            <span class="product-qty">Qty: {{$cartItem->quantity}}</span>
                                        </div>
                                    </td>
                                    <td class="price-col">{{number_format($cartItem->price)}} EGP</td>
                                </tr>
                                <tr>
                                <td>Total Price: <span class="cart-total-price float-right" style="font-weight: 900;">{{number_format(\Cart::getTotal())}} EGP</span></td>
                                </tr>
                                @endforeach
                            </tbody>    
                        </table>
                    </div><!-- End #order-cart-section -->
                </div><!-- End .order-summary -->
                <div class="order-summary">
                    <h3>Payment Method</h3>

                    <h4>
                        <a data-toggle="collapse" href="#order-method-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-method-section">Choose payment method</a>
                    </h4>

                    <form method="POST" action="{{route('payment')}}">
                        @csrf
                    <div class="show" id="order-method-section">
                        <table class="table table-mini-cart required-field">
                            <tbody>
                                <tr>
                                    <td class="product-col">
                                        <input type="radio" id="card" name="method" value="card">
                                        <label for="card" class="ml-3" style="margin-top:-1px;">
                                            Credit / Debit card 
                                        </label>
                                    </td>

                                    <td class="product-col">
                                    <input type="radio" id="cash" name="method" value="cash" required>
                                    <label for="cash" class="ml-3" style="margin-top:-1px;">
                                        Cash on delivery
                                    </label>
                                </td>
                                </tr>

                        </table>
                    </div><!-- End #order-cart-section -->
                </div>
            </div><!-- End .col-lg-4 -->

            <div class="col-lg-8 order-first">
                <div class="checkout-payment">
                    <h2 class="step-title">Payment Method:</h2>
                    <div id="new-checkout-address" class="show">
                            <div class="form-group required-field">
                                <label>Full Name </label>
                                <input type="text" name="name" class="form-control">
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>Email </label>
                                <input type="email" name="email" class="form-control">
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>Street Address </label>
                                <input type="text" name="street" class="form-control">
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>State/Province</label>
                                <div class="select-custom">
                                    <select class="form-control" name="city">
                                        <option value="rehab">Al-Rehab</option>
                                        <option value="madinaty">Madinaty</option>
                                        <option value="nasrcity">Nasr City</option>
                                        <option value="misrelgedeeda">Misr El Gedeeda</option>
                                        <option value="Maadi">Al-Maadi</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label>Phone Number </label>
                                <div class="form-control-tooltip">
                                    <input type="number" name="phone" class="form-control">
                                    {{-- <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span> --}}
                                </div><!-- End .form-control-tooltip -->
                            </div><!-- End .form-group -->
                            <input type="hidden" name="current_date" value="{{date('M d, Y')}}">
                    </div><!-- End #new-checkout-address -->

                    <div class="clearfix">
                        <button type="submit" class="btn btn-primary float-right">Place Order</button>
                    </div><!-- End .clearfix -->
                </form>
                </div><!-- End .checkout-payment -->

                <div class="checkout-discount">
                    <h4>
                        <a data-toggle="collapse" href="#checkout-discount-section" class="collapsed" role="button" aria-expanded="false" aria-controls="checkout-discount-section">Apply Discount Code</a>
                    </h4>

                    <div class="collapse" id="checkout-discount-section">
                        <form action="#">
                                <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                                <button class="btn btn-sm btn-outline-secondary" type="submit">Apply Discount</button>
                        </form>
                    </div><!-- End .collapse -->
                </div><!-- End .checkout-discount -->
            </div><!-- End .col-lg-8 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</main><!-- End .main -->

@endsection
