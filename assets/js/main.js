(function ($) {
    "use strict";

    // Плавное появление элементов
    new WOW().init();

    // Mobile menu
    $('.header__mobile-burger').click(function (event) {
        event.preventDefault();
        $(this).toggleClass('burger-active');
        $('.header__mobile-body nav').slideToggle('slow');
    });

    $('.header__mobile-body nav ul li a').click(function () {
        $('.header__mobile-body nav').slideToggle('slow');
        $('.header__mobile-burger').toggleClass('burger-active');
    });

    // Back to top button
    $(window).on('scroll', function (event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(100)
        } else {
            $('.back-to-top').fadeOut(100)
        }
    });

    // Sticky
    $(window).on('scroll', function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 300) {
            $(".header__top").removeClass("sticky");
        } else {
            $(".header__top").addClass("sticky");
        }
    });

    // Input mask
    $(".tel-mask").mask("+7 (999) 999-99-99");

    // Форма
    $('.modal-btn').on('click', function () {
        let title = $(this).attr('data-buttonid')
        $('.modal-header h2').text(title);
    });

    // Доп возможности слайдер
    $('.dop .single-item').slick({
        infinite: true,
        speed: 400,
        fade: true,
        cssEase: 'linear',
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    // Preloader
    window.onload = function () {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
        }, 1000);
    }

    // Текущий год
    document.getElementById('year').innerHTML = new Date().getFullYear();


})(jQuery);










