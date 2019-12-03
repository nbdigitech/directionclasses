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
      <div class="container pt-100 pb-100">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Popular Courses</h2>
              <ol class="breadcrumb text-center mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-theme-colored">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: -->
    <section>
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
              <h2 class="text-center line-height-1 mt-0">Popular <span class="text-theme-colored3">Courses</span> </h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus hic suscipit doloremque deleniti ipsa quia dolor laborum natus tenetur, excepturi?</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
            <div class="col-md-12">
              <div class="horizontal-tab-centered">
                <div class="text-center">
                  <ul class="nav nav-pills mb-10">
                    <li class="active"> <a href="#tab-20" class="" data-toggle="tab" aria-expanded="false"> <i class="fa fa-graduation-cap" aria-hidden="true"></i>Faculty of Arts</a> </li>
                    <li class=""> <a href="#tab-21" data-toggle="tab" aria-expanded="false"> <i class="fa fa-leanpub"></i>Faculty of Commerce</a> </li>
                    <li class=""> <a href="#tab-22" data-toggle="tab" aria-expanded="true"> <i class="fa fa-book"></i>Faculty of Science</a> </li>
                    <li class=""> <a href="#tab-23" data-toggle="tab" aria-expanded="false"> <i class="fa fa-certificate"> </i>Postgraduate</a> </li>
                    <li class=""> <a href="#tab-24" data-toggle="tab" aria-expanded="false"> <i class="fa fa-university" aria-hidden="true"></i>Research Higher Degree</a> </li>
                  </ul>
                </div>
                <div class="panel-body p-0">
                  <div class="tab-content p-0">
                    <div class="tab-pane fade active in" id="tab-20">
                      <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <div class="services mb-xs-30">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/1.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">Anthropology</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left xs-pull-left  sm-pull-none sm-text-center">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right sm-pull-none xs-pull-right sm-text-center mt-sm-10 mt-xs-0">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left sm-pull-none xs-pull-left sm-text-center flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                  <li class="text-theme-colored pull-right sm-pull-none xs-pull-right sm-text-center flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                          <div class="services mb-xs-30">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/2.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">Philosophy</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left xs-pull-left sm-pull-none sm-text-center">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right xs-pull-right sm-pull-none sm-text-center mt-sm-10 mt-xs-0">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left sm-pull-none sm-text-center flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                  <li class="text-theme-colored pull-right sm-pull-none sm-text-center flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                          <div class="services mb-xs-30">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/3.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">Public Policy</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left xs-pull-left sm-pull-none sm-text-center">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right xs-pull-right sm-pull-none sm-text-center mt-sm-10 mt-xs-0">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left xs-pull-left sm-pull-none sm-text-center flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                  <li class="text-theme-colored pull-right xs-pull-right sm-pull-none sm-text-center flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                          <div class="services">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/4.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">Sociology</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left xs-pull-left sm-pull-none sm-text-center">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right xs-pull-right sm-pull-none sm-text-center mt-sm-10 mt-xs-0">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left xs-pull-left sm-pull-none sm-text-center flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                  <li class="text-theme-colored pull-right xs-pull-right sm-pull-none sm-text-center flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-21">
                      <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/5.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Accounting</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/6.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Finance and Tax</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/7.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">School of Management</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-22">
                      <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/10.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Biochemistry</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/7.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Physics</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/8.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Chemistry</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/9.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Mathematics</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">4 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-23">
                      <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/1.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Molecular Imaging</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">1.5 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">40</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/2.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Bioinformatics</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">1.5 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">40</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/3.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Data Science</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">2 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">50</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/4.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Mineral Resources</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">2 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">50</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-24">
                      <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/5.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Plant Biology</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">48 weeks</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/6.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">Geology</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">40 weeks</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                          <div class="services mb-sm-50">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project/7.jpg">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1"><a href="#">School of Management</a></h4>
                                <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Learn Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: -->
    <section data-bg-img="{{url('/')}}/public/frontend/images/bg/bg6.jpg">
      <div class="container-fluid p-0">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 bg-theme-colored">              
              <h3 class="text-center line-height-1 text-white mt-100 mb-15 mt-sm-0 pt-sm-100">Our Client's Say</h3>
              <div class="owl-carousel-1col pr-150 pl-150 pr-sm-50 pl-sm-50 pb-90" data-dots="true">
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="content">
                      <i class="fa fa-quote-left text-theme-colored2 font-42 mt-15 mb-10 mb-sm-0"></i>
                      <a class="mt-20 mb-15 display-block" href="#">
                        <img alt="" src="{{url('/')}}/public/frontend/images/testimonials/2.jpg" class="img-circle">
                      </a>
                      <p class="mb-sm-10 text-white-f3">Lorem Ipsum has been the industry's standard dummy text ever, when an took a galley of type and it to make a type book.It has survived the leap into</p>
                      <h4 class="service-box-title font-weight-800 text-white-f3">Corvin Adams</h4>
                      <span class="text-theme-colored2 font-14 font-weight-600 mt-5 mt-sm-0">web Desinger (ceo)</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="content">
                      <i class="fa fa-quote-left text-theme-colored2 font-42 mt-15 mb-10 mb-sm-0"></i>
                      <a class="mt-20 mb-15 display-block" href="#">
                        <img alt="" src="{{url('/')}}/public/frontend/images/testimonials/1.jpg" class="img-circle">
                      </a>
                      <p class="mb-sm-10 text-white-f3">Lorem Ipsum has been the industry's standard dummy text ever, when an took a galley of type and it to make a type book.It has survived the leap into</p>
                      <h4 class="service-box-title font-weight-800 text-white-f3">Jhon Doe</h4>
                      <span class="text-theme-colored2 font-14 font-weight-600 mt-5 mt-sm-0">Web Developer (Maneger)</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="content">
                      <i class="fa fa-quote-left text-theme-colored2 font-42 mt-15 mb-10 mb-sm-0"></i>
                      <a class="mt-20 mb-15 display-block" href="#">
                        <img alt="" src="{{url('/')}}/public/frontend/images/testimonials/2.jpg" class="img-circle">
                      </a>
                      <p class="mb-sm-10 text-white-f3">Lorem Ipsum has been the industry's standard dummy text ever, when an took a galley of type and it to make a type book.It has survived the leap into</p>
                      <h4 class="service-box-title font-weight-800 text-white-f3">Corvin Adams</h4>
                      <span class="text-theme-colored2 font-14 font-weight-600 mt-5 mt-sm-0">Web Desinger (QC)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section:  -->
    <section>
      <div class="container pb-sm-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1">Faculty <span class="text-theme-colored3">Members</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Acque quidem eaque, amet doloribus, error inventore, quisquam totam magni cumque.</p>
            </div>
          </div>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-sm-6 col-md-3 mb-sm-30">
              <div class="team-block bg-light pt-10 pb-15">
                <div class="team-thumb"><img class="img-fullwidth" src="{{url('/')}}/public/frontend/images/team/1.png" alt="">
                </div>
                <div class="info">
                  <div class="pt-10 pb-10 bg-theme-colored2">
                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                  </div>
                  <p class="p-15 pb-0">Lorem ipsum dolor sit amet cing, consectetur adipisi. Vel consectetur.</p>
                  <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-15 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-30">
              <div class="team-block bg-light pt-10 pb-15">
                <div class="team-thumb"><img class="img-fullwidth" src="{{url('/')}}/public/frontend/images/team/2.png" alt="">
                </div>
                <div class="info">
                  <div class="pt-10 pb-10 bg-theme-colored">
                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                  </div>
                  <p class="p-15 pb-0">Lorem ipsum dolor sit amet cing, consectetur adipisi. Vel consectetur.</p>
                  <ul class="styled-icons icon-theme-colored3 icon-circled icon-dark icon-sm mt-15 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-30">
              <div class="team-block bg-light pt-10 pb-15">
                <div class="team-thumb"><img class="img-fullwidth" src="{{url('/')}}/public/frontend/images/team/3.png" alt="">
                </div>
                <div class="info">
                  <div class="pt-10 pb-10 bg-theme-colored3">
                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                  </div>
                  <p class="p-15 pb-0">Lorem ipsum dolor sit amet cing, consectetur adipisi. Vel consectetur.</p>
                  <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-15 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-30">
              <div class="team-block bg-light pt-10 pb-15">
                <div class="team-thumb"><img class="img-fullwidth" src="{{url('/')}}/public/frontend/images/team/4.png" alt="">
                </div>
                <div class="info">
                  <div class="pt-10 pb-10 bg-theme-colored">
                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                  </div>
                  <p class="p-15 pb-0">Lorem ipsum dolor sit amet cing, consectetur adipisi. Vel consectetur.</p>
                  <ul class="styled-icons icon-theme-colored2 icon-circled icon-dark icon-sm mt-15 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
@include('layouts.Footer')
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="{{url('/')}}/public/frontend/js/custom.js"></script>

</body>

<!-- Mirrored from thememascot.net/demo/personal/f/edupoints/v3/demo/page-courses1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 08:01:05 GMT -->
</html>