@extends('layouts.app')
@section('content')
    
<main class="main">

        
    </nav><div class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <h2 class="light-title">Write <strong>Us</strong></h2>

                <form action="#">
                    <div class="form-group required-field">
                        <label for="contact-name">Name</label>
                        <input type="text" class="form-control" id="contact-name" name="contact-name" required>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="contact-email">Email</label>
                        <input type="email" class="form-control" id="contact-email" name="contact-email" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label for="contact-phone">Phone Number</label>
                        <input type="tel" class="form-control" id="contact-phone" name="contact-phone">
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="contact-message">What’s on your mind?</label>
                        <textarea cols="30" rows="1" id="contact-message" class="form-control" name="contact-message" required></textarea>
                    </div><!-- End .form-group -->

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div><!-- End .form-footer -->
                </form>
            </div><!-- End .col-md-8 -->

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
        </div><!-- End .row -->
    </div><!-- End .container -->

</main><!-- End .main -->

@endsection