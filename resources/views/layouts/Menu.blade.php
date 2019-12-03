<header id="rs-header-2" class="rs-header-2">
<!-- Menu Start -->
<div class="menu-area menu-sticky">
<div class="container">
<div class="row rs-vertical-middle">
<div class="col-lg-2 col-md-12">
<div class="logo-area">
<a href="{{route('Index')}}"><img src="{{url('/')}}/public/assets/images/logo.png" alt="logo"></a>
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
  z-index: 1;
}

.dropdown1:hover .dropdown-content1 {
  display: block;
}
</style>


<div class="col-lg-10 col-md-12">
<div class="main-menu">
<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
<nav class="rs-menu">
<ul class="nav-menu">
    <!-- Home -->
    <li class="menu-item-has-children"> <a href="{{route('Index')}}" class="home">Home</a>
    </li>
    <!-- End Home --> 
    
    <!--About Menu Start-->
    <li class="current-menu-item current_page_item menu-item-has-children"><a href="{{route('About')}}">About Us</a>
        
    </li>
    <!--About Menu End--> 

    <!-- Drop Down -->
    <!-- <li class="menu-item-has-children"> <a href="#">Pages</a>
        <ul class="sub-menu"> 
            <li class="menu-item-has-children"> <a href="#">Teachers</a>
              <ul class="sub-menu">
                <li> <a href="teachers.html">Teachers</a> </li>
                <li> <a href="teachers-without-filter.html">Teachers Without Filter</a> </li> 
                <li> <a href="teachers-single.html">Teachers Single</a> </li>
              </ul>
            </li>
            
            <li class="menu-item-has-children"> <a href="#">Gallery</a>
              <ul class="sub-menu">
                <li> <a href="gallery.html">Gallery One</a> </li>
                <li> <a href="gallery2.html">Gallery Two</a> </li> 
                <li> <a href="gallery3.html">Gallery Three</a> </li>
              </ul>
            </li>
            
            <li class="menu-item-has-children"> <a href="#">Shop</a>
              <ul class="sub-menu">
                <li> <a href="shop.html">Shop</a> </li> 
                <li> <a href="shop-details.html">Shop Details</a> </li>
              </ul>
            </li>
            
            <li><a href="cart.html">Cart</a></li>
            <li><a href="checkout.html">Checkout</a></li>
            
            <li><a href="error-404.html">Error 404</a></li>
        </ul>
    </li> -->
    <!--End Icons -->
    
    <!--Courses Menu Start-->
    <li class="menu-item-has-children"> <a href="{{route('Course')}}">Courses</a>
      
    </li>
    <!--Courses Menu End-->
    
    <!--Events Menu Start-->
    <li class="menu-item-has-children"> <a href="{{route('ParentTestimonial')}}">Testimonials</a>
            
    </li>
    <li class="menu-item-has-children"> <a href="{{route('FAQ')}}">FAQ's</a>
        <!-- <ul class="sub-menu">
            <li><a href="#">Events</a></li>
            <li><a href="#">Events Details</a></li>
        </ul> -->
    </li>
    <li class="menu-item-has-children"> <a href="{{route('Social-Media')}}">Social Media</a>
            
    </li>
    <!--Events Menu End-->
    
    <!--blog Menu Start-->
    <li class="menu-item-has-children"> <a href="https://www.directionclasses.com/resources/">Blog</a>
            
    </li>




    <!--blog Menu End-->
    
    <!--Contact Menu Start-->
    <li> <a href="{{route('Contact')}}">Contact</a></li>
    <!--Contact Menu End-->
</ul>
</nav>
</div>
<div class="searce-box">

</div>
</div>                                              
</div>
</div>
</div>
<!-- Menu End -->
</header>