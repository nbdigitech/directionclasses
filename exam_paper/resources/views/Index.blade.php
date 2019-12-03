@include('layouts.Header')

<style>
.chanakya_public_school{
            margin-top:-50px;
            padding-bottom:50px;
        }

  .mrd{
        margin-top: 80px;
    }
    
    #about_img{
        height:350px;
    }

    @media(max-width:768px){
    
        .chanakya_public_school{
            margin-top:-100px;
        }
        .mrd{
            margin-top:30px;
            padding-right:10px;
        }
     #about_img{
        height:200px;
        width:100%;
        margin-bottom:-50px;
    }   
       
    }
</style>
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  
  <!-- Header -->
@include('layouts.Menu')
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>

               <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{url('/')}}/public/frontend/images/Banner.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="{{url('/')}}/public/frontend/images/Banner.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"  class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-2-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['200','195','160','160']" 
                  data-fontsize="['60','50','40','35']"
                  data-lineheight="['80','75','70','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 400px; max-width: 400px; white-space: normal;">CHANAKYA - <span class="text-theme-colored2"> AN INNOVATOR</span>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0 mrd" 
                  id="slide-2-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['290','260','220','220']"
                  data-fontsize="['16','16',16',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"> CHANAKYA ACADEMY, an institution, with more than 25 years of experience in education.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-2-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['361','321','281','295']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><!-- <a href="#" class="btn btn-dark btn-theme-colored btn-lg">Help Save Acres</a> <a href="#" class="btn btn-dark btn-theme-colored btn-lg">Join Us</a> -->
                </div>
              </li>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{url('/')}}/public/frontend/images/slider-1.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="{{url('/')}}/public/frontend/images/slider-1.jpg" alt="" data-bgposition="center center" width="80%" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['200','195','160','150']" 
                  data-fontsize="['60','50','40','35']"
                  data-lineheight="['80','75','70','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">We have Experienced   <span class="text-theme-colored2">Teachers</span> & Mentors
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['290','260','220','220']"
                  data-fontsize="['18','18',18',18']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; margin-top:90px;">We, at Chanakya Public School look at children as individuals and not as a class. <br>We groom and nourish each child independently.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['361','321','281','295']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><!-- <a href="#" class="btn btn-dark btn-theme-colored btn-lg">Help Save Acres</a> <a href="#" class="btn btn-dark btn-theme-colored btn-lg">Join Us</a> -->
                </div>
              </li>

              <!-- SLIDE 2 -->
             

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{url('/')}}/public/frontend/images/SPS_175.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="{{url('/')}}/public/frontend/images/SPS_175.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-3-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.55);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['200','195','160','130']" 
                  data-fontsize="['60','50','40','35']"
                  data-lineheight="['80','75','70','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">We Believe- <span class="text-theme-colored2">Smarter the Brain..</span> Smarter You Are
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['290','260','220','220']"
                  data-fontsize="['16','16',16',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; margin-top:90px;">School incorporates Art and Brain program in it’s curriculum to ensure that child
