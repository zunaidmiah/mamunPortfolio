(function ($) {
    "use strict";

    /*:::::::::::::::::::::::::::::::::::
            Navbar Area
    :::::::::::::::::::::::::::::::::::*/

     // Navbar Sticky
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 1) {
            $(".navbar").addClass("bg-primari");
            $(".logo-text").css('color', '#FFC900');
            $(".main-text-logo").css('color', '#fff');
            $(".navbar-expand-lg .navbar-nav .nav-link").css('color', '#fff');
            $(".navbar-expand-lg .navbar-nav .nav-link.active").css('color', '#ffc900');
        } else {
            $(".navbar").removeClass("bg-primari");
            if(checkDevice() == 'phone'){
                $(".logo-text").css('color', '#fff');
            }else{
                $(".logo-text").css('color', '#000');
            }
            $(".main-text-logo").css('color', '#ffc900');
            $(".navbar-expand-lg .navbar-nav .nav-link").css('color', '#000000');
            $(".navbar-expand-lg .navbar-nav .nav-link.active").css('color', '#ffc900');
        }
    });

    function checkDevice() {
        const deviceType = window.innerWidth <= 768 ? "phone" : "desktop";
        if(deviceType == 'phone'){
            $(".logo-text").css('color', '#fff');
        }else if(deviceType == 'phone'){
            $(".logo-text").css('color', '#000');
        }
        return deviceType;
    }
    
    checkDevice();
    
    window.addEventListener('resize', checkDevice);

    //Smoth Scroll
    $(function () {
        $('.nav-link, .smoth-scroll').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 0
            }, 1000);
            event.preventDefault();
        });
    });

    /*==========================
        Hero Area Slider
    ============================*/

    $('.hero-area-slids').owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        doots: false,
        autoplay: true,
        animateOut: 'fadeOutRight',
        animateIn: 'fadeIn'

    });
    //Wow Animation
    new WOW().init();
    /*==========================
        Hero Title typer
    ============================*/
    var element = $('.typed');

    $(function () {
        var text = $("#ticker_text").val();
        let array = text.split(",");
        element.typed({
            strings: array,
            typeSpeed: 100,
            loop: true,
            autoplay: true,
        });
    });

    /*::::::::::::::::::::::::::::::::::::
       Portfolio Section
    ::::::::::::::::::::::::::::::::::::*/

    lightbox.option({
        'imageFadeDuration': 800,
        'resizeDuration': 500,
        'wrapAround': true
    });

    $('.portfolio-area').mixItUp();


    /*::::::::::::::::::::::::::::::::::::
       Testimonial Section
    ::::::::::::::::::::::::::::::::::::*/

    $('.testimonials').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: false
    });


    /*::::::::::::::::::::::::::::::::::::
       Contact Area
    ::::::::::::::::::::::::::::::::::::*/
    var form = $('#contact-form');

    var formMessages = $('.form-message');
    $(form).submit(function (e) {
        e.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function (response) {
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');
                $(formMessages).text(response);

                $('#contact-form input,#contact-form textarea').val('');
            })
            .fail(function (data) {
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
    });


    /*::::::::::::::::::::::::::::::::::::
    Preloader
    ::::::::::::::::::::::::::::::::::::*/
    $(window).on('load', function () {
        $('.preloader').fadeOut();
    });

}(jQuery));
