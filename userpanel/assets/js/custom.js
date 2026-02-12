/* =====================================
   All JavaScript functions Start
======================================*/

(function ($) {
    'use strict';

    /* ===============================
       BASIC FUNCTIONS
    =============================== */

    function site_search() {
        $('a[href="#search"]').on('click', function () {
            $('#search').addClass('open');
            $('#search input[type="search"]').focus();
        });

        $('#search, #search .close').on('click keyup', function (e) {
            if (e.target === this) $(this).removeClass('open');
        });
    }

    function video_responsive() {
        $('iframe[src*="youtube"], iframe[src*="vimeo"]').wrap(
            '<div class="embed-responsive embed-responsive-16by9"></div>'
        );
    }

    function magnific_popup() {
        $('.mfp-gallery').magnificPopup({
            delegate: '.mfp-link',
            type: 'image',
            gallery: { enabled: true }
        });
    }

    function magnific_video() {
        $('.mfp-video').magnificPopup({ type: 'iframe' });
    }

    function popup_vertical_center() {
        $('.modal').on('show.bs.modal', function () {
            const dialog = $(this).find('.modal-dialog');
            $(this).css('display', 'block');
            dialog.css(
                'margin-top',
                Math.max(0, ($(window).height() - dialog.height()) / 2)
            );
        });
    }

    function sticky_header() {
        if ($('.sticky-header').length) {
            new Waypoint.Sticky({ element: $('.sticky-header')[0] });
        }
    }

    function scroll_top() {
        $('button.scroltop').on('click', function () {
            $('html, body').animate({ scrollTop: 0 }, 800);
        });

        $(window).on('scroll', function () {
            $('button.scroltop').toggle($(window).scrollTop() > 900);
        });
    }

    function placeholderSupport() {
        if (!('placeholder' in document.createElement('input'))) {
            $('[placeholder]').focus(function () {
                if ($(this).val() === $(this).attr('placeholder')) $(this).val('');
            }).blur(function () {
                if ($(this).val() === '') $(this).val($(this).attr('placeholder'));
            });
        }
    }

    function footer_fixed() {
        const footer = $('.site-footer');
        footer.css('display', 'block');
        $('.footer-fixed > .page-wraper').css('padding-bottom', footer.outerHeight());
    }

    function accordion_active() {
        $('.acod-head a').on('click', function () {
            $('.acod-head').removeClass('acc-actives');
            $(this).closest('.acod-head').addClass('acc-actives');
        });
    }

    /* ===============================
       MOBILE MENU FIX (IMPORTANT)
    =============================== */

    function mobile_nav() {
        $('.sub-menu, .mega-menu').parent('li').addClass('has-child');
        $("<div class='fa fa-angle-right submenu-toggle'></div>")
            .insertAfter('.has-child > a');

        $('.submenu-toggle').on('click', function (e) {
            e.preventDefault();
            $(this).next('.sub-menu, .mega-menu').slideToggle();
            $(this).parent().toggleClass('nav-active');
            e.stopPropagation();
        });
    }

    function mobile_side_drawer() {
        $('#mobile-side-drawer').on('click', function (e) {
            e.preventDefault();
            $('.mobile-sider-drawer-menu').toggleClass('active');
        });
    }

    /* ===============================
       SLIDERS
    =============================== */

    function home_carousel_1() {
        $('.home-carousel-1').owlCarousel({
            loop: true,
            margin: 15,
            nav: false,
            dots: true,
            responsive: {
                0: { items: 1 },
                768: { items: 2 }
            }
        });
    }

    function home_carousel_2() {
        $('.home-carousel-2').owlCarousel({
            loop: true,
            dots: true,
            responsive: {
                0: { items: 1 },
                768: { items: 3 }
            }
        });
    }

    function page_loader() {
        $('.loading-area').fadeOut(800);
    }

    /* ===============================
       DOCUMENT READY
    =============================== */

    $(document).ready(function () {
        site_search();
        video_responsive();
        magnific_popup();
        magnific_video();
        popup_vertical_center();
        sticky_header();
        scroll_top();
        placeholderSupport();
        footer_fixed();
        accordion_active();
        mobile_nav();
        mobile_side_drawer();   // ✅ FIXED
        home_carousel_1();
        home_carousel_2();
    });

    /* ===============================
       WINDOW LOAD
    =============================== */

    $(window).on('load', function () {
        page_loader();
    });

    /* ===============================
       WINDOW SCROLL
    =============================== */

    $(window).on('scroll', function () {
        if ($(window).scrollTop() >= 100) {
            $('.is-fixed').addClass('color-fill');
        } else {
            $('.is-fixed').removeClass('color-fill');
        }
    });

    /* ===============================
       IMPORTANT
       ✔ Contact form handlers REMOVED
       ✔ External demo AJAX REMOVED
       ✔ Use your CI3 + AJAX + SweetAlert only
    =============================== */

})(jQuery);
