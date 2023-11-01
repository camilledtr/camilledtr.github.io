<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Durthaller-Renard - My developer portfolio</title>
    <meta name="description" content="I'm Camille Durthaller-Renard, a full stack developer transforming ideas into creative
    and user-focused digital products. See my portfolio. Contact me.
    web development projects,
    software engineer salary,
    software engineer qualifications,
    software engineer certifications,
    software engineer experience,
    freelance software engineer,
    freelance developer,
    developer portfolio,
    developer portfolio website,
    developer resume,
    developer cv,
    developer cover letter,
    developer interview,
    programming,
    portfolio website,
    web development,
    frontend developer,
    full stack developer,
    software engineer,
    software developer,
    software engineer portfolio,
    software engineer resume,
    software engineer cv,
    software engineer cover letter,
    software engineer interview,
    backend developer,
    software engineering principles,
    agile software development,
    software engineer remote jobs">
    <link rel="icon" href="public/assets/crop-logo.svg" type="image/svg+xml">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Stardom font -->
    <link href="https://api.fontshare.com/v2/css?f[]=stardom@400&display=swap" rel="stylesheet">
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
                    <i class="fa fa-download" aria-hidden="true"></i>
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
                        <img src="public/assets/projects/ktapp-home.webp" alt="KT project - Home page" class="smartphone" loading="lazy">
                        <img src="public/assets/projects/ktapp-nav.webp" alt="KT project - Navigation menu" class="smartphone" loading="lazy">
                        <img src="public/assets/projects/ktapp-farmers.webp" alt="KT project - Farmer page" class="smartphone" loading="lazy">
                    </div>
                    <div class="project-card">
                        <h3>Knowledge Transfer</h3>
                        <p>Mobile application that helps collecting and analyzing data about farmers to enhance their crops profitability.</p>
                        <p>Its scope extends to nearly <b>150,000</b> farmers trained annually in remote regions of Asia.</p>
                        <div class="stack">
                            <div class="techno">
                                <span>TypeScript</span>
                                <object data="public/assets/techno/typescript.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <span>React Native</span>
                                <object data="public/assets/techno/react.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <span>PHP</span>
                                <object data="public/assets/techno/php.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <span>Laravel</span>
                                <object data="public/assets/techno/laravel.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <span>Postgres</span>
                                <object data="public/assets/techno/pgAdmin.svg" type="image/svg+xml"></object>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project reveal">
                    <img src="public/assets/projects/fractallium.png" alt="Fractallium project" loading="lazy">
                    <div class="project-card">
                        <a class="redirect-icon" href="https://fractallium.com/" target="_blank">
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                        </a>
                        <h3>Fractallium</h3>
                        <p>Website introducing the Fractallium startup</p>
                        <div class="stack">
                            <div class="techno">
                                <span>JavaScript</span>
                                <object data="public/assets/techno/javascript.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <span>React</span>
                                <object data="public/assets/techno/react.svg" type="image/svg+xml"></object>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project reveal">
                    <img src="public/assets/projects/cocktail-home.webp" alt="Cocktail project" loading="lazy">
                    <div class="project-card">
                        <h3>Cocktail</h3>
                        <p>Web application that oversees pre-scheduled courses and enables teachers to register for their upcoming classes.
                        <p>Its yearly coverage encompasses <b>10,000</b> courses for <b>500</b> teachers.</p>
                        <div class="stack">
                            <div class="techno">
                                <span>Python</span>
                                <object data="public/assets/techno/python.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <span>Flask</span>
                                <object data="public/assets/techno/flask.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <span>Javascript</span>
                                <object data="public/assets/techno/javascript.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <span>Postgres</span>
                                <object data="public/assets/techno/pgAdmin.svg" type="image/svg+xml"></object>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project reveal">
                    <img src="public/assets/projects/portfolio-laptop-smartphone.webp" alt="My portfolio" loading="lazy">
                    <div class="project-card">
                        <a class="redirect-icon" href="https://github.com/camilledtr/portfolio" target="_blank">
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                        </a>
                        <h3>My portfolio</h3>
                        <p>Website to share my journey</p>
                        <div class="stack">
                            <div class="techno">
                                <span>HTML</span>
                                <object data="public/assets/techno/html.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <span>Pure CSS</span>
                                <object data="public/assets/techno/css.svg" type="image/svg+xml"></object>
                            </div>
                            <div class="techno">
                                <span>JavaScript</span>
                                <object data="public/assets/techno/javascript.svg" type="image/svg+xml"></object>
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
                    <img src="public/assets/camille.webp" alt="camille" loading="lazy">
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <h2 class="contact section-title">Contact me</h2>
            <form action="#contact" method="post">
                <label for="name">Name</label><br>
                <input class="form-input" type="text" id="name" name="name" required><br>
                <label for="email">Email</label><br>
                <input class="form-input" type="email" id="email" name="email" required><br>
                <label for="subject">Subject</label><br>
                <input class="form-input" type="text" id="subject" name="subject" required><br>
                <label for="message">Message</label><br>
                <textarea class="form-input" id="message" name="message" required></textarea><br>
                <input type="submit" class="primary-btn" value="Send">
                <?php
                if (isset($_POST['message'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];

                    $mailTo = "camilledr10@gmail.com";
                    $result = mail($mailTo, 'From my website: ' . $subject, $message, 'From:' . $email);

                    if ($result) {
                        $statusMessage = 'Mail successfully sent!';
                    } else {
                        $statusMessage = 'Something went wrong. Please try again or contact the administrator: <a style="font-weight: 800; text-decoration: underline;" href="mailto:camilledr10@gmail.com" target="_blank">camilledr10@gmail.com</a>';
                    }
                }
                ?>
                <?php if (isset($statusMessage)) { ?>
                    <p id="form-status" style="text-align: center; color: var(--dark-primary); margin-top: 1rem; font-size: 2rem; font-weight: 800;"><?php echo $statusMessage; ?></p>
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
                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </a>
            </div>
        </footer>

    </div>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="src/app.js"></script>
</body>

</html>