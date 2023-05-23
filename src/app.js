const viewportWidth = window.innerWidth;

//Loading page ============================================================================================================
const loadingPage = document.getElementById("loading-page");
loadingPage.style.display = "block";
const revealAnims = [];
const revealNames = document.querySelectorAll(".name-reveal");
const revealHyphen = document.querySelector(".hyphen-reveal");
const revealHomeText = document.querySelector(".home-text-reveal");
const revealCTA = document.querySelector(".to-portfolio-reveal");
const revealBackground = document.querySelector(".background-text-reveal");
const revealNavbar = document.querySelector(".navbar-reveal");

window.onload = function () {
    const loader = document.getElementById("loading-logo");
    loader.classList.add("loaded");
    if (viewportWidth < 600) {
        for (let revealName of revealNames) {
            revealName.classList.add("active");
        }
        revealHyphen.classList.add("active");
        revealHomeText.classList.add("active");
        revealCTA.classList.add("active");
        revealBackground.classList.add("active");
        revealNavbar.classList.add("active");
        setTimeout(() => {
            loadingPage.style.display = "none";
        }, 1000);
    } else {
        setTimeout(() => {
            loadingPage.style.display = "none";
            for (let revealName of revealNames) {
                revealName.classList.add("active");
            }
            revealHyphen.classList.add("active");
            revealHomeText.classList.add("active");
            revealCTA.classList.add("active");
            revealBackground.classList.add("active");
            revealNavbar.classList.add("active");
        }, 1000);
    }
}

// Reveal text of sections when scroll =================================================================================
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

// Hide the navbar when scrolling down and show it when scrolling up =====================================================
let prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    const currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.querySelector(".navbar-reveal").classList.add("scrolled-down");
    } else {
        document.querySelector(".navbar-reveal").classList.remove("scrolled-down");
    }
    prevScrollpos = currentScrollPos;
}


// Open and close the nav menu ===================================================================================================
const menuBtn = document.querySelector('.menu-btn');
const BtnBar1 = document.querySelector('.menu-btn__bar-1');
const BtnBar2 = document.querySelector('.menu-btn__bar-2');
const navCategories = document.querySelectorAll('.navbar-reveal ul li');
const navMenuCategories = document.querySelectorAll('.nav-menu ul li');
const darkPrimaryColor = getComputedStyle(document.querySelector(':root')).getPropertyValue('--dark-primary');

menuBtn.addEventListener('click', e => {
    const viewportWidth = window.innerWidth;
    const navLogo = document.getElementById('nav-logo').contentDocument.querySelector('svg').querySelector('path');
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
        const navLogo = document.getElementById('nav-logo').contentDocument.querySelector('svg').querySelector('path');
        menuBtn.classList.toggle('js-btn-open');
        document.querySelector('.nav-menu').classList.toggle('js-nav-open');
        BtnBar1.style.backgroundColor = darkPrimaryColor;
        BtnBar2.style.backgroundColor = darkPrimaryColor;
        setTimeout(() => {
            menuBtn.style.position = "static";
            menuBtn.style.right = "auto";
            navLogo.setAttribute('fill', darkPrimaryColor);
            if (viewportWidth > 900) {
                for (let navCategory of navCategories) {
                    navCategory.style.display = "block";
                }
            }
        }, 380);
    });
};