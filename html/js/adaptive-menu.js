;(function() {
    'use strict';

    var navToggler = document.getElementById('mainMenuToggler');
    if (!navToggler) { return };

    navToggler.classList.remove('no-js');
    var mainNav = document.getElementById('menu-top-menu');

    mainNav.classList.add('menu-top-menu--close');
    /*
    var mainNav = document.getElementById('menu-top-menu'),
        mainNavList = document.getElementById('mainNav'),
        pageHeader = document.querySelector('.page-header');

    mainNav.classList.remove('main-nav--no-js');
     */
    navToggler.addEventListener('click', function() {
        this.classList.toggle('main-menu-toggler--close');
        mainNav.classList.toggle('menu-top-menu--close');
        /*
        mainNavList.classList.toggle('main-nav__list--opened');
        mainNavList.parentElement.classList.toggle('main-nav--opened');
        pageHeader.classList.toggle('page-header--bg-position');
        */
    });
})();