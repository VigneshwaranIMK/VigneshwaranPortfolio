<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title style="color: #ffffff">Vigneshwaran Portfolio</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&family=Roboto:wght@700&display=swap"
            rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .hero-container {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1px;
                height: 90vh;
                background-image: url('images/bg1.jpg');
                background-repeat: repeat-x;
                background-size: cover;
                background-position: center;
            }

            .about-container {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 90vh;
                width: auto;
                background-image: url('images/bg2.jpg');
                background-repeat: repeat-x;
                background-size: cover;
                background-position: center;
            }

            .profile-container {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                gap: 40px;
                width: 100%;
                margin: 0;
                padding: 0 27px;
                height: 100%;
            }

            .profile-photo {
                width: 315px;
                height: 320px;
                border-radius: 50%;
                background-size: cover;
                background-repeat: no-repeat;
                background-image: url(images/profile_pic.png);
                border: 2px solid #ccc;
                background-color: #000000;
                flex-shrink: 0;
                margin: 0;
                /* position: absolute; */
                /* This removes the element from normal flow */
                z-index: 1;
                /* Ensures the photo is in front */
            }

            .profile-text-container {
                flex: 1;
                /* padding-top: 25px;
                padding-left: 137px; */
                /* margin-left: 211px; */
                /* height: 302px; */
                background: radial-gradient(circle, #0d0de2, #feb47b);
                /* margin-right: 312px; */
                border-radius: 15px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                position: relative;
                z-index: 0;
                height: 100%;
            }

            .profile-title {
                font-family: 'Playfair Display, Merriweather, Bitter';
                font-size: 3rem;
                margin-bottom: 20px;
                color: #fff700;
                /* Pleasant and modern color */
                font-weight: 700;
                /* Bold for emphasis */
                animation: fadeInLetters 1.5s ease-in-out;
            }

            .profile-text {
                flex: 1;
                text-align: left;
                color: #fff203;
                text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
                font-style: normal;
                font-size: 22px;
                font-weight: 400;
                font-family: 'Georgia, Crimson Text, Libre Baskerville';
                animation: fadeInLetters 1.5s
            }

            .profile-text-animation span {
                animation-delay: calc(var(--i) * 0.1s);
            }

            .profile-description {
                color: rgb(250, 250, 250);
            }

            .profile-title h1 span:nth-child(1) {
                animation: fadeInLetters 1.5s ease-in-out;
                animation-delay: 0s;
                animation-fill-mode: both;
            }

            .profile-title h1 span:nth-child(2) {
                animation: fadeInLetters 1.5s ease-in-out;
                animation-delay: 0.3s;
                animation-fill-mode: both;
            }

            .profile-title span span:nth-child(1) {
                animation: fadeInLetters 1.5s ease-in-out;
                animation-delay: 0s;
                animation-fill-mode: both;
            }

            .profile-title span span:nth-child(2) {
                animation: fadeInLetters 1.5s ease-in-out;
                animation-delay: 0.4s;
                animation-fill-mode: both;
            }

            @keyframes fadeInLetters {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .highlight {
                color: #f1f1f1;
                font-style: bold;
                font-family: 'Montserrat, Poppins, Raleway, Lato';
            }

            .resume-buttons {
                margin-top: 15px;
            }

            .resume-buttons .btn {
                background-color: #00ff08;
                color: #f4f4f4;
                text-decoration: none;
                padding: 10px 20px;
                font-size: 1rem;
                border-radius: 5px;
                transition: all 0.3s ease;
                font-weight: bold;
            }

            .resume-buttons .btn:hover {
                background-color: #FFA500;
                /* Orange for hover effect */
                color: #fff;
                box-shadow: 0 4px 8px rgba(255, 165, 0, 0.6);
                transform: scale(1.1);
            }

            .hero-section::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.2);
                /* Optional dark overlay */
            }

            .hero-btn {
                padding: 12px 30px;
                background-color: #fff;
                color: #007bff;
                font-size: 1rem;
                font-weight: bold;
                text-transform: uppercase;
                border: 2px solid #fff;
                border-radius: 30px;
                transition: all 0.3s ease-in-out;
                text-decoration: none;
            }

            .hero-btn:hover {
                background-color: #007bff;
                color: #fff;
                border-color: #fff;
            }

            .card:hover {
                transform: scale(1.05);
                transition: transform 0.3s;
            }

            .navbar-nav .nav-link:hover {
                color: #f0ad4e;
                transition: color 0.3s ease;
            }

            .nav-link {
                color: white;
                /* Set text color to white */
                transition: color 0.3s ease, background-color 0.3s ease;
            }

            .nav-link:hover {
                color: #fdfefe;
                border-radius: 5px;
                padding: 5px;
            }

            .flip-card {
                perspective: 1000px;
                margin: 15px auto;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
                border-radius: 10px;
                transition: box-shadow 0.3s ease;
                overflow: hidden;
            }

            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 200px;
                text-align: center;
                transform-style: preserve-3d;
                transition: transform 0.6s;
            }

            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }

            .flip-card-front,
            .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                backface-visibility: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.2rem;
                font-weight: bold;
                color: rgb(249, 204, 2);
                border-radius: 8px;
            }

            .flip-card-front {
                background-color: #007ffd;
            }

            .flip-card-back {
                transform: rotateY(180deg);
                color: rgba(247, 152, 0, 0);
                font-size: 1.1rem;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 8px;
            }

            .skills {
                display: flex;
                flex-direction: column;
                background-image: url('images/bg3.jpg');
                align-items: center;
                justify-content: center;
                min-height: 40vh;
            }

            .skills-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
                width: 50%;
                justify-items: center;
                align-items: center;
            }

            .flip-card {
                background-color: transparent;
                perspective: 1000px;
            }

            .flip-card-inner {
                position: relative;
                width: 100px;
                height: 130px;
                text-align: center;
                transition: transform 0.6s;
                transform-style: preserve-3d;
            }

            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }

            .flip-card-front,
            .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                backface-visibility: hidden;
                border-radius: 8px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: #080808;
                font-weight: bold;
                font-size: 15px;
            }

            .flip-card-front {
                background-color: #f2e584ee;
            }

            .flip-card-back {
                background-color: #f90707;
                transform: rotateY(180deg);
                font-size: 1.5em;
                bottom: 0
            }

            .skill img {
                width: 50px;
                height: auto;
                margin-bottom: 10px;
            }

            .skills h2 {
                margin-top: 2%;
                margin-bottom: 20px;
                font-size: 2em;
                color: #0c0c0c;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
                text-transform: uppercase;
            }

            .project-grid {
                display: flex;
                background-image: url('images/bg4.jpg');
                justify-content: center;
                height: 100%;
                gap: 20px;
                flex-wrap: wrap;
            }

            .project-card {
                background-color: white;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                width: 300px;
                height: 100%;
            }

            .project-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
            }

            .project-card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }

            .project-content {
                padding: 20px;
            }

            .project-content h3 {
                font-size: 24px;
                margin-bottom: 10px;
                color: #333;
            }

            .project-content p {
                font-size: 16px;
                color: #666;
                margin-bottom: 20px;
            }

            .view-project {
                display: inline-block;
                padding: 10px 20px;
                background-color: #0800ff;
                color: rgb(245, 245, 245);
                text-decoration: none;
                border-radius: 4px;
                transition: background-color 0.3s ease;
            }

            .view-project:hover {
                background-color: #e68900;
            }

            .scroll-btn-container {
                animation: fadeInUp 1.5s ease-in-out;
            }

            /* Styling for the paragraph */
            .scroll-text {
                font-size: 15px;
                font-weight: bold;
                color: #f1f1f4;
                font-family: 'Lora', serif;
            }

            .scroll-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                color: #fff;
                font-weight: bold;
                font-size: 10px;
                padding: 7px 8px;
                border-radius: 50px;
                background: linear-gradient(45deg, #ffee02, #05c525);
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease-in-out;
                margin-bottom: 15px;
            }

            /* Adding hover effects for the scroll button */
            .scroll-btn:hover {
                background: linear-gradient(45deg, #2575fc, #6a11cb);
                transform: translateY(-3px);
                box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
            }

            /* Adding focus effects for accessibility */
            .scroll-btn:focus {
                outline: none;
                box-shadow: 0px 0px 10px 3px rgba(37, 117, 252, 0.7);
            }

            /* Adding a fade-in animation */
            @keyframes fadeInUp {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .Myabout {
                position: relative;
            }

            .about_text {
                text-align: center;
                font-weight: bold;
                font-family: 'Georgia', 'Times New Roman', serif;
                color: rgb(0, 0, 0);
                text-transform: uppercase;
            }

            .about_paragraph {
                text-align: left;
                font-style: italic;
                font-size: 20px;
                font-weight: bold;
                margin: 4% auto;
                padding: 30px;
                width: 70%;
                color: #000000;
                background-image: url('images/about_bg.jpg');
                border: 2px solid #000;
                border-radius: 15px;
                box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
                list-style-type: disc;
                font-family: 'Georgia', 'Times New Roman', serif;
            }

            .about_paragraph li {
                margin-bottom: 10px;
                line-height: 1.6;
            }

            .col-md-12 h2 {
                text-align: center;
                margin-top: 2%;
                margin-bottom: 20px;
                font-size: 2em;
                color: #0c0c0c;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
                text-transform: uppercase;
            }

            .download-btn {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: linear-gradient(135deg, #4CAF50, #2E7D32);
                color: white;
                font-weight: bold;
                text-transform: uppercase;
                padding: 12px 20px;
                border-radius: 50px;
                text-decoration: none;
                transition: 0.3s ease-in-out;
                box-shadow: 0 5px 15px rgba(76, 175, 80, 0.4);
                font-size: 16px;
            }

            .download-btn i {
                font-size: 18px;
            }

            .download-btn:hover {
                background: linear-gradient(135deg, #2E7D32, #4CAF50);
                transform: translateY(-3px);
                box-shadow: 0 10px 20px rgba(76, 175, 80, 0.5);
            }

            @media screen and (max-width: 740px) {
                .hero-container {
                    position: relative;
                    width: fit-content;
                }

                .about-container {
                    position: relative;
                    width: auto;
                    background-image: url('images/bg2.jpg');
                    background-repeat: repeat-x;
                    background-size: cover;
                    background-position: center;
                }

                .Myabout {
                    position: relative;
                    width: auto;
                }
            }
        </style>

    <body>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <nav class="d-flex dropdown-item end-0 justify-content-end navbar p-3  top-0" style="background: rgba(0,0,0,0.5);">
            <div class="d-flex">
                <ul class="navbar-nav flex-row">
                    <li class="nav-item me-3">
                        <a class="nav-link fw-bold" href="#about" style="color:black;">
                            <i class="fas fa-user"></i> About
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link fw-bold" href="#skills" style="color: black;">
                            <i class="fas fa-tools"></i> Skills
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link fw-bold" href="#projects" style="color: black;">
                            <i class="fas fa-briefcase"></i> Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#contact" style="color: black;">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="hero-container">
            <div class="profile-container">
                <div class="profile-photo">
                </div>
                <div class="profile-text-container">
                    <div class="profile-text">
                        <h1 class="profile-title">
                            Hi I'm <span class="highlight">Vigneshwaran</span>
                        </h1>
                        <p class="profile-description">
                            PHP - Laravel Full Stack Developer
                        </p>
                        <div class="col-md-8">
                            <div class="scroll-btn-container">
                                <p class="scroll-text">Interested? Learn more below!</p>
                                <a href="#about" class="btn scroll-btn">
                                    Scroll Down &nbsp; &nbsp; <i class="fas fa-arrow-down"></i>
                                </a>
                            </div>
                        </div>
                        <div class="resume-buttons">
                            <a href="documents/Vigneshwaran_resume.pdf" class="tapering-button" download>
                                <div class="tapering-button__start-content">
                                    {{-- <img src="images/cloud download.png" class="tapering-button__icon-before"
                                        alt="cloud-icon"> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708z"/>
                                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                                          </svg>
                                    <span>Resume</span>
                                </div>
                                <div class="tapering-button__final-content">
                                    <img src="https://bato-web-agency.github.io/bato-shared/img/download-buttons/check-icon.svg"
                                        class="tapering-button__icon-after" alt="check-icon">
                                    <span>Downloaded</span>
                                </div>
                                <div class="tapering-button__loader"></div>
                            </a>
                        </div>

                        {{-- <a href="documents/Vigneshwaran_resume.pdf" class="btn download-btn" download>
                                <i class="fas fa-download"></i> Download Resume
                            </a> --}}

                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->

        <section id="about" class="about-container">
            <div class="Myabout">
                <div class="col-lg-12">
                    <h2 class="about_text">
                        About Me
                    </h2>
                    <ul class="about_paragraph">
                        <li><span>Software Trainee</span> passionate about crafting modern, responsive, and
                            user-friendly web applications.</li>
                        <li>Specialize in <span>PHP, Laravel, HTML, CSS, JavaScript, and MySQL</span>.</li>
                        <li>Aim to turn innovative ideas into impactful digital solutions that align with client goals.
                        </li>
                        <li>With a keen eye for detail and a drive to learn, I enjoy exploring new technologies and
                            constantly improving my skills to deliver exceptional results.</li>
                        <li>Let's build something amazing together!</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="skills" id="skills">
            <h2>My Skills</h2>
            <br>
            <div class="skills-grid">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front skill">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg"
                                alt="HTML Logo" />
                            <span>HTML</span>
                        </div>
                        <div class="flip-card-back skill-back skill-90" id="fuelLevel">
                            <span>90%</span>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front skill">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg"
                                alt="CSS Logo" />
                            <span>CSS</span>
                        </div>
                        <div class="flip-card-back skill-back skill-85" id="fuelLevel">
                            <span>85%</span>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front skill">
                            <img src="images/js.png" alt="JavaScript Logo" />
                            <span>JavaScript</span>
                        </div>
                        <div class="flip-card-back skill-back skill-80" id="fuelLevel">
                            <span>80%</span>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front skill">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg"
                                alt="Laravel Logo" />
                            <span>Laravel</span>
                        </div>
                        <div class="flip-card-back skill-back skill-95" id="fuelLevel">
                            <span>95%</span>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front skill">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg"
                                alt="PHP Logo" />
                            <span>PHP</span>
                        </div>
                        <div class="flip-card-back skill-back skill-90" id="fuelLevel">
                            <span>90%</span>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front skill">
                            <img src="https://upload.wikimedia.org/wikipedia/en/d/dd/MySQL_logo.svg"
                                alt="MySQL Logo" />
                            <span>MySQL</span>
                        </div>
                        <div class="flip-card-back skill-back skill-80" id="fuelLevel">
                            <span>80%</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="projects" id="projects">
            <div class="project-grid">
                <div class="col-md-24">
                    <h2>My Projects</h2>
                </div>
                <div class="project-card">
                    <img src="https://www.springboard.com/library/static/d2414c8bcdef19e1cc153a9c1df93f76/857b3/shutterstock_1187539687.jpg"
                        alt="IBM Project Image">
                    <div class="project-content">
                        <h3>IBM Project</h3>
                        <p>Analytics for Hospitals and Health-Care Data</p>
                        <a href="#ibm-project" class="view-project">Click to View Full Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyPi7pd-qaVYRKwgIKvvQfJxvgwkI85UmZIQ&s"
                        alt="Final Year Project Image">
                    <div class="project-content">
                        <h3>Machine Learning</h3>
                        <p>Fake News Detection Using Machine Learning and Data Science</p>
                        <a href="documents/ML_Project_Overview.docx" class="view-project">Click to View Full
                            Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2TMaVsjEfGWj15PvUGjWYBzoYGKHdmXdY-w&s"
                        alt="Third Year Project Image">
                    <div class="project-content">
                        <h3>Android Development</h3>
                        <p>Accident Detection and Alerting Android Application</p>
                        <a href="#third-year-project" class="view-project">Click to View Full Project</a>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact" id="contact"
            style="padding: 2rem; text-align: center; background-color: #f8f9fa;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Get In Touch</h2>
            <p style="font-size: 1.1rem; color: #555;">I’d love to hear from you! Feel free to reach out through any of
                the
                following ways:</p>

            <div style="margin-top: 2rem;">
                <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 1rem;">
                    <i class="fas fa-envelope" style="color: #080808; margin-right: 0.5rem;"></i>
                    <span style="font-weight: bold; color: #080808; margin-right: 0.5rem;">Email:</span>
                    <a href="mailto:vigneshwaranimk@gmail.com"
                        style="color: #007bff; text-decoration: none;">vigneshwaranimk@gmail.com</a>
                </div>

                <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 1rem;">
                    <i class="fab fa-linkedin" style="color: #0077b5; margin-right: 0.5rem;"></i>
                    <span style="font-weight: bold; color: #080808; margin-right: 0.5rem;">LinkedIn:</span>
                    <a href="https://www.linkedin.com/in/vigneshwaranimk" target="_blank"
                        style="color: #007bff; text-decoration: none;">Connect with me now</a>
                </div>
            </div>

            <form action="{{ route('send.message') }}" method="POST"
                style="max-width: 500px; margin: 2rem auto; padding: 1rem; border: 1px solid #ccc; border-radius: 8px; background-color: #fff;">
                @csrf

                <h3 style="margin-bottom: 1rem; font-size: 1.5rem;">Send a Message</h3>

                <div style="margin-bottom: 1rem;">
                    <input type="text" name="name" placeholder="Your Name"
                        style="width: 100%; padding: 0.75rem; border-radius: 4px; border: 1px solid #ccc; font-size: 1rem;"
                        required>
                </div>

                <div style="margin-bottom: 1rem;">
                    <input type="email" name="email" placeholder="Your Email"
                        style="width: 100%; padding: 0.75rem; border-radius: 4px; border: 1px solid #ccc; font-size: 1rem;"
                        required>
                </div>

                <div style="margin-bottom: 1rem;">
                    <textarea name="message" placeholder="Your Message" rows="4"
                        style="width: 100%; padding: 0.75rem; border-radius: 4px; border: 1px solid #ccc; font-size: 1rem;" required></textarea>
                </div>
                <div>
                    <button type="submit" id = "send"
                        style="width: 100%; padding: 0.75rem; background-color: #007bff; color: #fff; border: none; border-radius: 4px; font-size: 1rem; cursor: pointer;">
                        Send Message
                    </button>
                </div>
                @if (session('success'))
                    <div id="successMessage"
                        style="display: flex; align-items: center; margin-top: 1rem; padding: 1rem; background-color: #d4edda; 
                color: #155724; border-radius: 4px; font-size: 1rem; border: 1px solid #c3e6cb;">
                        <span style="font-size: 1.5rem; margin-right: 0.5rem;">✔️</span>
                        {{ session('success') }}
                    </div>
                @endif
            </form>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const successMessage = document.getElementById('successMessage');
                const form = document.getElementById('myForm');

                // Check if the success message exists
                if (successMessage) {
                    successMessage.style.display = 'flex'; // Show the success message

                    // Clear the form after the success message
                    form.reset();

                    // Optionally, hide the success message after a delay (e.g., 5 seconds)
                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 5000);
                }
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const button = document.querySelector(".tapering-button");

                if (!button) return;

                button.addEventListener("click", (event) => {
                    if (button.classList.contains("completed")) return;

                    event.preventDefault();
                    button.classList.add("active");

                    setTimeout(() => {
                        button.classList.remove("active");
                        button.classList.add("completed");

                        // Simulate clicking the button again to allow download
                        window.location.href = button.getAttribute("href");
                    }, 3000);
                });
            });
        </script>
        <script src="js/app.js"></script>
    </body>
    <style>
        .tapering-button {
            top: 10px;
            margin-left: 78%;
            margin-right: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 136px;
            padding: 3px 0px;
            border-radius: 6px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            color: white;
            background: #0037ff;
            position: relative;
            overflow: hidden;
            transition: transform 0.3sease, background 0.3sease;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            border: none;
        }

        .tapering-button:hover {
            transform: scale(0.96);
        }

        .tapering-button.active {
            background: #28a745;
        }

        .tapering-button.completed {
            background: #28a745;
        }

        .tapering-button__loader {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: white;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 3s linear;
        }

        .tapering-button.active .tapering-button__loader {
            transform: scaleX(1);
        }

        .tapering-button__icon-before,
        .tapering-button__icon-after {
            width: 24px;
            margin-right: 8px;
        }

        .tapering-button__final-content {
            display: none;
        }

        .tapering-button.completed .tapering-button__start-content {
            display: none;
        }

        .tapering-button.completed .tapering-button__final-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>


</html>
