@include('layouts.Header')

<body class="inner-page">
    @include('layouts.gtmbody')
<!--Preloader area start here-->

<!--Preloader area end here-->

<!--Full width header Start-->
<div class="full-width-header">

<!-- Toolbar Start -->
<div class="rs-toolbar">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="rs-toolbar-left">
<div class="welcome-message">
<i class="fa fa-bank"></i><span>Welcome to Direction Classes
</span> 
</div>
</div>
</div>



<style>
.dropdown1 {
  position: relative;
  display: inline-block;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 9999999999999;
  text-align:left;
}

.dropdown1:hover .dropdown-content1 {
  display: block;
}
</style>
<div class="col-md-6" style="z-index: 9999999999999;">
<div class="rs-toolbar-right">
<div class="toolbar-share-icon">
<ul>
    
    <li>            
        <div class="dropdown1" style="color:white;">
          <span><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp; Career</span>
          <div class="dropdown-content1">
            <a href="https://www.directionclasses.com/Career" style="color:black">
              <i class="fa fa-angle-right" aria-hidden="true"></i> 
              Teaching 
            </a> <br>
            <a href="https://www.directionclasses.com/Apply-Non-Teaching" style="color:black">
              <i class="fa fa-angle-right" aria-hidden="true"></i>
              Non Teaching 
            </a>
          </div>
        </div></li> 
    
<li><a href="https://www.facebook.com/directionclass"><i class="fa fa-facebook"></i></a></li>
<li><a href="https://www.youtube.com/channel/UCPUzOoWwmpBm8bvmlbVQMjQ"><i class="fa fa-youtube"></i></a></li>
<li><a href="https://www.linkedin.com/company/direction-classes"><i class="fa fa-linkedin"></i></a></li>
<li><a href="https://www.instagram.com/directionclasses"><i class="fa fa-instagram"></i></a></li>
</ul>
</div>
<!--<a href="#" class="apply-btn">Apply Now</a>-->
</div>
</div>
</div>
</div>
</div>
<!-- Toolbar End -->

<!--Header Start-->
@include('layouts.Menu')
<!--Header End-->

</div>
<!--Full width header End-->

@yield('main-section')


@include('layouts/Footer')
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
<i class="fa fa-angle-up"></i>
</div>

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true" class="fa fa-close"></span>
</button>
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="search-block clearfix">
<form>
<div class="form-group">
<input class="form-control" placeholder="eg: Computer Technology" type="text">
</div>
</form>
</div>
</div>
</div>
</div>


</body>
@include('layouts.js')
<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Aug 2018 06:33:10 GMT -->
</html>