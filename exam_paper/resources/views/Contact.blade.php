@include('layouts.Header')
</head>
<body class="">
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="dfg"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
@include('layouts.Menu')

  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{url('/')}}/public/frontend/images/bg/bg6.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Contact</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-theme-colored">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Have Any Question -->
    <section class="divider">
      <div class="container pt-60 pb-60">
        <div class="section-title mb-60">
          <div class="row">
            <div class="col-md-12">
              <div class="esc-heading small-border text-center">
                <h3>Have any Questions?</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                <h4>Call Us</h4>
                <h6 class="text-gray">  771-2583935, 99810 08000, <br>
70009 55452, 93400 11349</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                <h4>Address</h4>
                <h6 class="text-gray" style="line-height: 20px;"> RING ROAD NO 1, NEAR SARONA BRIDGE, TATIBAND,RAIPUR CG 492099</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                <h4>Email</h4>
                <h6 class="text-gray">  counsellor@chanakyacommunitycollege.com
</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Contact -->
    <section data-bg-img="{{url('/')}}/public/frontend/images/pattern/p4.png"> 
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Contact</span> Us</h2>
            </div>
          </div>
        </div>
        <div class="section-content">          
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              @if(session()->has('success'))
            <div class="alert alert-success" style="background:#4BAF4E; color:white;">
                {{session()->get('success')}}
                <a href="#" class="close" data-dismiss="alert" area-label="close">x</a>
            </div>
            @endif
              <!-- Contact Form -->
              <form class="contact-form-transparent" action="{{route('Contact/Store')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name <small>*</small></label>
                      <input name="Name" class="form-control" type="text" required placeholder="Enter Name" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email <small>*</small></label>
                      <input name="Email" class="form-control required email" required type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Subject <small>*</small></label>
                      <input name="Subject" class="form-control required" type="text" placeholder="Enter Subject">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Phone</label>
                      <input name="Phone" required class="form-control" type="text" placeholder="Enter Phone">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Message</label>
                  <textarea name="Message" required class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                </div>
                <div class="form-group">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-dark btn-theme-colored btn-flat btn-block" data-loading-text="Please wait...">Send your message</button>
                </div>
              </form>
              
              <!-- Contact Form Validation-->
          

            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">

          <!-- Google Map HTML Codes -->
      
          <div class="map-popupstring hidden" id="popupstring1">
            <div class="text-center">
              <h3>ThemeMascot Office</h3>
              <p>121 King Street, Melbourne Victoria 3000 Australia</p>
            </div>
          </div>
          <!-- Google Map Javascript Codes -->
          <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
          <script src="js/google-map-init.js"></script>

        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
@include('layouts.Footer')
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{url('/')}}/public/frontend/js/custom.js"></script>

</body>

<!-- Mirrored from thememascot.net/demo/personal/f/edupoints/v3/demo/page-contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 08:00:53 GMT -->
</html>