const darkPrimaryColor = getComputedStyle(document.querySelector(':root')).getPropertyValue('--dark-primary');

// Fill svg icons with the right color =================================================================================
window.onload = function () {
    // Get all svg icons
    const navLogo = document.querySelector('#nav-logo').contentDocument.querySelector('svg').querySelector('path');
    const footerLogo = document.querySelector('#footer-logo').contentDocument.querySelector('svg').querySelector('path');

    // Fill svg icons with the right color
    navLogo.setAttribute('fill', darkPrimaryColor);
    footerLogo.setAttribute('fill', "#fff");
}


// Reveal text of sections when scroll =================================================================================
const viewportWidth = window.innerWidth;

if (viewportWidth < 600) {
    const reveals = document.querySelectorAll(".reveal");
    for (let i = 0; i < reveals.length; i++) {
        reveals[i].classList.add("active");
    }
} else {
    window.addEventListener("scroll", reveal);
}

function reveal() {
    const reveals = document.querySelectorAll(".reveal");

    for (let i = 0; i < reveals.length; i++) {
        const windowHeight = window.innerHeight;
        const elementTop = reveals[i].getBoundingClientRect().top;
        const elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}


// Hide navbar on scroll down, display on scroll up ====================================================================
let lastScrollTop; // This Varibale will store the top position

const navbar = document.getElementById('navbar'); // Get The NavBar

window.addEventListener('scroll', function () {
    // If the nav menu is open, we don't want the navbar to hide
    if (!document.querySelector('.nav-menu').classList.contains('js-nav-open')) {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
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


// Open and close the nav menu ===================================================================================================
const menuBtn = document.querySelector('.menu-btn');
const BtnBar1 = document.querySelector('.menu-btn__bar-1');
const BtnBar2 = document.querySelector('.menu-btn__bar-2');
const navCategories = document.querySelectorAll('#navbar ul li');
const navMenuCategories = document.querySelectorAll('.nav-menu ul li');

menuBtn.addEventListener('click', e => {
    const viewportWidth = window.innerWidth;
    const navLogo = document.querySelector('#nav-logo').contentDocument.querySelector('svg').querySelector('path');
    menuBtn.classList.toggle('js-btn-open');
    document.querySelector('.nav-menu').classList.toggle('js-nav-open');

    if (menuBtn.classList.contains('js-btn-open')) {
        BtnBar1.style.backgroundColor = "white";
        BtnBar2.style.backgroundColor = "white";
        setTimeout(() => {
            navLogo.setAttribute('fill', "white");
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
        BtnBar1.style.backgroundColor = darkPrimaryColor;
        BtnBar2.style.backgroundColor = darkPrimaryColor;
        setTimeout(() => {
            menuBtn.style.position = "static";
            menuBtn.style.right = "auto";
            navLogo.setAttribute('fill', darkPrimaryColor);
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
        const viewportWidth = window.innerWidth;
        menuBtn.classList.toggle('js-btn-open');
        document.querySelector('.nav-menu').classList.toggle('js-nav-open');
        BtnBar1.style.backgroundColor = darkPrimaryColor;
        BtnBar2.style.backgroundColor = darkPrimaryColor;
        setTimeout(() => {
            menuBtn.style.position = "static";
            menuBtn.style.right = "auto";
            navLogo.setAttribute('fill', "white");
            if (viewportWidth > 900) {
                for (let navCategory of navCategories) {
                    navCategory.style.display = "block";
                }
            }
        }, 380);
    });
};