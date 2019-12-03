
jQuery(document).ready(function($) {
  "use strict";
  //------ Menu --------
  var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");

  });
//--------loading ------
  $(window).load(function() {
    $(".bg-preloader").delay(100).fadeOut(500);
  });
  //--------------

  var $maxWidthElement = $('.navbar'),
    maxWidth = $maxWidthElement.width();

var positionDropdowns = function() {
    $('.dropdown-menu').each(function() {
        var $navItem = $(this).closest('.dropdown'),
            dropdownWidth = $(this).outerWidth(),
            dropdownOffsetLeft = $navItem.offset().left,
            dropdownOffsetRight = maxWidth - (dropdownOffsetLeft + dropdownWidth),
            linkCenterOffsetLeft = dropdownOffsetLeft + $navItem.outerWidth() / 2;

        if ((linkCenterOffsetLeft - 200 - dropdownWidth / 2 > 0) & (linkCenterOffsetLeft + 400 +  dropdownWidth / 2 < maxWidth)) {
            // center the dropdown menu if possible

            $(this).css('left', -(dropdownWidth / 2 - $navItem.outerWidth() / 2));
        } else if ((dropdownOffsetRight -200 < 0) & (dropdownWidth  < dropdownOffsetLeft + 200 +$navItem.outerWidth())) {
            // set the dropdown menu to left if it exceeds the viewport on the right
            $(this).addClass('dropdown-menu-right');
        } else if (dropdownOffsetLeft + dropdownWidth > maxWidth) {
            // full width if the dropdown is too large to fit on the right
            $(this).css({
                left: 0,
                right: 0,
                width:
                    $(this)
                        .closest('.container')
                        .width() + 'px'
            });
        }
    });
};

var resizeTimer;

$(window).on('resize', function(e) {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        maxWidth = $maxWidthElement.width();
        positionDropdowns();
    }, 250);
});

positionDropdowns();
window.onresize = positionDropdowns;



  //------- countup ---------
  $('.counter').appear(function() {
    $('.counter-number').countTo();
  });
  //-------------------
  $(document).ready(function() {
    $('.progress .progress-bar').css("width",
        function() {
          return $(this).attr("aria-valuenow") + "%";
        }
    )
  });
  //-------------- portfolio masonry ---------------

  jQuery(window).load(function() {
    $('.masonry-portfolio').isotope({
      itemSelector: '.item-masonry-portfolio',
      layoutMode: 'masonry'
    });
    $('.portfolio-category').on('click', 'button', function () {
      var filterValue = $(this).attr('data-filter');
      $('.masonry-portfolio').isotope({filter: filterValue});

    });
  });


  //---------------- post format  gallery ------------
  jQuery('.represent-gallery-images-holder').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  });
  //--------------- Clients Logo ----------------
  var $logo_to_show = jQuery('.clients-item').data( "show" );
  jQuery('.clients-item').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    responsive:{
      0:{
        items:2
      },
      600:{
        items:3
      },
      1000:{
        items:$logo_to_show
      }
    }
  });
  //--------------- Clients Logo ----------------
  jQuery('.testimonails-items').owlCarousel({
    loop:true,
    // stagePadding: 150,
    margin:60,
    nav:true,
    onDragged: image_change,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  })


  function image_change() {
    var imageUrl,
        newImageSrc,
        imageExt = 'jpg';
    if ($('.testimonails-items').length) {
      $('.testimonails-items').each(function(i, obj) {
        if($('.testimonails-items .owl-item.active').find('img').length > 0) {
          imageUrl = $('.testimonails-items .owl-item.active input').attr('value');
          imageExt = imageUrl.substr(imageUrl.length - 4, imageUrl.length);
          newImageSrc = imageUrl.substr(0, imageUrl.length - 10) + imageExt;
        }
      });
    }

    $("#grand-image").attr("src",imageUrl);
  }
  $(".testimonials .owl-prev").on("click",function(){
    image_change();
  });
  $(".testimonials .owl-next").on("click",function(){
    image_change();
  });
  image_change();

});