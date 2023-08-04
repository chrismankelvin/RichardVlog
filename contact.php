  
<?php
$page_quote = "This is the Contact - Your destination for amazing video content";
$page_title ="Contact Us";
$main_title ="Contact REC";
require 'header.php'
?>

<section class="contact-section">
  <div class="container">
    <h3>Liente accusantium similique rationo,</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eos quia amet consectetur maxime 
      laborum quidem eligendi, excepturi similique perferendis quasi magni commodi aliquid laudantium, est 
      nihil beatae aperiam reprehenderit modi ipsum. Veniam nisi possimus, aspernatur accusamus numquam quisquam. 
      Maxime.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam molestiae quis incidunt aspernatur. Iste, quo? 
    
    Quae, fugit hic id cupiditate nisi voluptate reprehenderit corporis, adipisci doloremque amet obcaecati at iure
     eum impedit molestias deleniti tenetur porro placeat! Vero, quae facilis inventore ratione, provident ipsum
      voluptatibus, dolore laborum excepturi voluptas molestias incidunt. Deserunt quaerat inventore id eligendi 
      quam harum molestias. Ullam asperiores iusto inventore veritatis. Quisquam voluptatum eveniet error ratione 
      architecto?</p>
    <div class="row">
      <div class="col-md-8 offset-md-2 contact-container">
        <h2 class="contact-title">Contact Us</h2>
        <p class="contact-info">For any inquiries or assistance, please feel free to contact us:</p>
        <ul class="contact-info-list">
          <li>Email: <a href="mailto:info@example.com">info@example.com</a></li>
          <li>Phone: +1 (123) 456-7890</li>
          <li>Address: 123 Main Street, City, Country</li>
        </ul>
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