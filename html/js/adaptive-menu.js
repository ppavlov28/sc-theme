;(function() {
    'use strict';

    var navToggler = document.getElementById('mainMenuToggler');

    if (!navToggler) { return };

    navToggler.classList.remove('no-js');

    var mainNav = document.getElementById('menu-top-menu');

    mainNav.classList.add('menu-top-menu--close');

    navToggler.addEventListener('click', function() {
        this.classList.toggle('main-menu-toggler--close');
        mainNav.classList.toggle('menu-top-menu--close');
    });
})();