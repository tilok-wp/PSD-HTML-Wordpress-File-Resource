(function($) {
    
    "use strict";

    //Hide Preloader
	$(window).on('load', function() {
		$('.preloader-area').delay(200).fadeOut(500);
	});

    //magnificPopup
    $('.popup-youtube').magnificPopup({
        type:'iframe'
    });

    //counterUp
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    //owlCarousel
    $(".service--carousel").owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots:false,
        autoplay:false,
        autoplayTimeout:10000,
        responsiveClass:true,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
            },
            767:{
                items:2,
            },
            991:{
                items:3,
                
            }
        }
    });

    $(".testimonial__box").owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        autoplay:false,
        autoplayTimeout:10000,
        responsiveClass:true,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
            },
            767:{
                items:2,
            },
        }
    });

    $(".claient__box").owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:false,
        autoplay:false,
        autoplayTimeout:10000,
        responsiveClass:true,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
            },
            425:{
                items:2,
            },
            767:{
                items:4,
            },
            991:{
                items:5,
                
            }
        }
    });

})(jQuery);