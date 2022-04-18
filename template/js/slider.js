/*

 * Slider 
 * Copyright 2019 WEB-26
 * version 1.0
 * author Karpenko D.V.

*/
'use strict';

(function () {
    var slider = document.querySelectorAll('.slider');
    var slide = document.querySelectorAll('.slider .container');
    var sliderNav = document.querySelector('.slider-nav');
    var navBtn = document.createElement('a');
    var playAuto;
    var count = 0;


    if (slider.length > 0) {
        sliderNav.appendChild(navBtn);
        slider[count].addEventListener('mouseenter', stopPlayAuto);
        slider[count].addEventListener('mouseleave', startPlayAuto);

        for (var i = 0; i < slide.length - 1; i++) {
            var navBtnClone = navBtn.cloneNode(true);
            sliderNav.appendChild(navBtnClone);
        }

        var navBtnAll = document.querySelectorAll('.slider-nav a');

        var _loop = function _loop(b) {
            navBtnAll[b].addEventListener('click', function (e) {
                e.preventDefault();
                hideSlide();
                count = b;
                showSlide();
                console.log(b);
            });
        };

        for (var b = 0; b < navBtnAll.length; b++) {
            _loop(b);
        }

        function showSlide() {
            slide[count].style.display = 'flex';
            navBtnAll[count].classList.add('active');
        }

        function hideSlide() {
            slide[count].style.display = 'none';
            navBtnAll[count].classList.remove('active');
        }

        function nextSlide() {
            hideSlide();

            if (count < slide.length - 1) {
                count++;
                showSlide();
            } else {
                count = 0;
                showSlide();
            }
        }

        function stopPlayAuto() {
            clearInterval(playAuto);
        }

        function startPlayAuto() {
            playAuto = setInterval(nextSlide, 7000);
        }

        showSlide();
        playAuto = setInterval(nextSlide, 7000);
    }

})();