;(function() {
    'use strict';

    var menu = document.getElementById('menu-top-menu');
    if (!menu) { return };
    console.log(menu);
    var submenu = menu.querySelector('.sub-menu');
    var submenu2 = submenu.cloneNode(true);
    var header = document.querySelector('.header-main');
    var newMenu = document.createElement('div');
    submenu.style.display = 'none';
    newMenu.classList.add('container');
    submenu2.classList.add('sub-menu2');
    newMenu.appendChild(submenu2);
    newMenu.style.position = 'relative';
    newMenu.style.zIndex = 5;
    newMenu.style.height = 0;
    newMenu.style.backgroundColor = 'yellow';
    //newMenu.style.height = '40px';
    var next = header.nextSibling;
    var catalog = menu.querySelector('.menu-item-has-children');
    console.log(catalog);

    document.querySelector('.content-full').insertBefore(newMenu, next);
    var help = document.querySelector('.sub-menu2');
    console.log(help);
    catalog.addEventListener('mouseover', function (ev) {
        help.classList.add('show');
        console.log('!!!!!!');
    });

    catalog.addEventListener('mouseleave', function (ev) {
        var target = ev.target;
        console.log('target ' + target.tagName);
        if (target.tagName != 'UL') {
            help.classList.remove('show');
            console.log('!!!!!!');
        }
    });

    help.addEventListener('mouseleave', function (ev) {
        var target = ev.target;
        console.log('target ' + target.tagName);
        //if ()
        help.classList.remove('show');
        console.log('!!!!!!');
    });

    help.addEventListener('mouseover', function (ev) {
        help.classList.add('show');
        console.log('!!!!!!');
    });




    console.log('!!---888');
})();