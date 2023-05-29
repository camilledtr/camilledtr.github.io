<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Durthaller-Renard - My portfolio</title>
    <link rel="icon" href="public/assets/crop-logo.svg" type="image/svg+xml">
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Stardom font -->
    <link href="https://api.fontshare.com/v2/css?f[]=stardom@400&display=swap" rel="stylesheet">
    <!-- Poppins font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <!-- Lobster two -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style.css">
</head>

<body>
    <div id="loading-page">
        <div class="word-mask loader">
            <object id="loading-logo" data="/public/assets/crop-logo.svg" type="image/svg+xml"></object>
        </div>
    </div>
    <nav class="navbar-reveal">
        <a class="logo" href="#home"><object id="nav-logo" data="/public/assets/dark-logo.svg" type="image/svg+xml"></object></a>

        <ul>
            <li><a href="#projects" class="hover-underline-animation">Projects</a></li>
            <li><a href="#about" class="hover-underline-animation">About</a></li>
            <li><a href="#contact" class="hover-underline-animation">Contact</a></li>
            <li>
                <div class="my-cv primary-btn">
                    <a class="my-cv" href="public/assets/01_DURTHALLER-RENARD_resume.pdf" download>
                        <span class="material-symbols-outlined">download</span>
                    My CV</a>
                </div>
            </li>
            <div class="menu-btn">
                <p class="menu-btn__bar-1"></p>
                <p class="menu-btn__bar-2"></p>
            </div>
        </ul>
    </nav>

    <nav class="nav-menu">
        <ul class="nav-menu-list">
            <li><a href="#home" class="hover-line-through-animation">Home</a></li>
            <li><a href="#projects" class="hover-line-through-animation">Projects</a></li>
            <li><a href="#about" class="hover-line-through-animation">About</a></li>
            <li><a href="#contact" class="hover-line-through-animation">Contact</a></li>
        </ul>
    </nav>

    <div class="scrolling-sections">

        <section id="home" class="home">
            <div class="socials">
                <a href="https://www.linkedin.com/in/camille-durthaller-renard/" target="_blank">
                    <i class="fa fa-brands fa-linkedin"></i>
                </a>
                <a href="https://www.twitter.com/dtlrnd" target="_blank">
                    <i class="fa fa-solid fa-twitter"></i></a>
                <a href="https://www.github.com/camilledtr" target="_blank">
                    <i class="fa fa-github"></i></a>
            </div>
            <div class="name">
                <div class="word-mask">
                    <h1 class="name-reveal">Camille</h1>
                </div>
                <div class="word-mask">
                    <h1 class="name-text">
                        <span class="name-reveal">Durthaller</span>
                        <span class="hyphen-reveal">-</span>
                        <span class="name-reveal third">Renard</span>
                    </h1>
                </div>
            </div>
            <div class="home-text-reveal">
                <h2>Hi!</h2>
                <p>My name is Camille Durthaller-Renard.</p>
                <p>I'm a fullstack developer, transforming ideas into creative and user-focused digital products.</p>

                <a href="#projects" class="to-portfolio-reveal">
                    <p>See my portfolio</p>
                    <svg viewBox="0 0 19 8" fill="none">
                        <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="white"/>
                    </svg>
                </a>
            </div>
            <h1 class="background-text-reveal">Hello, there.</h1>
        </section>

        <section id="projects" class="projects">
            <div class="title">
                <h2 class="section-title reveal">Projects</h2>
            </div>

            <div class="projects-container">
                <div class="project reveal">
                    <div class="img-container">
                        <img src="public/assets/projects/ktapp-home.webp" alt="project 1 - Home page" class="smartphone" loading="lazy">
                        <img src="public/assets/projects/ktapp-nav.webp" alt="project 1 - Navigation menu" class="smartphone" loading="lazy">
                        <img src="public/assets/projects/ktapp-farmers.webp" alt="project 1 - Farmer page" class="smartphone" loading="lazy">
                    </div>
                    <div class="project-text">
                        <h3>Knowledge Transfer</h3>
                        <p>Mobile application for East-West Seed</p>
                        <div class="stack">
                            <div class="techno">
                                <p>TypeScript</p>
                                <p>React Native</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#5fd3f4" d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-23.9 5.8-35.3 1.3-15.9-9.2-22.5-44.5-13.5-92 1.1-5.6 2.3-11.2 3.7-16.7 22.4 4.8 45 8.1 67.9 9.8 13.2 18.7 27.7 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6.4 19.5.6 29.5.6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8.9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z"/></svg>
                            </div>
                            <div class="techno">
                                <p>PHP</p>
                                <p>Laravel</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#f72c1f" d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z"/></svg>
                            </div>
                            <div class="techno">
                                <p>PostgreSQL</p>
                                <p>pgAdmin</p>
                                <object data="public/assets/techno/pgAdmin.svg" type="image/svg+xml"></object>
                            </div>
                        </div>
                        <div class="more">
                            <div class="secondary-btn"><a href="#">See more</a></div>
                            <p class="coming-soon">Coming soon</p>
                        </div>
                    </div>
                </div>
                <div class="project reveal">
                    <img src="public/assets/projects/cocktail-home.webp" alt="project 2" loading="lazy">
                    <div class="project-text">
                        <h3>Cocktail</h3>
                        <p>Web app to manage enrollment to courses</p>
                        <div class="stack">
                            <div class="techno">
                                <p>Python</p>
                                <p>Flask</p>
                                <object data="public/assets/techno/flask.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <p>Javascript</p>
                                <p>Vanilla</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="js-logo"><path fill='#f5c700' d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM243.8 381.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"/></svg>
                            </div>
                            <div class="techno">
                                <p>PostgreSQL</p>
                                <p>SQLAlchemy</p>
                                <img src="public/assets/techno/sqlalchemy.webp" alt="SQLAlchemy logo" class="sqlalch-logo">
                            </div>
                        </div>
                        <div class="more">
                            <div class="secondary-btn"><a href="#">See more</a></div>
                            <p class="coming-soon">Coming soon</p>
                        </div>
                    </div>
                </div>
                <div class="project reveal">
                    <img src="public/assets/projects/portfolio-laptop-smartphone.webp" alt="project 3" loading="lazy">
                    <div class="project-text">
                        <h3>My portfolio</h3>
                        <p>Website to share my journey</p>
                        <div class="stack">
                            <div class="techno">
                                <p>HTML/CSS</p>
                                <div class="icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#056db6" d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#df3500" d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"/></svg>
                                </div>
                            </div>
                            <div class="techno">
                                <p>JavaScript</p>
                                <p>Vanilla</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="js-logo"><path fill='#f5c700' d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM243.8 381.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"/></svg>
                            </div>
                        </div>
                        <div class="secondary-btn"><a href="https://github.com/camilledtr/portfolio" target="_blank">See more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <h2 class="section-title reveal">Who am I ?</h2>
            <div class="about-container">
                <div class="about-text reveal">
                    <p> 💻 I am passionate about technology and I am excited to take the first step in my career journey as a fullstack developer. I have already had the opportunity to work on several projects lasting several months. These experiences have provided me with a strong foundation in Fullstack development, allowing me to develop a range of skills in areas such as frontend and backend development, database management, and UI/UX design.</p>
                    <p> 🎤 Outside of my professional pursuits, I have a deep passion for music and singing. Ever since I was a child, I have been performing and honing my skills as a singer. I have even had the opportunity to perform in concerts and other public events. I find that my love for music and creativity translates well to my work as a Fullstack developer, where I enjoy finding innovative solutions to complex problems.</p>
                    <p> 📰 In my free time, I love to immerse myself in the world of technology. I stay up-to-date on the latest trends and advancements in the industry by following Twitter personalities and YouTube channels focused on tech news and developments. I also enjoy reading tech blogs on Medium and other online publications. This passion for technology has helped me develop a deep understanding of the field, and I am excited to apply my knowledge to my work as a Fullstack developer.</p>
                </div>

                <div class="about-img reveal">
                    <img src="public/assets/camille.webp" alt="camille" loading="lazy">
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <h2 class="contact section-title reveal">Contact me</h2>
            <form class="reveal" action="#contact" method="post">
                <label for="name">Name :</label><br>
                <input class="form-input" type="text" id="name" name="name" required><br>
                <label for="email">Email :</label><br>
                <input class="form-input" type="email" id="email" name="email" required><br>
                <label for="subject">Subject :</label><br>
                <input class="form-input" type="text" id="subject" name="subject" required><br>
                <label for="message">Message :</label><br>
                <textarea class="form-input" id="message" name="message" required></textarea><br>
                <input type="submit" class="primary-btn" value="Send">
                <?php
                if (isset($_POST['message'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];

                    $mailTo = "camilledr10@gmail.com";
                    $result = mail($mailTo, $subject, $message, 'From:' . $email);

                    if ($result) {
                        $statusMessage = 'Mail successfully sent!';
                    } else {
                        $statusMessage = 'Something went wrong. Please try again or contact the administrator: <a href="mailto:camilledr10@gmail.com" target="_blank">Send email</a>';
                    }
                }
                ?>
                <?php if (isset($statusMessage)) { ?>
                    <p id="form-status" style="text-align: center; color: var(--dark-secondary); margin-top: 1rem; font-size: 2rem; font-weight: 800;"><?php echo $statusMessage; ?></p>
                <?php } ?>
            </form>
        </section>

        <footer>
            <div class="info">
                <p>©2022 - 2023 &nbsp; Made by CC</p>
                <object id="footer-logo" data="public/assets/white-logo.svg" type="image/svg+xml"></object>
            </div>
            <div class="go-to-top">
                <a href="#home">
                    <span class="material-symbols-outlined">keyboard_arrow_up</span>
                </a>
            </div>
        </footer>

    </div>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="src/app.js"></script>
</body>

</html>