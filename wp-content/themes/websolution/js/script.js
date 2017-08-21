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

    $('#testimonial').lightSlider({
        adaptiveHeight:true,
        item:3,
        slideMargin:30,
        loop:true,
        auto: true,
        pager: false,
        controls: false,
        enableDrag: false,
        pause: 5000,
        enableTouch: true,
    });

   
});