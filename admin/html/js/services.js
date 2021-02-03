/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu


******************************/

$(document).ready(function() {
    "use strict";

    /* 

    1. Vars and Inits

    */

    var header = $('.header');
    var ctrl = new ScrollMagic.Controller();

    setHeader();

    $(window).on('resize', function() {
        setHeader();

        setTimeout(function() {
            $(window).trigger('resize.px.parallax');
        }, 375);
    });

    $(document).on('scroll', function() {
        setHeader();
    });

    initMenu();

    /* 

    2. Set Header

    */

    function setHeader() {
        if ($(window).scrollTop() > 91) {
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    }

    /* 

    3. Init Menu

    */

    function initMenu() {
        var hamb = $('.hamburger');
        var menu = $('.menu');
        var menuOverlay = $('.menu_overlay');
        var menuClose = $('.menu_close_container');

        hamb.on('click', function() {
            menu.toggleClass('active');
            menuOverlay.toggleClass('active');
        });

        menuOverlay.on('click', function() {
            menuOverlay.toggleClass('active');
            menu.toggleClass('active');
        });

        menuClose.on('click', function() {
            menuOverlay.toggleClass('active');
            menu.toggleClass('active');
        });
    }

});

function openModal() {
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}