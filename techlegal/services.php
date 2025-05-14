<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>LEGAL TECH</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <!-- <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">saraphinakirika@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+254 7288 480 64</span></i> -->
          <a href="mailto:saraphinakirika@gmail.com" class="d-flex align-items-center">
            <i class="bi bi-envelope"></i>
            <span class="ms-2">saraphinakirika@gmail.com</span>
          </a>
          
          
          <i class="bi bi-phone d-flex align-items-center ms-4">
            <a href="tel:+254728848064">+254 7288 480 64</a>
          </i>
          
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://x.com/_Fin__Fin" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.facebook.com/jer.phina/" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/yooh__khanya_/" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/in/saraphina-kirika/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">

          <h1 class="sitename">LEGAL TECH</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="starter-page.html">About</a></li>
            <li><a href="chatbot.php">Chatbot</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/main.jpg" alt="" data-aos="fade-in">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-start">
          <div class="col-lg-8">
            <h2>Welcome to Legal Tech</h2>
            <p>Here to provide you with any legal aid required. Committed to service.</p>
            <a href="signupin.php" class="btn btn-primary">Get Started</a>
          </div>
        </div>
      </div>

    </section>

    <section id="about" class="about section">

      <div class="container section-title" data-aos="fade-up">
        <span>About Us<br></span>
        <h2>About Us<br></h2>
        <p>Welcome to our AI-powered legal assistant, designed to make Kenyan law more accessible and efficient.
            Our intelligent system helps legal professionals and the public with legal research, document review, and case analysis.
            By leveraging AI, we streamline legal processes, improve access to justice, and empower users with accurate legal insights.
            Our goal is to create a more efficient and equitable legal system for all Kenyans.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">

            <img src="assets/img/aboutus.jpg" class="img-fluid" alt="">
          </div>

        </div>

      </div>

    </section>

    <section id="clients" class="clients section light-background">

      <div class="container">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->



    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Call To Action</h3>
              <p> </p>
              <a class="cta-btn" href="signupin.php">Login/Register</a>
            </div>
          </div>
        </div>
      </div>

    </section>

        </div>

      </div>

    </section>



  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <div class="footer-about">
            <a href="index.html" class="logo sitename"> LEGAL TECH </a>
            <div class="footer-contact pt-3">
              <p>ruiru,</p>
              <p>kiambu county</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+254728848064</span></p>
              <p><strong>Email:</strong> <span>saraphinakirika@gmail.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href="https://x.com/_Fin__Fin"><i class="bi bi-twitter-x"></i></a>
              <a href="https://www.facebook.com/jer.phina/"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/yooh__khanya_/"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/saraphina-kirika/"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="chatbot.php">Chatbot</a></li>

          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">24/7 AI Legal Assistant </a></li>
            <li><a href="#">AI-Powered Legal Research</a></li>
            <li><a href="#">Case Law Analysis</a></li>
            <li><a href="#">Self-Service Legal Tools</a></li>
          </ul>
        </div>
        
        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">legal Tech</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        By <a href="#">Finfin</a>
      </div>
    </div>

  </footer>
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>


 
  
  <script src="assets/js/main.js"></script>

</body>

</html>
