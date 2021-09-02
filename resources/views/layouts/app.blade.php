<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Abou El-Goukh</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Aboualjoukh - Aboualjoukh Website">
    <meta name="author" content="Aboualjoukh">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    
    
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
</head>
<body>
    @include('inc.navbar')
    @yield('content')
    @include('inc.footer')

    <!-- Add Cart Modal -->
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body add-cart-box text-center">
              <p>You've just added this product to the<br>cart:</p>
              <h4 id="productTitle"></h4>
              <img src="" id="productImage" width="100" height="100" alt="adding cart image">
              <div class="btn-actions">
                  <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                  <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
      <a href="https://api.whatsapp.com/send?phone=+20 1000481726" class="float2">
        <i class="fab fa-whatsapp my-float2" style="font-size:32px;"></i>
      </a>
  
      <!-- Plugins JS File -->
      <script src="{{asset('assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/js/plugins.min.js')}}"></script>
      <script src="{{asset('assets/js/plugins/isotope-docs.min.js')}}"></script>
  
      <!-- Main JS File -->
      <script src="{{asset('assets/js/main.min.js')}}"></script>
  </body>
  </html>