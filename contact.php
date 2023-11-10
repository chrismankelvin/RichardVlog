  
<?php
$main_title ="Contact REC";
include 'header.php';
include 'navbar.php';
?>

<section class="contact-section">
  <div class="container">
    <h3>Get in Touch</h3>
    <p>We value your input and are here to assist you. Whether you have questions, suggestions, or feedback, please feel free to reach out. Choose from the following contact options:</p>

<p>For your convenience, you can also use the contact form below to send us your message. We'll respond promptly.</p>



    <div class="row">
      <div class="col-md-8 offset-md-2 contact-container">
        <!-- <h2 class="contact-title">Contact Us</h2> -->
        <p class="contact-info">For any inquiries or assistance, please feel free to contact us:</p>
        <ul class="contact-info-list">
          <li>Email: <a href="mailto:chrismankelvin@gmail.com">Richardeducationalconsult@gmail.com</a></li>
          <li>Phone: +233 (242) 764-213</li>
          <li>Address:  1801 Spring Ave NE, Canton, OH, United States, Ohio</li>
        </ul>
        <form action="./inc/contact.inc.php" method="POST" class="contact-form">
          <input type="text" name="name" placeholder="Your Name" required>
          <input type="email" name="email" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <button type="submit" class="contact-button">Send Message</button>
        </form>
        <!-- <a href="#" class="btn btn-primary donate-button">Donate</a> -->

        <div class="footer-social">
      <a class="social-icon-contact" href="https://www.youtube.com/@RichardEducationalConsult"><i class="fab fa-youtube"></i></a>
      <a class="social-icon-contact" href="https://www.youtube.com/@RichardEducationalConsult"><i class="fab fa-telegram"></i></a>
      <a class="social-icon-contact" href="https://www.youtube.com/@RichardEducationalConsult"><i class="fab fa-whatsapp"></i></a>
            <a class="social-icon-contact" href="https://www.youtube.com/@RichardEducationalConsult"><i class="fab fa-google"></i></a>
      <a class="social-icon-contact" href="https://web.facebook.com/profile.php?id=61550910960283"><i class="fab fa-facebook"></i></a>
      <a class="social-icon-contact" href="https://www.twitter.com"><i class="fab fa-tiktok"></i></a>
      <a class="social-icon-contact" href="mailto: richardeducationalconsult@gmail.com"><i class="fas fa-envelope"></i></a>

    </div>
        </div>
    </div>
  </div>
</section>



<?php
include "images.php";
include 'footer.php'
?>