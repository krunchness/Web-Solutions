jQuery(document).ready(function ($) {
	$('#slides').lightSlider({
        adaptiveHeight:false,
        enableDrag:false,
        item:1,
        loop:false,
        auto:false,
        speed:1000,
        pause: 5000,
        enableTouch: true,

    });

    $('#recent-proj').lightSlider({
        adaptiveHeight:true,
        item:3,
        slideMargin:30,
        loop:true,
        auto: true,
        pager: false,
        controls: false,
        enableDrag: false,
        pause: 3000,
        enableTouch: true,
        pager: false,

    });

   $('.owl-carousel').owlCarousel({
        rtl:true,
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:1
            }
        }
    });


   $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
});

var typed = new Typed("#typed", {
  // Waits 1000ms after typing "First"
        strings: ["^1500 HELLO, ^2000 WE'RE WEBSOLUTIONS."],
        typeSpeed: 40,
        smartBackspace: true,
        showCursor: true,
        
    });


