(function ($) {
    "use strict";

    const navLinkEls = document.querySelectorAll('.nav-link');
    const windowPathname = window.location.pathname;

    navLinkEls.forEach(navLinkEls => {
        const navLinkPathname = new URL(navLinkEls.href).pathname;
        navLinkEls.classList.remove('active');

        if ((windowPathname === navLinkPathname) || (windowPathname === '/index.html' && navLinkPathname === '/')){
            navLinkEls.classList.add('active');
        }
    });

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });

    // testimoni carousel
    $(".testimoni-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    

})(jQuery);