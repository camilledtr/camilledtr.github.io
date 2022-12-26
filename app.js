
// Reveal text of sections when scroll =================================================================================
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);


// Hide navbar on scroll down, display on scroll up ====================================================================
var lastScrollTop; // This Varibale will store the top position

var navbar = document.getElementById('navbar'); // Get The NavBar

window.addEventListener('scroll', function () {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    //This line will get the location on scroll

    if (scrollTop > lastScrollTop) { //if it is greater than the previous
        navbar.classList.remove("scrolled-up");
        navbar.classList.add("scrolled-down");
    }

    else {
        navbar.classList.remove("scrolled-down");
        navbar.classList.add("scrolled-up");
    }

    lastScrollTop = scrollTop; //New Position Stored
});

// Fix the background in the projects section ==========================================================================

jQuery(document).ready(function ($) {

    var offset = $('.sticker').offset();
    var fromtop = offset.top;
    var bottom = $('.sticker').parent().offset().top + $('.sticker').parent().height();

    $(document).scroll(function () {
        dist = $(this).scrollTop();

        if (dist >= fromtop && dist <= bottom) {
            $('.sticker:last').show();
            $('.sticker:first').css({
                'position': 'fixed',
                'top': '0px'
            });
        } else {
            $('.sticker').css({
                'position': 'absolute'
            });
        }
    });
});

// Open the nav menu ===================================================================================================
var menuBtn = document.querySelector('.menu-btn');
var BtnBar1 = document.querySelector('.menu-btn__bar-1');
var BtnBar2 = document.querySelector('.menu-btn__bar-2');
var logo = document.querySelector('#logo');


menuBtn.addEventListener('click', e => {
    menuBtn.classList.toggle('js-btn-open');
    document.querySelector('.nav-menu').classList.toggle('js-nav-open');
    if (menuBtn.classList.contains('js-btn-open')) {
        logo.src = "/assets/crop-light-logo.png";

    } else {
        logo.src = "/assets/crop-logo.png";

    }
});
