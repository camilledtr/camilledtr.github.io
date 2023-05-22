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
    <!-- Lobster two -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style.css">
</head>

<body>
    <nav id="navbar">
        <a class="logo" href="#home"><object id="nav-logo" data="/public/assets/logo.svg" type="image/svg+xml"></object></a>

        <ul>
            <li><a href="#projects" class="hover-underline-animation">Projects</a></li>
            <li><a href="#about" class="hover-underline-animation">About</a></li>
            <li><a href="#contact" class="hover-underline-animation">Contact</a></li>
            <li>
                <div class="my-cv primary-btn"><a class="my-cv" href="public/assets/01_DURTHALLER-RENARD_resume.pdf" download><span class="material-symbols-outlined">
                            download
                        </span>My CV</a>
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
                <h1 class="name-reveal">Camille</h1>
                <h1 class="name-text">
                    <span class="name-reveal">Durthaller</span>
                    <span class="hyphen">-</span>
                    <span class="name-reveal">Renard</span>
                </h1>
            </div>
            <div class="home-text">
                <h2>Hi!</h2>
                <p>My name is Camille Durthaller-Renard.</p>
                <p>I'm a fullstack developer, transforming ideas into creative and user-focused digital products.</p>

                <a href="#projects" class="to-portfolio">
                    <p>See my portfolio</p>
                    <svg xmlns="http://www.w3.org/2000/svg"
                    width="0.79in" height="0.566667in"
                    viewBox="0 0 237 170">
                        <path id="Selection"
                            fill="white" stroke="none"
                            d="M 137.00,53.00
                            C 137.00,53.00 137.00,22.00 137.00,22.00
                                137.05,18.25 137.10,14.30 140.28,11.70
                                145.77,7.20 151.46,11.45 156.00,14.88
                                156.00,14.88 191.00,42.21 191.00,42.21
                                191.00,42.21 221.00,65.58 221.00,65.58
                                225.06,68.74 230.79,72.20 230.79,78.00
                                230.79,83.80 225.06,87.26 221.00,90.42
                                221.00,90.42 191.00,113.80 191.00,113.80
                                191.00,113.80 156.00,141.12 156.00,141.12
                                151.46,144.55 145.77,148.80 140.28,144.30
                                136.64,141.32 137.01,136.23 137.00,132.00
                                137.00,132.00 137.00,103.00 137.00,103.00
                                137.00,103.00 29.00,103.00 29.00,103.00
                                23.31,102.99 18.74,102.82 14.33,98.61
                                9.29,93.80 9.01,86.50 9.00,80.00
                                8.98,69.42 8.24,57.33 21.00,53.64
                                23.56,52.89 26.35,53.00 29.00,53.00
                                29.00,53.00 137.00,53.00 137.00,53.00 Z" />
                    </svg>
                </a>
            </div>
            <h1 class="background-text">Hello, there.</h1>
        </section>

        <section id="projects" class="projects reveal">
            <div class="title">
                <h2 class="section-title">Projects</h2>
            </div>

            <div class="projects-container">
                <div class="project reveal">
                    <div class="img-container">
                        <img src="public/assets/projects/ktapp-home.png" alt="project 1 - Home page" class="smartphone">
                        <img src="public/assets/projects/ktapp-nav.png" alt="project 1 - Navigation menu" class="smartphone">
                        <img src="public/assets/projects/ktapp-farmers.png" alt="project 1 - Farmer page" class="smartphone">
                    </div>
                    <div class="project-text">
                        <h3>Knowledge Transfer</h3>
                        <p>Mobile application for East-West Seed</p>
                        <div class="techno">
                            <p>TypeScript - React Native</p>
                            <p>PHP - Laravel</p>
                            <p>PostgreSQL - pgAdmin</p>
                        </div>
                        <div class="more">
                            <div class="secondary-btn"><a href="#">See more</a></div>
                            <p class="coming-soon">Coming soon</p>
                        </div>
                    </div>
                </div>
                <div class="project reveal">
                    <img src="public/assets/projects/cocktail-home.png" alt="project 2">
                    <div class="project-text">
                        <h3>Cocktail</h3>
                        <p>Website to manage enrollment to courses</p>
                        <div class="techno">
                            <p>Python - Flask</p>
                            <p>JavaScript Vanilla</p>
                            <p>PostgreSQL</p>
                        </div>
                        <div class="more">
                            <div class="secondary-btn"><a href="#">See more</a></div>
                            <p class="coming-soon">Coming soon</p>
                        </div>
                    </div>
                </div>
                <div class="project reveal">
                    <img src="public/assets/projects/portfolio-laptop-smartphone.png" alt="project 3">
                    <div class="project-text">
                        <h3>My portfolio</h3>
                        <p>Share my journey</p>
                        <div class="techno">
                            <p>HTML/CSS</p>
                            <p>JavaScript Vanilla</p>
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
                    <img src="public/assets/camille.png" alt="camille">
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
                <object id="footer-logo" data="public/assets/logo.svg" type="image/svg+xml"></object>
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