  
<?php
$page_quote = "This is the Contact - Your destination for amazing video content";
$page_title ="Contact Us";
$main_title ="Contact REC";
require 'header.php'
?>

<section class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 contact-container">
        <h2 class="contact-title">Contact Us</h2>
        <form action="./inc/contact.inc.php" method="POST" class="contact-form">
          <input type="text" name="name" placeholder="Your Name" required>
          <input type="email" name="email" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <button type="submit" class="contact-button">Send Message</button>
        </form>
        <a href="#" class="btn btn-primary donate-button">Donate</a>
      </div>
    </div>
  </div>
</section>

<?php
require 'footer.php'
?>