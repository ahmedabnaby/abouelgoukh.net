<header class="header">

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler" type="button">
                    <i class="icon-menu"></i>
                </button>
                <a href="{{route('home')}}" class="logo">
                    <img src="{{asset('assets/images/abouelgoukh/Black-on-White-EngVer2.png')}}" alt="Porto Logo">
                </a>
                <nav class="main-nav">
                    <ul class="menu">
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="#">Products</a>
                            <div class="megamenu">
                              <div class="row row-sm">
                                <div class="col-md-4">
                                  <a class="nolink">Categories</a>
                                  <ul class="submenu">
                                    <li><a href="{{route('bicycles')}}">Bicycles</a></li>
                                    <li><a href="{{route('scooters')}}">Petrol Scooter</a></li>
                                    <li><a href="{{route('accessories')}}">Accessories</a></li>
                                    <li><a href="{{route('kids_scooter')}}">Kids scooter</a></li>
                                    <li><a href="{{route('sports')}}">Sport</a></li>
                                    <li><a href="{{route('toys')}}">Toys</a></li>
                                    <li><a href="{{route('car_holders')}}">Bicycle Car Holder</a></li>
                                    <li><a href="{{route('buggy')}}">Beach Buggy</a></li>
                                    <li><a href="{{route('electric_scooter')}}">3-Wheel Electric Scooter</a></li>
                                    <li><a href="{{route('e_car')}}" target="_blank">E-Cars</a></li>
                                  </ul>
                                </div>
                                <div class="col-md-8 image-container">
                                  <img src="{{asset('assets/images/abouelgoukh/Electric.jpg')}}" />
                                </div>
                              </div>
                            </div>
                          </li>


                        <li><a href="{{route('about')}}">Abou El-Goukh</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <div class="header-search">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                    <form action="{{route('search')}}" method="post">
                        @csrf
                        <div class="header-search-wrapper">
                            {{-- <input type="search" class="form-control" name="search_field" id="search_field" placeholder="I'm searching for..." /> --}}

                            <div class="select-custom" style="border-radius: 30px 0px 0px 30px;">
                                <select name="category" id="category" style="border-radius: 30px 0px 0px 30px;" >
                                    @foreach ($categories as $category)
                                        <option value={{$category->id}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div><!-- End .select-custom -->
                            <button class="btn" type="submit"><i class="icon-search-3"></i></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div>


                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count">
                            {{Cart::getContent()->count()}}
                        </span>
                    </a>

                    <div style="display: none;">{{$cartItems =  \Cart::getContent()}}</div>
                    <div class="dropdown-menu" >
                        <div class="dropdownmenu-wrapper">
                            <div class="dropdown-cart-header">
                                <span>{{Cart::getContent()->count()}} Items</span>

                            </div><!-- End .dropdown-cart-header -->
                            <div class="dropdown-cart-products">
                                @foreach ($cartItems as $cartItem)
                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="#">{{$cartItem->name}}</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">{{$cartItem->quantity}}</span>
                                            x {{number_format($cartItem->price)}} EGP
                                        </span>
                                    </div><!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="#" class="product-image">
                                            <img src="{{asset('assets/images/abouelgoukh/all/'.$cartItem->attributes->image)}}" alt="product">
                                        </a>
                                        <a href="{{route('cart.destroy',$cartItem->id)}}" class="btn-remove" title="Remove Product"><i class="icon-retweet"></i></a>
                                    </figure>
                                </div><!-- End .product -->
                                @endforeach

                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">{{number_format(\Cart::getTotal())}} EGP</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="{{route('checkout')}}" class="btn btn-block">Checkout</a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdownmenu-wrapper -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .dropdown -->
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="col-lg-4">
            <div class="service-widget">
                <i class="service-icon icon-shipping"></i>
                <div class="service-content">
                    <h3 class="service-title">local shipping</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="service-widget">
                <i class="service-icon icon-money"></i>
                <div class="service-content">
                    <h3 class="service-title">value for money</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="service-widget">
                <i class="service-icon icon-support"></i>
                <div class="service-content">
                    <h3 class="service-title">online support</h3>
                </div>
            </div>
        </div>
    </div>
</header><!-- End .header -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-retweet"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                        <div class="megamenu">
                          <div class="row row-sm">
                            <div class="col-md-4">
                              <ul class="submenu">
                                <li><a href="{{route('bicycles')}}">Bicycles</a></li>
                                <li><a href="{{route('scooters')}}">Petrol Scooter</a></li>
                                <li><a href="{{route('accessories')}}">Accessories</a></li>
                                <li><a href="{{route('kids_scooter')}}">Kids scooter</a></li>
                                <li><a href="{{route('sports')}}">Sport</a></li>
                                <li><a href="{{route('toys')}}">Toys</a></li>
                                <li><a href="{{route('car_holders')}}">Bicycle Car Holder</a></li>
                                <li><a href="{{route('buggy')}}">Beach Buggy</a></li>
                                <li><a href="{{route('electric_scooter')}}">3-Wheel Electric Scooter</a></li>
                                <li><a href="{{route('e_car')}}" target="_blank">E-Cars</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>


                    <li><a href="{{route('about')}}">Abou El-Goukh</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->