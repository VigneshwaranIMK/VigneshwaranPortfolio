<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Portfolio</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

    <body>
        <!-- <div class="count-particles">
        <span class="js-count-particles">--</span> particles
      </div> -->
        <header class="nav">
            <nav>
                <ul class="navbar">
                    <li><a href="#intro"> <i class="fas fa-home"></i> Home </a></li>
                    <li><a href="#about"><i class="fas fa-user"></i> About</a></li>
                    <li><a href="#services"><i class="fas fa-cogs"></i> Services</a></li>
                    <li><a href="#skills"><i class="fas fa-code"></i> Skills</a></li>
                    <li><a href="#projects"><i class="fas fa-project-diagram"></i> Projects</a></li>
                    <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
                </ul>

            </nav>
        </header>

        <section class="intro" id="intro">
            <div id="particles-js"></div>
            <div class="intro-text">
                <h1>Hello, It's Me<br><span>Vigneshwaran</span><br>And I'm a <span class="typing-animation">Web
                        Dev</span>
                </h1>
                <p>I'm a PHP web Developer with 6 months experience. My expertise is in HRMS Applications, Web Design,
                    Build ERP Softwares and much more....</p>
                <div class="social-links">
                    <a id="github" target="_black"><i class="fab fa-linkedin"></i></a>
                    <a id="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <a id="resume" target="_blank" class="btn">Download Resume &nbsp; <i class="fas fa-download"></i></a>
            </div>
            <div class="intro-image">
                <img src="images/Vigneshwaran.jpeg" alt="Vigneshwaran">
            </div>
        </section>

        <section class="about" id="about">
            <div class="about-image">
                <img src="images/profile_ms.jpeg" alt="Vigneshwaran">
            </div>
            <div class="about-text">
                <h2>About <span>Me</span></h2>
                <h3>Full Stack Developer!</h3>
                <p>
                    Skilled Web Designer & Developer with over a year of experience in creating visually appealing and
                    user-friendly websites. A results-driven web developer with expertise in HTML, CSS, JavaScript, and
                    responsive design, along with three months of experience in database administration and website
                    design.
                    Passionate about crafting seamless digital experiences and committed to delivering innovative
                    solutions.
                    Seeking opportunities to apply technical expertise and creativity in a dynamic web development role.
                    <br>
                    <a href="#" class="btn">More About Me</a>
            </div>
        </section>

        <section class="services" id="services">
            <h2>My <span>Services</span></h2>
            <div class="services-container">
                <div class="service-box">
                    <div class="hrms-container">
                        <div class="service-icon hrms"><img class="" src="images/hrms.jpg" alt="HRMS APP"></div>
                    </div>
                    <h3>HRMS Application</h3>
                    <p style="font-weight: bold; text-align:left">A Human Resource Management System (HRMS) is a
                        software application that helps organizations manage employee data, payroll, recruitment,
                        attendance, performance, and other HR functions efficiently. It streamlines HR processes,
                        reduces manual work, and improves workforce management.</p>
                    <a href="#" class="btn">learn more</a>
                </div>
                <div class="service-box">
                    <div class="hrms-container">
                        <div class="service-icon hrms"><img class="" src="images/LMS 2.jpeg" alt="LMS APP"></div>
                    </div>
                    <h3>LMS Applications</h3>
                    <p style="font-weight: bold; text-align:left">A Learning Management System (LMS) is a software
                        platform that facilitates the creation, management, and delivery of educational courses and
                        training programs. It helps organizations and institutions track learner progress, automate
                        assessments, and enhance online learning experiences.</p>
                    <a href="#" class="btn">learn more</a>
                </div>
                <div class="service-box">
                    <div class="hrms-container">
                        <div class="service-icon hrms"><img class="" src="images/PMS.jpg" alt="LMS APP"></div>
                    </div>
                    <h3>PMS Applications</h3>
                    <p style="font-weight: bold; text-align:left"> A Performance Management System (PMS) is a structured
                        framework designed to assess, track, and enhance employee performance within an organization. It
                        ensures that individual goals align with business objectives, driving efficiency and
                        productivity.</p>
                    <a href="#" class="btn">learn more</a>
                </div>
            </div>
        </section>

        <div class="skills-section" id="skills">

            <input type='hidden' id="accelerating" />

            <h2>Technical Skills</h2>
            <div class="skill-bar">
                <p>HTML</p>
                <div class="progress">
                    <div class="progress-done" data-done="70"></div>
                </div>
            </div>

            <div class="skill-bar">
                <p>CSS</p>
                <div class="progress">
                    <div class="progress-done" data-done="60"></div>
                </div>
            </div>

            <div class="skill-bar">
                <p>Javascript</p>
                <div class="progress">
                    <div class="progress-done" data-done="50"></div>
                </div>
            </div>

            <div class="skill-bar">
                <p>PHP</p>
                <div class="progress">
                    <div class="progress-done" data-done="70"></div>
                </div>
            </div>

            <div class="skill-bar">
                <p>Laravel</p>
                <div class="progress">
                    <div class="progress-done" data-done="95"></div>
                </div>
            </div>
            <div class="skill-bar">
                <p>MY SQL</p>
                <div class="progress">
                    <div class="progress-done" data-done="80"></div>
                </div>
            </div>
            <br>
            <h2>Professional Skills</h2>
            <br>
            <div class="circular-skills">
                <div class="circle" data-percent="90">
                    <div class="inner-circle">90%</div>
                    <p>Creativity</p>
                </div>

                <div class="circle" data-percent="80">
                    <div class="inner-circle">80%</div>
                    <p>Communication</p>
                </div>

                <div class="circle" data-percent="65">
                    <div class="inner-circle">65%</div>
                    <p>Problem Solving</p>
                </div>

                <div class="circle" data-percent="100">
                    <div class="inner-circle">100%</div>
                    <p>Teamwork</p>
                </div>
            </div>
        </div>

        {{-- <div class="speedometer-container">
            <div class="speedometer">
                <div class="envelope">
                    <div class="speedNobe" id="needle"></div>
                    <div class="speedPosition" id="speedValue">0%</div>
                    <div class="numbers">
                        <span class="numb" style="transform: rotate(-120deg) translate(85px) rotate(120deg);">0</span>
                        <span class="numb" style="transform: rotate(-72deg) translate(85px) rotate(72deg);">20</span>
                        <span class="numb" style="transform: rotate(-24deg) translate(85px) rotate(24deg);">40</span>
                        <span class="numb" style="transform: rotate(24deg) translate(85px) rotate(-24deg);">60</span>
                        <span class="numb" style="transform: rotate(72deg) translate(85px) rotate(-72deg);">80</span>
                        <span class="numb danger" style="transform: rotate(120deg) translate(85px) rotate(-120deg);">100</span>
                    </div>                    
                </div>
            </div>
        
            <input type="range" id="speedInput" min="0" max="100" step="1">
        
            <!-- Radio Buttons -->
            <div class="radio-buttons">
                <input type="radio" id="html" name="tech" value="30">
                <label for="html">HTML</label>
        
                <input type="radio" id="css" name="tech" value="50">
                <label for="css">CSS</label>
        
                <input type="radio" id="js" name="tech" value="70">
                <label for="js">JavaScript</label>
        
                <input type="radio" id="laravel" name="tech" value="90">
                <label for="laravel">Laravel</label>
        
                <input type="radio" id="mysql" name="tech" value="100">
                <label for="mysql">MySQL</label>
            </div>
        </div> --}}

        <div class="projects-section" id="projects">
            <h2>Latest <span>Project</span></h2>
            <div class="project-grid">
                <div class="project-card">
                    <img src="https://www.springboard.com/library/static/d2414c8bcdef19e1cc153a9c1df93f76/857b3/shutterstock_1187539687.jpg"
                        alt="IBM Project Image">
                    <div class="project-content">
                        <h3>IBM Project</h3>
                        <p>Analytics for Hospitals and Health-Care Data</p>
                        <a href="https://github.com/VigneshwaranIMK/Vignesh-IBM.git" class="view-project">Click to View Full Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyPi7pd-qaVYRKwgIKvvQfJxvgwkI85UmZIQ&s"
                        alt="Final Year Project Image">
                    <div class="project-content">
                        <h3>Machine Learning</h3>
                        <p>Fake News Detection Using Machine Learning and Data Science</p>
                        <div style="display: flex; justify-content: center;">
                            <a href="documents/ML_Project_Overview.docx" class="view-project">
                                Click to View Full Project
                            </a>
                        </div>
                        {{-- <a href="{{ url('/align-word') }}" class="view-project">Click to View Full
                                Project</a> --}}
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

        <section class="contact" id="contact">
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Contact <span>Me</span></h2>
                    <p>Let's Work Together</p>
                    <p><strong>Email:</strong> <a href="mailto:vigneshwaranimk@gmail.com">vigneshwaranimk@gmail.com</a>
                    </p>
                    <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/vigneshwaranimk"
                            target="_blank">linkedin.com/in/vigneshwaranimk</a></p>
                    <div class="social-links">
                        <a id="github" target="_blank"><i class="fab fa-github"></i></a>
                        <a id="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a id="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="{{ route('submit.form') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="name" placeholder="Enter Name" required>
                        <input type="email" name="email" placeholder="Enter Email" required>
                        <textarea name="message" placeholder="Enter Message" required></textarea>
                        <button type="submit" class="submit btn">Submit</button>
                    </form>
                </div>
            </div>
        </section>

        <script src="{{ asset('js/particles.js') }}"></script>
        <script>
            particlesJS.load('particles-js', '{{ asset('js/particles.json') }}', function() {});
        </script>
        <script src="js/script.js"></script>
        <!-- scripts -->
        <script src="js/particles.js"></script>
        {{-- <script src="js/app.js"></script> --}}
        

        <!-- stats.js -->
        <script src="js/lib/stats.js"></script>
        <script>
            var count_particles, stats, update;
            stats = new Stats;
            stats.setMode(0);
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            document.body.appendChild(stats.domElement);
            count_particles = document.querySelector('.js-count-particles');
            update = function() {
                stats.begin();
                stats.end();
                if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
                }
                requestAnimationFrame(update);
            };
            requestAnimationFrame(update);
        </script>

    </body>

</html>
