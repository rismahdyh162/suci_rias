(function ($) {
    "use strict";

    const menuLinkEls = document.querySelectorAll('.menu-link');
    const windowPathname = window.location.pathname;

    menuLinkEls.forEach(menuLinkEls => {
        const menuLinkPathname = new URL(menuLinkEls.href).pathname;
        menuLinkEls.classList.remove('active');

        if ((windowPathname === menuLinkPathname) || (windowPathname === '/profil.html' && menuLinkPathname === '/')){
            menuLinkEls.classList.add('active');
        }
    });


})(jQuery);