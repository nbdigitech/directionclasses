
<!-- modernizr js -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{url('/')}}/public/assets/js/modernizr-2.8.3.min.js" async></script>
<!-- jquery latest version -->
<!-- bootstrap js -->
<script src="{{url('/')}}/public/assets/js/bootstrap.min.js" async></script>
<!-- owl.carousel js -->
<script src="{{url('/')}}/public/assets/js/owl.carousel.min.js" async></script>
<!-- slick.min js -->
<script src="{{url('/')}}/public/assets/js/slick.min.js" async></script>
<!-- isotope.pkgd.min js -->
<script src="{{url('/')}}/public/assets/js/isotope.pkgd.min.js" async></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{url('/')}}/public/assets/js/imagesloaded.pkgd.min.js" async></script>
<!-- wow js -->
<script src="{{url('/')}}/public/assets/js/wow.min.js" async></script>
<!-- counter top js -->
<script src="{{url('/')}}/public/assets/js/waypoints.min.js" async></script>
<script src="{{url('/')}}/public/assets/js/jquery.counterup.min.js" async></script>
<!-- magnific popup -->
<script src="{{url('/')}}/public/assets/js/jquery.magnific-popup.min.js" async></script>
<!-- rsmenu js -->
<script src="{{url('/')}}/public/assets/js/rsmenu-main.js" async></script>
<!-- plugins js -->
<script src="{{url('/')}}/public/assets/js/plugins.js" async></script>
<!-- main js -->
<script src="{{url('/')}}/public/assets/js/main.js" async></script>
<script>
$(document).ready(function() {
  $('.cource-btn').click(function(e) {
      e.preventDefault();
     $('.modal-wrapper').toggleClass('open');
    $('.page-wrapper').toggleClass('blur');
    return false;
  });
  
    $(".btn-close").click(function(){
        $(".modal-wrapper").css("display", "none");
        return false;
  });
});
</script>
