/**
 * External Dependencies
 */
import 'jquery';
import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/parallax';


$(document).ready(() => {
    windowLoad();
    scroller();
    mobileMenu();
    animateOnScroll();
    aboutTabToggle();

    // Run script on specific page
    // var url_pathname = window.location.pathname;
    // if (url_pathname == "/page-name/") {
    // yourScript();
    // }

});

/*
 * Hides nav on scroll down, shows on scroll up
 */
document.addEventListener("DOMContentLoaded", function(){

    var el_autohide = document.querySelector('.autohide');

    if(el_autohide){
        var last_scroll_top = 0;
        window.addEventListener('scroll', function() {
            let scroll_top = window.scrollY;
            // set scroll amount (px)
            if( ! document.querySelector('html').classList.contains('is--mobile-nav__active')) {
                if (scroll_top < last_scroll_top) {
                    el_autohide.classList.remove('scrolled-down');
                    el_autohide.classList.add('scrolled-up');
                } else {
                    el_autohide.classList.remove('scrolled-up');
                    el_autohide.classList.add('scrolled-down');
                }
            }
            last_scroll_top = scroll_top;
        });
        // window.addEventListener
    }
    // if

});


/*
 * Removes loading animation when page load is completed
 */
function windowLoad() {
    // var loader;
    if (document.readyState == 'loading') {
        // loader = requestAnimationFrame(animateLoaderScript);
    }
    $(".page-loader").fadeOut("slow");
    $("body").removeClass("preload");
}

/*
 * Any on scroll functionality should be placed here so only one window scroll is called
 */
function scroller() {

    // == Change Header on scroll ==
    var header = $(".js__header");

    // ******* SCROLL ************\\
    $(window).on('scroll', function () {

        // == Change Header on scroll ==
        scroll = $(window).scrollTop();
        // set scroll amount (px)
        if (scroll >= 120) {
            header.addClass("header--secondary");// if scroll is further than #px change class
            // splashBox.css("z-index", -100);
        } else {
            header.removeClass("header--secondary"); // if not (is at top) change class back
        }

    });

    // == Change Header on scroll ==
    var scroll = scroll;
    if (scroll >= 120) {
        header.addClass("header--secondary");// if scroll is further than #px change class
    } else {
        header.removeClass("header--secondary"); // if not (is at top) change class back
    }
}

/*
 * Adds scroll to animation functionality
 * add class="animation-element" to an element you want to be triggered when scrolled to,
 * then your animation found in animation.less
 */
function animateOnScroll() {
    var $animation_elements = $('.animation-element');
    var $tab_animation_elements = $('.tab-animation-element');
    var $force_in_view = $('.force-in-view');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height() - 200;
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        if ($animation_elements) {
            $.each($animation_elements, function () {
                var $element = $(this);
                var element_height = $element.outerHeight();
                var element_top_position = $element.offset().top;
                var element_bottom_position = (element_top_position + element_height);

                //check to see if this current container is within viewport
                if ((element_bottom_position >= window_top_position) &&
                    (element_top_position <= window_bottom_position)) {
                    $element.addClass('in-view');
                }
            });
        }
        if ($force_in_view) {
            $.each($force_in_view, function () {
                $(this).addClass('in-view');
            });
        }
    }

    $(window).load(function () {
        setTimeout(function () {
            $window.on('scroll resize', check_if_in_view);
            $window.trigger('scroll');
        }, 600);
    });
}

function mobileMenu() {
    var $menu = document.querySelector('#mobile-menu')
    var html = document.querySelector('html');
    //hamburger
    var hamburger = document.querySelector('.js--hamburger');
    hamburger.addEventListener('click',() => {
        html.classList.toggle('is--mobile-nav__active');
    });

}

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,

    slidesPerGroup: 5,
    slidesOffsetBefore: 0,
    spaceBetween: 0,
    centeredSlides: true,
    parallax: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    effect: 'fade',
    fadeEffect: {
        crossFade: true,
    },

});

function aboutTabToggle() {
    var tab = document.querySelectorAll(".js--tab-nav-btn");
    var content = document.querySelectorAll(".js--tab");

    for (var i = 0 ; i < tab.length; i++) {
        tab[i].addEventListener('click' , function() {
            Array.from(tab).forEach(function(el) {
                el.classList.remove('active');
            });
            this.classList.add("active");

            Array.from(content).forEach(function(el) {
                el.classList.remove('active');
            });
            document.querySelector('#' + this.dataset.tabid + '-tab').classList.add("active");
        });
    }
};
