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
                            <a href="#">A-Store</a>
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
                                  </ul>
                                </div>
                                <div class="col-md-8 image-container">
                                  <img src="{{asset('assets/images/abouelgoukh/2000_60d26f433c2bf.jpg')}}" />
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
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required="">
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">All Categories</option>
                                    <option value="4">Fashion</option>
                                    <option value="12">- Women</option>
                                    <option value="13">- Men</option>
                                    <option value="66">- Jewellery</option>
                                    <option value="67">- Kids Fashion</option>
                                    <option value="5">Electronics</option>
                                    <option value="21">- Smart TVs</option>
                                    <option value="22">- Cameras</option>
                                    <option value="63">- Games</option>
                                    <option value="7">Home &amp; Garden</option>
                                    <option value="11">Motors</option>
                                    <option value="31">- Cars and Trucks</option>
                                    <option value="32">- Motorcycles &amp; Powersports</option>
                                    <option value="33">- Parts &amp; Accessories</option>
                                    <option value="34">- Boats</option>
                                    <option value="57">- Auto Tools &amp; Supplies</option>
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
                                            x {{$cartItem->price}} EGP
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

                                <span class="cart-total-price">{{\Cart::getTotal()}} EGP</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="#" class="btn btn-block">Checkout</a>
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
                    <h3 class="service-title">free shipping & return</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="service-widget">
                <i class="service-icon icon-money"></i>
                <div class="service-content">
                    <h3 class="service-title">money back guarantee</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="service-widget">
                <i class="service-icon icon-support"></i>
                <div class="service-content">
                    <h3 class="service-title">online support 24/7</h3>
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
                        <a href="#">A-Store</a>
                        <div class="megamenu">
                          <div class="row row-sm">
                            <div class="col-md-4">
                              <ul class="submenu">
                                <li><a href={{route('bicycles')}}>Bicycles</a></li>
                                <li><a href="{{route('scooters')}}">Petrol Scooter</a></li>
                                <li><a href="{{route('accessories')}}">Accessories</a></li>
                                <li><a href="{{route('kids_scooter')}}">Kids scooter</a></li>
                                <li><a href="{{route('sports')}}">Sport</a></li>
                                <li><a href="{{route('toys')}}">Toys</a></li>
                                <li><a href="{{route('car_holders')}}">Bicycle Car Holder</a></li>
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