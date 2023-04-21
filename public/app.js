
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
    // If the nav menu is open, we don't want the navbar to hide
    if (!document.querySelector('.nav-menu').classList.contains('js-nav-open')) {
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
    }
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

// Open and close the nav menu ===================================================================================================
var menuBtn = document.querySelector('.menu-btn');
var BtnBar1 = document.querySelector('.menu-btn__bar-1');
var BtnBar2 = document.querySelector('.menu-btn__bar-2');
var logo = document.querySelector('#logo');
var navCategories = document.querySelectorAll('navbar ul li');
var darkColorPrimary = document.querySelector(':root').style.getPropertyValue('--dark-color-primary');
var navMenuCategories = document.querySelectorAll('.nav-menu ul li');

menuBtn.addEventListener('click', e => {
    var viewportWidth = window.innerWidth;
    menuBtn.classList.toggle('js-btn-open');
    document.querySelector('.nav-menu').classList.toggle('js-nav-open');

    if (menuBtn.classList.contains('js-btn-open')) {
        BtnBar1.style.backgroundColor = "white";
        BtnBar2.style.backgroundColor = "white";
        setTimeout(() => {
            logo.src = "/assets/crop-light-logo.png";
            document.querySelector('a.logo').removeAttribute("href");
            menuBtn.style.position = "fixed";
            menuBtn.style.right = "3rem";
            if (viewportWidth > 900) {
                for (let navCategory of navCategories) {
                    navCategory.style.display = "none";
                }
            }
        }, 150);
    } else {
        BtnBar1.style.backgroundColor = darkColorPrimary;
        BtnBar2.style.backgroundColor = darkColorPrimary;
        setTimeout(() => {
            menuBtn.style.position = "static";
            menuBtn.style.right = "auto";
            logo.src = "/assets/crop-logo.png";
            document.querySelector('a.logo').setAttribute("href", "#home");
            if (viewportWidth > 900) {
                for (let navCategory of navCategories) {
                    navCategory.style.display = "block";
                }
            }
        }, 380);
    }
});

// Close the nav menu if the user clicks on a nav menu category 
for (let navMenuCategory of navMenuCategories) {
    navMenuCategory.addEventListener('click', e => {
        var viewportWidth = window.innerWidth;
        menuBtn.classList.toggle('js-btn-open');
        document.querySelector('.nav-menu').classList.toggle('js-nav-open');
        BtnBar1.style.backgroundColor = darkColorPrimary;
        BtnBar2.style.backgroundColor = darkColorPrimary;
        setTimeout(() => {
            menuBtn.style.position = "static";
            menuBtn.style.right = "auto";
            logo.src = "/assets/crop-logo.png";
            if (viewportWidth > 900) {
                for (let navCategory of navCategories) {
                    navCategory.style.display = "block";
                }
            }
        }, 380);
    });
};