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
  
@include('layouts.Menu')
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{url('/')}}/public/frontend/images/bg/bg6.jpg">
      <div class="container pt-100 pb-100">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Event</h2>
              <ol class="breadcrumb text-center mt-10">
                <li><a href="{{route('Index')}}">Home</a></li>
                
                <li class="active text-theme-colored">Event</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-posts">
              <div class="col-md-12">
                <div class="row list-dashed">
            @foreach($news as $row)
              
                  <article class="post clearfix mb-30 pb-30">
                    <div class="row">
                      <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="{{url('/')}}/public/assets/uploads/{{$row->Image}}" alt="" class="img-responsive img-fullwidth"> 
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="entry-content border-1px p-20 pr-10">
                      <div class="entry-meta media mt-0 no-bg no-border">
                       
                        <div class="media-body pl-15">
                          <div class="event-content pull-left flip" style="margin-left:-10px; ">
                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="blog-single-right-sidebar.html">{{$row->Title}}</a></h4>
                          </div>
                          
                        </div>
                        
                      </div>
                      <p class="mt-10">
                        {!! $row->Description !!}
                      </p>

                      <!-- <a href="#" class="btn-read-more">Read more</a> -->
                      <br>
                      <a href="{{url('/')}}/public/assets/uploads/{{$row->PDF}}"">Download PDF File</a>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                    </div>
                  </article>
          @endforeach
                 
                </div>
              </div>
              <div class="col-md-12">
                <nav>
                  <ul class="pagination theme-colored">
                    <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a> </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a> </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-3">
         
          </div>
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

<!-- Mirrored from thememascot.net/demo/personal/f/edupoints/v3/demo/blog-classic-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 08:01:12 GMT -->
</html>