engages in <br> brain development activities along with a program to develop Art in it’s 
various forms  such <br>  as music, painting, sketching, dancing and drama etc as these are
expressions of life.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-3-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['361','321','281','295']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><!-- <a href="#" class="btn btn-dark btn-theme-colored btn-lg">Help Save Acres</a> <a href="#" class="btn btn-dark btn-theme-colored btn-lg">Join Us</a> -->
                </div>
              </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script>
          var tpj=jQuery;         
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[700,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->
      </div>
    </section>

    <!-- Section: welcome -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner mt-sm-0" data-margin-top="-150px">
            <div class="col-sm-4 col-md-4 pr-0 pr-sm-0 pl-sm-15 pr-xs-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto">
                <div class="bg-theme-colored text-center sm-text-center mb-sm-10 p-30 pt-40 pb-40">
                  <div class="media-body">
                    <h3 class="heading text-white mt-0">Student Centered Learning</h3>
                    <p class="text-white">We understand that different individuals have different aptitudes.</p>
                    <a data-toggle="modal" data-target="#student_centered" class="btn btn-md btn-sm btn-default mt-10 no-border">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div id="student_centered" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:13px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px;">Student  <span class="text-theme-colored3">  Centered Learning</span></h2>
                             <img src="{{url('/')}}/public/frontend/images/student learning.jpg">
                             
                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                              <b>Using Multiple Intelligence Theory _</b>
                              We understand that different individuals have different aptitudes. Our faculty utilises the Multiple Intelligence Theory of Dr. Howard Gardner to make its teaching more effective and clear. We understand that every child can be benefitted by the implementation of some or the other intelligence. 
<br><br>
By using the strongest aptitudes or 'intelligences' as a starting point, our educators educate more effectively by teaching different students the same topic in different ways, according to their particular 'intelligences'. Through this, each student is given an opportunity to come at par with what is required. 
<br><br>
Special classes for weaker students, and helping those who need special attention, in one or the other subject, leads to an overall, broad and complete educational experience by the child.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



            <div class="col-sm-4 col-md-4 pl-0 pr-0 pr-sm-0 pl-sm-0 pr-xs-15 pl-xs-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto">
                <div class="bg-theme-colored2 text-center sm-text-center mb-sm-10 p-30 pt-40 pb-40">
                  <div class="media-body">
                    <h3 class="heading text-white mt-0">Brain Development</h3>
                    <p class="text-white">Center for Brain Health Training is an
active part of our program.</p>
                    <a data-toggle="modal" data-target="#brain_development" class="btn btn-md btn-sm btn-default mt-10 no-border">Read More</a>
                  </div>
                </div>
              </div>
            </div>
             <div id="brain_development" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:13px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px;">Brain <span class="text-theme-colored3">Development</span></h2>
                             <img src="{{url('/')}}/public/frontend/images/braindevelopment.jpg">
                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                              Brain develops from 2 years to 18  years of age while the child is in school - though children develop at  their own pace  but there is a window of opportunity to intervene to ensure that a skill is learnt at a particular age.  It is believed that a skill is better learnt at the specified age. <br><br>
                            Brain is plastic – it has various stages of development and there is a window for developing a particular capability of brain and therefore our training programs ensure that brain capabilities are developed at the right opportunity because once that opportunity is missed, it is lost for ever. Center for Brain Health Training is an active part of our program.


                            </p>
                          </div>
                        </div>
                      </div>
                  </div>



            <div class="col-sm-4 col-md-4 pl-0 pr-sm-15 pl-sm-0 pl-xs-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto">
                <div class="bg-theme-colored3 text-center sm-text-center mb-sm-10 p-30 pt-40 pb-40">
                  <div class="media-body">
                    <h3 class="heading text-white mt-0">Life Skills</h3>
                    <p class="text-white">Life skills training is an efficacious tool for empowe youth to act responsibly.</p>
                    <a data-toggle="modal" data-target="#life_skill" class="btn btn-md btn-sm btn-default mt-10 no-border">Read More</a>
                  </div>
                </div>
              </div>
            </div>


               <div id="life_skill" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:13px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px;">Life  <span class="text-theme-colored3">Skills</span></h2>
                             <img src="{{url('/')}}/public/frontend/images/lifeskill.jpg">
                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                           The School Cinema Programme teach life skills through an extremely innovative and entertaining medium of movies and role plays. 
<br><br>
Life skills training is an efficacious tool for empowering the youth to act responsibly, take initiative and take control of their lives. Life skills include psycho-social competencies and inter personal skills that help children make decisions, solve problems, think deeply, communicate effectively, build healthy relationships, empathy with others and cope with managing their lives in a healthy and productive manner. 
<br><br>
Methods like class discussions, story telling, brainstorming, role plays, audio-visual activities etc. engages and compels them to think innovatively and gradually evolve themselves in this section. We encourage young people to learn from their environment by observing how others behave and what consequences arise from their behavior. Thus, teaching outside the classroom becomes as important as that within the walls. 
<br><br>
Excursions, field trips and visits to various organizations like old age home, blind school etc. are conducted for this purpose. Learning, thus, becomes not only a fun filled activity, but also enriching one.
                            </p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>


    <!-- Section: About  -->
    <section id="about">
      <div class="container pb-90 pb-sm-90">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-7 col-md-8">
              <h2 class="mt-0 line-height-1 line-bottom-edu">Chanakya<span class="text-theme-colored3"> Public School</span></h2>
             
              <p class="lead mb-10">Chanakya: a journey of 25 years</p>
              <p>CHANAKYA ACADEMY, an institution, with more than 25 years of experience in education. An opportunity for your child to experience global education at affordable price (CBSE affiliation).
</p>
              <div class="row sm-text-center">
                <div class="col-sm-6 col-md-6">
                  <div class="about-thumb">
                    <img src="{{url('/')}}/public/frontend/images/about/1.jpg" class="mt-5" alt="">
                  </div>
                  <div class="mb-15">
                    <h4 class="font-raleway font-weight-700 mt-15"><a>Our <span class="text-theme-colored3">Mission</span></a></h4>
                    <p style="text-align: justify;">“We would  help, guide and mentor   students and community members   to  acquire knowledge, develop  life and vocational  skills,  imbibe values  such as humility, compassion, creativity, articulation, cooperation, reasoning  and  leadership  to transform them   into  fulfilled  economically strong beings  equipped with scientific outlook based on reasoned  faith and co existence.” </p> 
                    
                  </div>
                </div>
                <div class=" col-sm-6 col-md-6">
                  <div class="about-thumb">
                    <img src="{{url('/')}}/public/frontend/images/about/2.jpg" class="mt-5" alt="" width="100%">
                  </div>
                  <div class="mb-15">
                    <h4 class="font-raleway font-weight-700 mt-15"><a>Our <span class="text-theme-colored3">Vision</span></a></h4>
                    <p style="text-align: justify;">We, at Chanakya Public School look at children as individuals and not as a class.
We groom and nourish each child independently, for all require distinct attention. We
build an atmosphere where each child explores multiple activities, and experiences
challenges to find his own strengths. Chanakya is an institution that looks beyond
imparting just knowledge.</p>
                    <!-- <a class="btn btn-colored btn-sm btn-circled btn-theme-colored mt-5" href="page-about1.html">Read more</a> -->
                  </div>
                </div>
              </div>
            </div> <br><br><br>
            <div class="col-sm-5 col-md-4">
              <h2 class="mt-0 mt-xs-20 line-height-1 line-bottom-edu"><span></span> Facilities</h2>
              <div class="bxslider bx-nav-top" data-minslides="5" >
                

                <div class="event media mt-0 no-bg no-border">
                  <div style="height: 30px; text-align: center;  width: 30px; line-height: 30px; font-weight: bold; float: left; background-color: #0B4779; color:white; border-radius: 50px;">
                    1.
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <p class="mb-5">
                      Air conditioned,  State of Art classrooms and well equipped Labs.
                      </p>
                    </div>
                  </div>
                </div>


                <div class="event media mt-0 no-bg no-border">
                  <div style="height: 30px; text-align: center;  width: 30px; line-height: 30px; font-weight: bold; float: left; background-color: #0B4779; color:white; border-radius: 50px;">
                    2.
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <p class="mb-5">
                        STEAM- SCIENCE, TECHNOLOGY, ENGINEERING, ART, MATHEMATICS - A new focus to holistic learning based on tools and approaches developed in USA

                      </p>
                    </div>
                  </div>
                </div>


                <div class="event media mt-0 no-bg no-border">
                  <div style="height: 30px; text-align: center;  width: 30px; line-height: 30px; font-weight: bold; float: left; background-color: #0B4779; color:white; border-radius: 50px;">
                    3.
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <p class="mb-5">
                      BRAIN DEVELOPMENT - Using the window of opportunity to ensure Brain development at different age/ stage.
                      </p>
                    </div>
                  </div>
                </div>



                <div class="event media mt-0 no-bg no-border">
                  <div style="height: 30px; text-align: center;  width: 30px; line-height: 30px; font-weight: bold; float: left; background-color: #0B4779; color:white; border-radius: 50px;">
                    4.
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <p class="mb-5">
                      Experienced and talented faculty act as a facilitator.
                      </p>
                    </div>
                  </div>
                </div>



                <div class="event media mt-0 no-bg no-border">
                  <div style="height: 30px; text-align: center;  width: 30px; line-height: 30px; font-weight: bold; float: left; background-color: #0B4779; color:white; border-radius: 50px;">
                    5.
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <p class="mb-5">
                      Small class room strength; child oriented learning.
                      </p>
                    </div>
                  </div>
                </div>



                <div class="event media mt-0 no-bg no-border">
                  <div style="height: 30px; text-align: center;  width: 30px; line-height: 30px; font-weight: bold; float: left; background-color: #0B4779; color:white; border-radius: 50px;">
                    6.
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <p class="mb-5">
                      GLOBAL CONNECT - Our programs are designed keeping global needs in mind.
                      </p>
                    </div>
                  </div>
                </div>



                <div class="event media mt-0 no-bg no-border">
                  <div style="height: 30px; text-align: center;  width: 30px; line-height: 30px; font-weight: bold; float: left; background-color: #0B4779; color:white; border-radius: 50px;">
                    7.
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <p class="mb-5">
                        SPORTS - We encourage our students to adopt at least one sport.
                      </p>
                    </div>
                  </div>
                </div>


                <div class="event media mt-0 no-bg no-border">
                  <div style="height: 30px; text-align: center;  width: 30px; line-height: 30px; font-weight: bold; float: left; background-color: #0B4779; color:white; border-radius: 50px;">
                    8.
                  </div>
                  <div class="media-body">
                    <div class="event-content pull-left flip pl-20 pl-xs-10">
                      <p class="mb-5">
                       Closer interaction with Parents.
                      </p>
                    </div>
                  </div>
                </div>



               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Mission -->
   <section id="about" class="chanakya_public_school">
      <div class="container pb-0 pb-sm-90">
        <div class="section-content">
          <div class="row">
              <h2 class="mt-0 line-height-1 line-bottom-edu">A Global School based on<span class="text-theme-colored3"> Waldorf School Educational approach</span></h2>

            <div class="col-sm-6 col-md-6">
              <p class="font-18"> We ensure to develop pupils' intellectual, artistic, and practical skills in an integrated and holistic manner, focusing on the overall development of the child, by giving him an environment that nurtures and instill strong values of dignity, decency and respect for human life. <br><br> We believe in nurturing and enriching the mind and soul of the child. This is why we lay such strong emphasis on looking beyond the set parameters of bookish education.

               </p>
              
              
              <!-- 
              <a class="btn btn-default btn-circled btn-xl mt-10 mb-sm-30" href="{{route('Contact')}}">Contact us</a> -->
            </div>
            <div class="col-sm-6 col-md-6">
              <img src="{{url('/')}}/public/frontend/images/about/about.png" alt="about" id="about_img">
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- END REVOLUTION SLIDER -->
        <script>
          var tpj=jQuery;         
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[900,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->
      </div>
    </section>

    <!-- Section: free-registration  -->
       <section class="bg-silver-light">
      <div class="container pb-70 pb-sm-60">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-center line-height-1 mt-0">Infrastructure <span class="text-theme-colored3"> Facilities</span></h2>
              <p class="text-center">Modern
infrastructure, continuous realignment of curriculum, pedagogy and committed and
skilled teachers are the ingredients of Chanakya - the new era school.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <h3 class="mt-0 mb-0 pt-15 pb-15 text-white text-center bg-theme-colored">Enquire Now</h3>
             <div class="p-20 bg-gray-lighter form-boxshadow">
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
                
                <!-- Application Form Validation Start -->
             </div>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-sm-4 col-md-4">
                  <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-40 pb-20 mb-40" style="cursor: pointer;">
                    <a data-target="#computer_lab" data-toggle="modal" class="icon icon-circled icon-md flip mb-20"> 
                      <i class="fa fa-desktop font-32 text-white"></i> 
                    </a>
                    <a data-target="#computer_lab" data-toggle="modal"><h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">Computer Lab</h3></a>

             <div id="computer_lab" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:5px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px; text-align: left;">Computer  <span class="text-theme-colored3">Lab</span></h2>
                             <!-- <img src="{{url('/')}}/public/frontend/infrastructure/computer_lab.png"> --><img src="{{url('/')}}/public/frontend/infrastructure/computer_lab.png">
                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                         A well integrated Computer lab with the latest softwares for enabling young students learn english language better, also helping them assess basic math and comprehend elementary science. 

                         <br><br>

                         Well trained faculties also help students nurture young scientific ambitions through various robotic programs, science and maths labs which are updated with the latest programs and softwares especially designed to facilitate young students learning.
                                                        </p>
                          
                          </div>
                        </div>
                    </div>
                </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4">
                  <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-40 pb-20 mb-40" style="cursor: pointer;">
                    <a data-toggle="modal" data-target="#holistic_education" class="icon icon-circled icon-md flip mb-20" data-toggle="modal" data-target="#holistic_education">
                      <i class="fa fa-music font-32 text-white"></i> 
                    </a>
                    <a data-toggle="modal" data-target="#holistic_education">
                    <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">
                      Dance Art & Music
                    </h3>
                    </a>
                   
                     <div id="holistic_education" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:5px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px; text-align: left;"> Dance   <span class="text-theme-colored3">Art and Music</span></h2>
                             <img src="{{url('/')}}/public/frontend/infrastructure/art_music.png">

                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                      Dance Art and Music has a very special connection with learning curve which is why this becomes an integral part of our curriculum among other elements significant to cognitive learning. <br><br> Experienced teachers in this  section enables not only in the recognition of the inner talents but also in the proper channelization of various talent forms in children to get the best out them and make them flourish in all realms of our curriculum.
                               </p>
                          </div>
                        </div>
                    </div>
                </div>





                  </div>
                </div>
                <div class="col-sm-4 col-md-4">
                  <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-40 pb-20 mb-40" style="cursor: pointer;">
                    <a data-toggle="modal" data-target="#myModal" class="icon icon-circled icon-md flip mb-20">
                      <i class="fa fa-futbol-o font-32 text-white"></i> 
                    </a>
                    <a data-toggle="modal" data-target="#myModal"><h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">Sports</h3></a>

                     <div id="myModal" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:5px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px; text-align: left;">  <span class="text-theme-colored3">Sport</span></h2>
                             <img src="{{url('/')}}/public/frontend/images/sport_popup.png">
                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                        

                        The school spots  out the latent talents of students and  coaches   the  students  to  enable them to  participate in various  indoor and outdoor games.  Ample opportunities are provided for the development of a harmonious personality.  Activities include - Elocution, Rock Climbing, River Crossing, Burma, Dance, Music, Quizzes, Poster making,  extempore Recitation and many more.<br><br>
The Sports Academy  focuses on both indoor as well as outdoor sports.   Karate, Yoga, Gymnastics, Kho-Kho, Cricket & Football are just a few of them.

                                                        </p>
                          
                          </div>
                        </div>
                    </div>
                </div>
                  </div>
                </div> 
              </div>
              <div class="row">
                <div class="col-sm-4 col-md-4">
                  <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-40 pb-20 mb-40" style="cursor: pointer;">
                    <a data-toggle="modal" data-target="#digital_library" class="icon icon-circled icon-md flip mb-20"> 
                      <i class="fa fa-book font-32 text-white"></i> 
                    </a>
                    <a data-toggle="modal" data-target="#digital_library"><h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">Digital Library</h3></a>
                     <div id="digital_library" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:5px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px; text-align: left;">Digital  <span class="text-theme-colored3">Library</span></h2>
                             <img src="{{url('/')}}/public/frontend/infrastructure/digital_library.png">
                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                              With the advancing technology and the need to keep pace with the ever increasing demands even among young students we have devised a state of the art digital library which not only caters to students studying needs but also acts as a creative room to ignite young innovative ideas of young intellects.

                         <!-- A well integrated Computer lab with the latest softwares for enabling young students learn english language better, also helping them assess basic math and comprehend elementary science.  -->

                         <br>
                         </p>
                          
                          </div>
                        </div>
                    </div>
                </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4">
                  <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-40 pb-20 mb-40" style="cursor: pointer;">
                    <a data-target="#playschool" data-toggle="modal" class="icon icon-circled icon-md flip mb-20">
                      <i class="fa fa-podcast font-32 text-white"></i> 
                    </a>
                    <a data-toggle="modal" data-target="#playschool"><h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">PlaySchool Classroom</h3>
                    </a>
                     <div id="playschool" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:5px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px; text-align: left;">PlaySchool  <span class="text-theme-colored3">Classroom</span></h2>
                             <img src="{{url('/')}}/public/frontend/infrastructure/play_school.png">
                             

                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                        Carefully furnished play school classrooms have been designed by special interior designers with good understanding of child psychology to give the young champions appropriate and adequate learning space where learning is not just another task but is fun filled activity. 
                        </p>
                          
                          </div>
                        </div>
                    </div>
                </div>





                  </div>
                </div>
                <div class="col-sm-4 col-md-4">
                  <div class="icon-box-new bg-white text-center clearfix m-0 pr-20 pl-20 pt-40 pb-20 mb-40" style="cursor: pointer;">
                    <a data-toggle="modal" data-target="#audio_visual" class="icon icon-circled icon-md flip mb-20">
                      <i class="fa fa-audio-description font-32 text-white"></i> 
                    </a>
                    <a data-toggle="modal" data-target="#audio_visual"><h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">Smart Class Room</h3></a>

                    <div id="audio_visual" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:5px;"></i></a>
                            <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px; text-align: left;">Smart  <span class="text-theme-colored3">Class Room</span></h2>
                            <img src="{{url('/')}}/public/frontend/infrastructure/audio_visual.png">
                            <br><br>
                            <p style="text-align: left;">Project based learning demands a need for well set smart class room for the young talents. Spacious and futuristic design helps enable various presentations and workshops to be conducted smartly and is captivating enough to generate curiosity and develop interest.</p>
                             
                            
                        </p>
                          
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
    <section class="bg-theme-colored">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-white text-center line-height-1 mt-0">Admission Criteria :</h2>
              <p class="text-white-f2 text-center">
              Minimum Age (as on 1st April of Admission Year): <br>
Nursery - 2 Years , LKG - 3 Years, UKG - 4 Years. <br>
From Class I onwards there will be a written test for students seeking admission. <br>
Only those candidates who clear the written test will be called for interaction. <br>
All the admissions apart from Nursery are against vacant seats. <br>
Nursery admissions are through draw of lots.

              </p>
            </div>
          </div>
        </div>
       <!-- <div class="section-content" style="text-align:center;">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                  <div class="funfact">
                    <i class="pe-7s-notebook text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="10" data-animation-duration="2000">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Courses</h5>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="funfact">
                    <i class="pe-7s-users text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="15K" data-animation-duration="2500">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Students</h5>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="funfact">
                    <i class="pe-7s-study text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="35K" data-animation-duration="3000">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Graduate Students</h5>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="funfact">
                    <i class="pe-7s-cup text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-white" data-value="100" data-animation-duration="3000">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Awards</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>

    <!-- Section: -->
    <section>
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
              <h2 class="text-center line-height-1 mt-0">Highlights of <span class="text-theme-colored3">Chanakya Public School</span> </h2>
            <!--   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus hic suscipit doloremque deleniti ipsa quia dolor laborum natus tenetur, excepturi?</p> -->
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
            <div class="col-md-12">
              <div class="horizontal-tab-centered">
                <div class="panel-body p-0">
                  <div class="tab-content p-0">
                    <div class="tab-pane fade active in" id="tab-20">
                      <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <div class="services mb-xs-30">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/melting.png" height="240px">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1 sm-text-center"><a style="font-size: 18px; line-height: 25px;">Melting  Pot Learning Approach</a></h4>
                                
                                <div class="clearfix"></div>
                              <p style="text-align: justify; margin-bottom: -20px;">A core belief at Chanakya is that no single method of instruction is all comprehensive...
</p><br> 
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" data-toggle="modal" data-target="#approach">Know More</a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="approach" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:13px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px;">Melting  Pot  <span class="text-theme-colored3">Learning Approach  </span></h2>
                             <!-- <img src="{{url('/')}}/public/frontend/images/braindevelopment.jpg"> -->
                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                             A core belief at Chanakya is that no single method of instruction is all comprehensive. Hence, we have come up with the Melting Pot Approach which uses both - traditional as well as progressive methods of instruction to develop a well rounded curriculum.
                            </p>
                          </div>
                        </div>
                      </div>
                  </div>
                        
                     
                       <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <div class="services mb-xs-30">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/images/project_based.png" height="240px">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1 sm-text-center"><a style="font-size: 18px; line-height: 20px">Project Based Learning and Implementation
</a></h4>
                                
                                <div class="clearfix"></div>
                              <p style="text-align: justify;">Project based learning provides a platform to the child to showcase....</p>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" data-toggle="modal" data-target="#project_based_l">Know More</a>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div id="project_based_l" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:13px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px;">Project Based   <span class="text-theme-colored3">Learning and Implementation </span></h2>
                             <!-- <img src="{{url('/')}}/public/frontend/images/braindevelopment.jpg"> -->
                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                            Project based learning provides a platform to the child to showcase his/her latent talents and inventiveness. Projects in 'Math' and 'Science' ensure long term learning and clarification of  concepts. It also gives an opportunity to the passive learners and makes teaching fun. Children are required to work on projects from the very beginning of their schooling. The topics are diverse and the complexity level changes as the children grow up.
                            </p>
                          </div>
                        </div>
                      </div>
                  </div>



                        <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <div class="services mb-xs-30">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/infrastructure/holistic.png" height="240px">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">Holistic Education</a></h4>
                            <!--  <ul class="list-inline text-theme-colored2 pull-left xs-pull-left sm-pull-none sm-text-center">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>-->
                                
                                <div class="clearfix"></div><br>
                              <p style="text-align: justify;"> The teacher is today a “knowledge facilitator” rather than a "knowledge provider".... </p>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" data-toggle="modal" data-target="#holistic_e">Know More</a>
                              </div>
                            </div>
                          </div>
                        </div>



                    <div id="holistic_e" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:13px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px;">Holistic   <span class="text-theme-colored3">Education </span></h2>
                             <!-- <img src="{{url('/')}}/public/frontend/images/braindevelopment.jpg"> -->
                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                            The teacher is today a “knowledge facilitator” rather than a "knowledge provider". This is possible with the help of videos & other technological means. <br><br> Chanakya  campus is Wi-Fi enabled; the wireless network connects all computers with the internet through a leased line. Teachers and students have access to research based learning anytime, anywhere. <br><br> The learning atmosphere created in Chanakya  is a sum total, delivering core concepts through the best possible technology. This not only enables effective learning, but also creates technical skills in students at a very young age.
                            </p>
                          </div>
                        </div>
                      </div>
                  </div>



                        <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                          <div class="services mb-xs-30">
                            <div class="thumb">
                              <img class="img-fullwidth" alt="" src="{{url('/')}}/public/frontend/infrastructure/art_brain.png" height="240px">
                            </div>
                            <div class="services-details clearfix">
                              <div class="p-20 p-sm-15 bg-lighter">
                                <h4 class="mt-0 line-height-1 sm-text-center"><a href="#">Art & Brain Workshop</a></h4>
                             <!-- <ul class="list-inline text-theme-colored2 pull-left xs-pull-left sm-pull-none sm-text-center">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>-->
                                
                                <div class="clearfix"></div><br>
                              <p>School incorporates Art and Brain program in it’s curriculum to ensure that...</p>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" data-toggle="modal" data-target="#artbrain">Know More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div id="artbrain" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <a href="#" class="close" data-dismiss="modal" style="color:black; font-size: 10px;"><i class="fa fa-times" style="font-size: 20px; margin-top: -25px; position: absolute; background-color: #072945; color:white; border-radius:50px; line-height: 30px; margin-left: -10px; z-index: 2000; width: 40px; height: 40px; padding:5px; padding-left:13px;"></i></a>
                            
                             <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu" style="padding-top: 30px; margin-left: 10px;">Art &   <span class="text-theme-colored3"> Brain Workshop</span></h2>
                             <!-- <img src="{{url('/')}}/public/frontend/images/braindevelopment.jpg"> -->
                            <p style="text-align: justify; margin-top: 10px; padding: 10px;">
                           School incorporates Art and Brain program in it’s curriculum to ensure that child  engages in brain development  activities along with a program to develop Art in it’s various forms such as music, painting, sketching, dancing drama etc as these are expressions of life.   
                            </p>
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
                               <!-- <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>-->
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <!--<span class="text-white">$200</span>-->
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                               <!-- <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>-->
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">1.5 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">40</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                               <!-- <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>-->
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">2 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">50</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                              <!--  <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>-->
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">2 Years</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">50</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                               <!-- <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>-->
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">48 weeks</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                               <!-- <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>-->
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">40 weeks</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
                               <!-- <ul class="list-inline text-theme-colored2 pull-left">
                                  <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                  </li>
                                </ul>-->
                                <div class="course-price bg-theme-colored3 pull-right">
                                  <span class="text-white">$200</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list-inline mt-15 mb-10 clearfix">
                                  <li class="pull-left flip pr-0 clearfix">Course: <span class="font-weight-700">$189</span></li>
                                  <li class="text-theme-colored pull-right flip pr-0">Class Size: <span class="font-weight-700">110</span></li>
                                </ul>
                                 <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Know More</a>
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
 <!--    <section data-bg-img="{{url('/')}}/public/frontend/images/bg/bg6.jpg">
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
    </section> -->

    <!-- Section:  -->
<!--     <section>
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
 -->
    <!-- Divider: -->
 <!--    <section class="divider parallax layer-overlay overlay-dark-8 text-center" data-bg-img="{{url('/')}}/public/frontend/images/bg/bg5.jpg" data-parallax-ratio="0.7">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">            
            <h2 class="mt-0 text-white">Unlimited Support &amp; Easily Customizable</h2>
            <h4 class="text-white">Subscribe to Connect with us</h4> 
          
            <form id="mailchimp-subscription-form3" class="newsletter-form mt-30">
              <label for="mce-EMAIL"></label>
              <div class="input-group">
                <input type="email" id="mce-EMAIL" data-height="50px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-colored btn-theme-colored btn-lg m-0" data-height="50px"><i class="fa fa-paper-plane-o font-20" aria-hidden="true"></i>
                  </button>
                </span>
              </div>
            </form>            

     
            <script>
              $('#mailchimp-subscription-form3').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form3'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>           
          </div>
        </div>
      </div>
    </section> -->

    <!-- Section: blog -->
     <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 style="text-align:center">School Gallery</h2><br>
              <!-- Portfolio Filter -->
            <!--   <div class="portfolio-filter">
                <a href="#" class="active" data-filter="*">All</a>
                <a href="#branding" class="" data-filter=".branding">Branding</a>
                <a href="#design" class="" data-filter=".design">Design</a>
                <a href="#photography" class="" data-filter=".photography">Photography</a>
              </div> -->
              <!-- End Portfolio Filter -->
            
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">
                <!-- Portfolio Item Start -->
            
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/art.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/art.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/art.png">View more</a>
                  </div>
                </div>




                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/art_workshop.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/art_workshop.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/art_workshop.png">View more</a>
                  </div>
                </div>



                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/audio_visual.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/audio_visual.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/audio_visual.png">View more</a>
                  </div>
                </div>




                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/brain_development.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/brain_development.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/brain_development.png">View more</a>
                  </div>
                </div>




                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/celebrations.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/celebrations.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/celebrations.png">View more</a>
                  </div>
                </div>




                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/computer_lab.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/computer_lab.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/computer_lab.png">View more</a>
                  </div>
                </div>





                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/digital_library.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/digital_library.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/digital_library.png">View more</a>
                  </div>
                </div>




                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/hostel_education.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/hostel_education.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/hostel_education.png">View more</a>
                  </div>
                </div>



<!--
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/life_skill.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/life_skill.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/life_skill.png">View more</a>
                  </div>
                </div>-->



                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/music.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/music.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/music.png">View more</a>
                  </div>
                </div>




                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/play_area.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/play_area.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/play_area.png">View more</a>
                  </div>
                </div>








                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/sport.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/sport.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/sport.png">View more</a>
                  </div>
                </div>


                 <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{url('/')}}/public/frontend/infrastructure/student_centered.png" alt="project" style="height:260px;">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/student_centered.png"><i class="fa fa-plus"></i></a>
                          
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{url('/')}}/public/frontend/infrastructure/student_centered.png">View more</a>
                  </div>
                </div>
                
            
                <!-- Portfolio Item End -->
                
              
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
                          
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-theme-colored">
      <div class="container pt-0 pb-0">
        <div class="call-to-action pt-30 pb-20">
          <div class="row">
            <div class="col-md-9">
              <h3 class="mt-0 text-white font-30" style="padding-top: 20px;">FOR ADMISSION ENQUIRY</h3>
              
            </div>
            <div class="col-md-3">
              <a href="{{route('Admission')}}" class="btn btn-colored btn-gray btn-lg mt-20">Enquire Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
@include('layouts.Footer')
  <a class="scrollToTop" href="#"><i class="flaticon-seo-transport-3"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{url('/')}}/public/frontend/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script src="{{url('/')}}/public/frontend/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{url('/')}}/public/frontend/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{url('/')}}/public/frontend/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{url('/')}}/public/frontend/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{url('/')}}/public/frontend/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{url('/')}}/public/frontend/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{url('/')}}/public/frontend/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{url('/')}}/public/frontend/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{url('/')}}/public/frontend/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>