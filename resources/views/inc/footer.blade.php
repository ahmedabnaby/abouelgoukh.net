<footer class="footer">
    <div class="instagram-box">
        <div class="instagram-follow">
            <div class="container">
                <i class="fab fa-instagram"></i>
                <div class="brand">
                    <h3>Follow Us on Instagram</h3>
                    <p>@abouelgoukh</p>
                </div>
            </div>
        </div>
        <div class="instagram-carousel owl-carousel owl-theme text-center" data-toggle="owl" data-owl-options="{
            'loop' : true,
            'nav': false,
            'dots': false,
            'margin' : 0,
            'autoHeight': true,
            'autoplay': true,
            'autoplayTimeout': 5000,
            'responsive': {
              '0': {
                'items': 2
              },
              '480': {
                'items': 3
              },
              '950': {
                'items': 4
              },
              '1200': {
                'items' : 5
              },
              '1500': {
                'items': 6
              }
            }
        }">
            <img src="{{asset('assets/images/instagram/instagram1.jpg')}}" alt="instagram image">
            <img src="{{asset('assets/images/instagram/instagram2.jpg')}}" alt="instagram image">
            <img src="{{asset('assets/images/instagram/instagram3.jpg')}}" alt="instagram image">
            <img src="{{asset('assets/images/instagram/instagram4.jpg')}}" alt="instagram image">
            <img src="{{asset('assets/images/instagram/instagram5.jpg')}}" alt="instagram image">
            <img src="{{asset('assets/images/instagram/instagram6.jpg')}}" alt="instagram image">
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="newsletter-widget">
                <i class="icon-envolope"></i>

                <div class="newsletter-info">
                    <h3>Get Special Offers and Savings</h3>
                    <p>Get all the latest information on Events, Sales and Offers.</p>
                </div>

                <form action="#" method="get">
                    <div class="submit-wrapper">
                        <input type="search" class="form-control" name="q" id="q" placeholder="Enter Your E-mail Address..." required="">
                        <button class="btn" type="submit">Sign Up</button>
                    </div><!-- End .header-search-wrapper -->
                </form>
            </div>

            <div class="social-icons">
                <a href="#" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="row row-sm">
                <div class="col-md-6 col-lg-3">
                    <img src="{{asset('assets/images/abouelgoukh/logo.png')}}">
                    <p>Contact Info.</p>
                    <div class="social-link">
                        <h3 class="link-title">QUESTIONS?</h3>
                        <a href="tel:+201017074766">+20 101-707-4766</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="light-title">Contact <strong>Details</strong></h2>
    
                    <div class="contact-info">
                        <div>
                            <i class="icon-phone"></i>
                            <p><a href="tel:+201017074766">01017074766 - Rehab 1 - the old market, shop No. -175</a></p>
                            <p><a href="tel:+201000481726">01000481726 - Al Rehab 2 - Eastern Market</a></p>
                            <p><a href="tel:+201005446710">01005446710 - Madinaty - Arabesque Mall</a></p>
                            <p><a href="tel:+201020787000">01020787000 - Maadi - El Lasilky Street شارع</a></p>
                        </div>
                        <div class="mt-3">
                            <i class="icon-mail-alt"></i>
                            <p class="mt-5"><a href="mailto:abouelgoukhonline@gmail.com">abouelgoukhonline@gmail.com</a></p>
                        </div>
                        <div class="mt-3">
                            <i class="icon-clock"></i>
                            <p class="mt-5">Mon-Fri - 08: 00-19: 00</p>
                        </div>
                    </div><!-- End .contact-info -->
                </div><!-- End .col-md-4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="widget">
                        <h3 class="widget-title">Abou El-Goukh</h3>
                        <div class="widget-content row row-sm">
                            <ul class="col-xl-6">
                                <li>
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('bicycles')}}">A-Store</a>
                                  </li>
            
            
                                <li><a href="{{route('about')}}">Abou El-Goukh</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                            <ul class="col-xl-6">
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Product Support</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom container">
        <p>Copyright © 2021 All rights reserved</p>
    </div>
</footer><!-- End .footer -->