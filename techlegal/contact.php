<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form data is available
    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['subject']) || !isset($_POST['message'])) {
        echo "Error: Missing form data!";
        exit;
    }

    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email address
    $to = 'saraphinakirika@gmail.com';

    // Email subject
    $email_subject = "New Message from " . $name . " - " . $subject;

    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Message:\n" . $message;

    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Try sending email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>
                alert('Your message has been sent. Thank you!');
                window.location.href = 'thank-you-page.html'; // Redirect to thank you page
              </script>";
    } else {
        echo "<script>
                alert('Failed to send message. Please try again later.');
                window.location.href = 'contact.html'; // Redirect back to contact form
              </script>";
    }
} else {
    echo "Error: Invalid request!";
}
?>

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
<section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <span>Contact</span>
  <h2>Contact</h2>
  <p>Contact us</p>
</div>

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-6">
      <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-geo-alt"></i>
        <h3>Address</h3>
        <p>Ruiru, Kiambu county</p>
      </div>
    </div><!-- End Info Item -->

    <div class="col-lg-3 col-md-6">
      <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-telephone"></i>
        <h3>Call Us</h3>
        <p>+1254728848064</p>
      </div>
    </div><!-- End Info Item -->

    <div class="col-lg-3 col-md-6">
      <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-envelope"></i>
        <h3>Email Us</h3>
        <p>saraphinakirika@gmail.com</p>
      </div>
    </div><!-- End Info Item -->

  </div>

  <div class="row gy-4 mt-1">
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
      <iframe src="https://www.google.com/maps/place/Kenyatta+University+Teaching,+Referral+and+Research+Hospital./@-1.1776616,36.9066784,15z/data=!4m6!3m5!1s0x182f3f1c88779f1b:0x4c67bf7d18f21a8a!8m2!3d-1.1776622!4d36.915433!16s%2Fg%2F1hdyylp38?authuser=0&entry=ttu&g_ep=EgoyMDI1MDMyMy4wIKXMDSoASAFQAw%3D%3D" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="col-lg-6">
    <form action="contact.php" method="post">
  <div class="row gy-4">

    <div class="col-md-6">
      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
    </div>

    <div class="col-md-6">
      <input type="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>

    <div class="col-md-12">
      <input type="text" name="subject" class="form-control" placeholder="Subject" required>
    </div>

    <div class="col-md-12">
      <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
    </div>

    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Send Message</button>
    </div>

  </div>
</form>

        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
          </div>

            <button type="submit">Send Message</button>
          </div>
            <script async type='module' src='https://interfaces.zapier.com/assets/web-components/zapier-interfaces/zapier-interfaces.esm.js'></script>
            <zapier-interfaces-chatbot-embed is-popup='true' chatbot-id='cm911uwus000e95599j3abaj7'></zapier-interfaces-chatbot-embed>
        </div>
      </form>
    </div>

  </div>

</div>

</section>

</body>
</html>
