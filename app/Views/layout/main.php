<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Adela Hasanah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#resume">Resume</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1>Adela Hasanah</h1>
            <h2>I'm a Student, freelancer, Web developer, and design</h2>
            <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Me Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <span>About Me</span>
                    <h2>About Me</h2>
                    <p>
                        "Gutta cavat lapidem non vi, sed saepe cadendo; sic homo fit sapiens bis non, sed saepe
                        legendo."
                    </p>
                </div>

                <div class="row">
                    <div
                        class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                    </div>
                    <div class="col-lg-8 d-flex flex-column align-items-stretch">
                        <div class="content ps-lg-4 d-flex flex-column justify-content-center">
                            <div class="row">
                                <?php foreach ($folio as $data) : ?>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>
                                                <?= $data['name']; ?>
                                            </span>
                                        </li>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                            <span><?= $data['phone']; ?></span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                            <span><?= $data['address']; ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                            <span><?= $data['age']; ?></span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                            <span><?= $data['degree']; ?></span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                            <span><?= $data['email']; ?> </span>
                                        </li>
                                    </ul>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div><!-- End .content-->

                        <div class="skills-content ps-lg-4">
                            <div class="progress">
                                <span class="skill">HTML <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">CSS <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">JavaScript <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">PHP<i class="val">70%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Me Section -->

        <!-- ======= My Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <span>My Resume</span>
                    <h2>My Resume</h2>
                    <p>Faber est suae quisque fortunae. </p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <?php foreach ($folio as $data) : ?>
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>
                                <?= $data['name'] ?>
                            </h4>
                            <p><em>as an active student majoring in information engineering at level 6, and here are
                                    some samples of my biodata starting from my education to my experience in the world
                                    of work</em></p>
                            <p>
                            <ul>
                                <li><?= $data['address'] ?></li>
                                <li><?= $data['phone'] ?></li>
                                <li><?= $data['email'] ?></li>
                            </ul>
                            </p>
                        </div>
                        <?php endforeach; ?>
                        <h3 class="resume-title">Education</h3>
                        <?php foreach ($education as $edu) : ?>
                        <div class="resume-item">
                            <h4>
                                <?= $edu['name_school'] ?>
                            </h4>
                            <h5>
                                <?= $edu['period'] ?>
                            </h5>
                            <p><em>
                                    <?= $edu['address']?>
                                </em></p>
                            <p>
                                <?= $edu['description']?>
                            </p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        <?php foreach($jobdesk as $work) :?>
                        <div class="resume-item">
                            <h4>
                                <?= $work['name']?>
                            </h4>
                            <h5>
                                <?= $work['period']?>
                            </h5>
                            <p><em>
                                    <?= $work['address']?>
                                </em></p>
                            <p>
                            <ul>
                                <li>
                                    <?= $work['description']?>
                                </li>
                            </ul>
                            </p>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>

            </div>
        </section><!-- End My Resume Section -->

        <!-- ======= My Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <span>My Services</span>
                    <h2>My Services</h2>
                    <p>Do Anything for Me, So I Do Anythig for You</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Planning Project</a></h4>
                            <p class="description">Plan what I will make with mutual agreement, and I will do the work,
                                so what are you waiting for, come do business with me</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Designing project</a></h4>
                            <p class="description">All projects that will be made will be designed first before entering
                                the planning and development stage, the design can be adjusted to your wishes</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Development project</a></h4>
                            <p class="description">At this development and design stage, a previously designed project
                                will be created and manual testing will be carried out to ensure the project runs
                                smoothly.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">production project</a></h4>
                            <p class="description">The project is ready to be launched and used generally</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End My Services Section -->

        <!-- ======= Contact Me Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span>Contact Me</span>
                    <h2>Contact Me</h2>
                    <p>you can call me, on platfrom bellow </p>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-share-alt"></i>
                                    <h3>Social s</h3>
                                    <div class="social-links">
                                        <a href="https://twitter.com/Adelaaaaa5?t=XcbXesNFd1n_WDgcXLhR4w&s=08"
                                            class="twitter"><i class="bi bi-twitter"></i></a>
                                        <a href="https://www.instagram.com/hsnhadelaaa/" class="instagram"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="hasanahadela@gmail.com " class="google-plus"><i
                                                class="bi bi-envelope-at-fill"></i></a>
                                        <a href="https://www.linkedin.com/in/adela-hasanah-b478352a4/"
                                            class="linkedin"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php foreach ($folio as $data) :?>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Me</h3>
                                    <p>
                                        <?= $data['email']?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Me</h3>
                                    <p>
                                        <?= $data['phone']?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Me Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Adela Hasanah</h3>
            <p>Exspecto responsum tuum. Vale!.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Created by <strong><span>Adela</span></strong>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>