<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Durthaller-Renard - My portfolio</title>
    <link rel="icon" href="/assets/crop-logo.png" type="image/png">
    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Stardom font -->
    <link href="https://api.fontshare.com/v2/css?f[]=stardom@400&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <navbar id="navbar">
        <a class="logo" href="#home"><img src="/assets/crop-logo.png" alt="logo" id="logo"></a>
        <ul>
            <li><a href="#projects" class="hover-underline-animation">Projects</a></li>
            <li><a href="#about" class="hover-underline-animation">About</a></li>
            <li><a href="#contact" class="hover-underline-animation">Contact</a></li>
            <li>
                <div class="my-cv primary-btn"><a class="my-cv" href="/assets/01_DURTHALLER-RENARD_resume.pdf" download><span class="material-symbols-outlined">
                            download
                        </span>My CV</a>
                </div>
            </li>
            <div class="menu-btn">
                <p class="menu-btn__bar-1"></p>
                <p class="menu-btn__bar-2"></p>
            </div>
        </ul>
    </navbar>

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
                <img src="/assets/surname.png" alt="surname" id="my-surname">
                <img src="/assets/name.png" alt="name" id="my-name">
            </div>
            <div class="home-text">
                <h2>Hi!</h2>
                <p>My name is Camille Durthaller-Renard.</p>
                <p>I'm a fullstack developer.</p>

                <div class="to-portfolio">
                    <p>See my portfolio</p>
                    <a href="#projects">
                        <div class="arrows">
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        </div>
                    </a>
                </div>

            </div>
        </section>

        <section id="projects" class="projects-great-container">
            <!-- <div class="background sticker"></div> -->

            <div class="projects reveal">
                <div class="title">
                    <h2 class="section-title">Projects</h2>
                </div>

                <div class="projects-container">
                    <div class="project reveal">
                        <div class="img-container">
                            <img src="/assets/projects/ktapp-home.jpg" alt="project 1 - Home page" class="smartphone">
                            <img src="/assets/projects/ktapp-nav.jpg" alt="project 1 - Navigation menu" class="smartphone">
                            <img src="/assets/projects/ktapp-farmers.jpg" alt="project 1 - Farmer page" class="smartphone">
                        </div>
                        <div class="project-text">
                            <h3>Knowledge Transfer</h3>
                            <p>Mobile application for East-West Seed</p>
                            <div class="techno">
                                <p>JavaScript - React Native</p>
                                <p>PHP - Laravel</p>
                                <p>PostgreSQL - pgAdmin</p>
                            </div>
                            <div class="primary-btn"><a href="#">See more</a></div>
                        </div>
                    </div>
                    <div class="project reveal">
                        <img src="/assets/projects/cocktail-home.jpg" alt="project 2">
                        <div class="project-text">
                            <h3>Cocktail</h3>
                            <p>Website to manage enrollment to courses</p>
                            <div class="techno">
                                <p>Python - Flask</p>
                                <p>JavaScript Vanilla</p>
                                <p>PostgreSQL</p>
                            </div>
                            <div class="primary-btn"><a href="#">See more</a></div>
                        </div>
                    </div>
                    <div class="project reveal">
                        <img src="/assets/projects/portfolio-laptop-smartphone.jpg" alt="project 3">
                        <div class="project-text">
                            <h3>My portfolio</h3>
                            <p>Share my journey</p>
                            <div class="techno">
                                <p>HTML/CSS</p>
                                <p>JavaScript Vanilla</p>
                            </div>
                            <div class="primary-btn"><a href="https://github.com/camilledtr/candy-museum" target="_blank">See more</a>
                            </div>
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
                    <img src="/assets/camille.png" alt="camille">
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <h2 class="contact section-title reveal">Contact me</h2>
            <form class="reveal" action="contact.php" method="post">
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
                include 'contact.php';
                ?>
            </form>
        </section>

        <footer>
            <div class="custom-divider"></div>
            <p>©2022 - 2023 &nbsp; Made by CC</p>
            <img src="/assets/light-logo.png" />
        </footer>
        <div class="go-to-top">
            <a href="#home">
                <span class="material-symbols-outlined">keyboard_arrow_up</span>
            </a>
        </div>
    </div>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="app.js"></script>
</body>

</html>