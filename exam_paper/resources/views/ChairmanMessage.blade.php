
@include('layouts.Header')
</head>
<body class="">
<div id="wrapper">
  <!-- preloader -->

  
@include('layouts.Menu')
  <div class="main-content">
<section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{url('/')}}/public/frontend/images/bg/bg6.jpg" style="height: 300px;">
      <div class="container pt-100 pb-100">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Chairman's Message</h2>
              <ol class="breadcrumb text-center mt-10">
                <li><a href="{{route('Index')}}">Home</a></li>
                
                <li class="active text-theme-colored">Chairman's Message</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>    
    
    <section id="about">
      <div class="container pb-90 pb-sm-90">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-8 col-md-8">
              <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">Chairman's<span class="text-theme-colored3"> Message</span></h2>
              
              
              <p class="font-15">We invite parents and other members of community to work with us to deliver a meaningful education to our students. <br><br> We encourage students to intern as a trainee in various social and commercial organizations so that they can learn practical skills on job. We encourage parents to attend joint training sessions along with their children.
</p>

<br><br>
<h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">About Chairman</h2>
 <img src="http://chanakyacommunitycollege.com/public/frontend/images/subhash_sindhwani.jpg" style="float: left; padding-right: 20px; margin-top: 5px;">
              <p style="text-align: justify;">Dr Wg Cdr Subhash Sindhwani,     took premature voluntary retirement,  after  20 years of excellent service  in Indian Air Force, Defense Research and Development, Defense production Organization, to start his second career as an entrepreneur.   Apart from his business ventures,  he  founded Chanakya Academy in 1993.     However   he  gave up his all business interest in 2010 and  set up    Chanakya Community College – community college scheme was introduced by IGNOU as major reform to push through National Skill Qualification Framework to make education skill based and employment oriented.  He moved to USA in 2014 and started Stepsure LLC a consulting company to facilitate  technology transfer from USA to India.    Chanakya Public School was setup in 2019. <br><br>
His 45 years of  career developed as a Manager, Trainer, Consultant, Entrepreneur and finally as a Social Entrepreneur.   He is currently   engaged in research into Vedanta,  an ancient Indian philosophy  which is increasingly being realized  as true and  that the world as we see and experience,  emerges in human  brain.    Universal Consciousness – Sat Chit Anand – manifests in various forms and is accessible to all of us. He  is  deeply interested in Science and Spirituality and is engaged in finding answers to  basic questions of life –  why we here and what is the purpose of our life.  An avid Golfer, voracious reader and keen bridge player, Subhash divides his time between USA and India. 
</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="mt-0 mb-0 pt-15 pb-15 text-white text-center bg-theme-colored">Enquiry Now</h3>
             <div class="p-20 bg-gray-lighter form-boxshadow">
                <!-- Appilication Form Start-->
                @if(session()->has('success'))
              <div class="alert alert-success" style="background-color:#4BAF4E;color:white;">
                {{session()->get('success')}}
                <a href="#" class="close" aria-label="close" data-dismiss="alert">x</a>
              </div>
              @endif
                <!-- Appilication Form Start-->
                <form action="{{route('Enquiry/Store')}}" method="post">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <input placeholder="Enter Name" type="text" id="reservation_name" name="Name" required class="form-control" required>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <input placeholder="Email" type="email" required id="reservation_email" name="Email" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <input placeholder="Contact" type="text" id="reservation_phone" name="Phone" class="form-control" required>
                      </div>
                    </div>
                  
                   
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea placeholder="Enter Message" rows="2" class="form-control required" name="Message" id="form_message" aria-required="true" required></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-0 mt-10">
                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                        <button type="submit" class="btn btn-theme-colored btn-lg btn-block" data-loading-text="Please wait...">Submit Request</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- Application Form End-->

                <!-- Application Form Validation Start-->
                <script type="text/javascript">
                  $("#reservation_form").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({
                        dataType:  'json',
                        success: function(data) {
                          if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                </script>
                <!-- Application Form Validation Start -->
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

<!-- Mirrored from thememascot.net/demo/personal/f/edupoints/v3/demo/page-about2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 08:00:52 GMT -->
</html>