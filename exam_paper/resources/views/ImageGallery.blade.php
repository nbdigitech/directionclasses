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
              <h2 class="title">Photo Gallery</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="{{route('Index')}}">Home</a></li>
                <li class="active text-theme-colored">Gallery / Images</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="separator separator-rouned">
              <i class="fa fa-cog"></i>
            </div>

            <div class="heading-line-bottom">
               <h4 class="heading-title"> School Gallery Images</h4>
            </div>

            <!-- Portfolio Gallery Grid -->
            <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix" data-lightbox="gallery">
              <!-- Portfolio Item Start -->
              @foreach($image as $row)
              <div class="gallery-item">
                <a href="{{url('/')}}/public/assets/uploads/{{$row->Image}}" data-lightbox="gallery-item" title="{{$row->Title}}"><img src="{{url('/')}}/public/assets/uploads/{{$row->Image}}" style="width: 400px; height: 300px;" alt=""></a>
              </div>
              @endforeach
              <!-- Portfolio Item End -->
            </div>
            <!-- End Portfolio Gallery Grid -->

          

                

            <!-- Portfolio Gallery Grid -->
        
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

@include('layouts.Footer')
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{url('/')}}/public/frontend/js/custom.js"></script>

</body>

<!-- Mirrored from thememascot.net/demo/personal/f/edupoints/v3/demo/photo-gallery-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 08:07:28 GMT -->
</html>