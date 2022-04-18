"use strict";

(function () {
    var image = document.querySelector('image');
    var goodFoto = document.querySelector('.good-foto');
    var colorBtn = document.querySelectorAll('.colors a');
    var colorName = document.querySelector('.color-name');
    var btnCart = document.querySelector('.add-to-cart');


    for (var i = 0; i < colorBtn.length; i++) {
        colorBtn[i].addEventListener('click', changeColor);
    }

    function changeColor(e) {
        e.preventDefault();
        var attribute = this.getAttribute('href');
        var dataAttribute = this.getAttribute('data-color');
        image.setAttribute('xlink:href', attribute);
        btnCart.setAttribute('data-color', dataAttribute);
        colorName.innerHTML = dataAttribute;
    }
})();
