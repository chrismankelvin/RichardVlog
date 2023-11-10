
<?php
// $page_quote = "This is the About - Your destination for amazing video content";
$main_title ="BooK Apointment With REC";
include 'header.php';
include 'navbar.php';

?>

<section class="form-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 form-container">
        <h2>Fill The Form </h2>
        <form action="./inc/meet.inc.php" method="POST">
          <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
          </div>
          <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" required>
          </div>
          <div class="form-group">
            <label for="educationLevel">Educational Level:</label>
            <select id="educationLevel" name="educationLevel" required>
              <option value="">Select your educational level</option>
              <option value="High School">High School</option>
              <option value="Bachelor's Degree">Bachelor's Degree</option>
              <option value="Master's Degree">Master's Degree</option>
              <option value="PhD">PhD</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
require 'footer.php'
?>