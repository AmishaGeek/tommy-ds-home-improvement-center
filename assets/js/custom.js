jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;

    jQuery('.gallery-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
        variableWidth: true,
        rows: 2,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        responsive: [{
                breakpoint: 1500,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    rows: 1,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    variableWidth: false,
                    dots: true,
                    rows: 1,
                }
            }
        ]
    });

    setTimeout(function() {
        jQuery("#sbi_images").slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            draggable: true,
            rows: 1,
            swipeToSlide: true,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            responsive: [{
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrows: false,
                        rows: 1,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                }
            ]
        });
    }, 1000);

    /* Sticky Header JS */
    jQuery(window).scroll(function() { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    jQuery("#primary-menu .menu-item a").click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });

    /*Quote Modal JS */
    jQuery("#quoteModal").on('show.bs.modal', function() {
        var scrolly = window.scrollY;
        jQuery("body").css("top", "-" + scrolly + "px");
        jQuery(this).attr("data-top", scrolly);
    });

});


/* Window Load and Resize JS */
jQuery(window).on('load resize', function() {
    var window_size = jQuery(window).width();
    if (window_size <= 991) {
        /* Scroll To Top JS */
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.cta-btn').fadeIn();
            } else {
                jQuery('.cta-btn').fadeOut();
            }
        });

    }
});