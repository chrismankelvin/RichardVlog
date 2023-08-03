
<?php
$page_quote = "This is the About - Your destination for amazing video content";
$page_title ="About";
$main_title ="Add your Review";
// require 'header.php';
require 'navbar.php'

?>
<div class="container-fluid review-post" style="background-image: url('./inc/images/stationary.jpg');">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <h2 class="text-center text-white mb-4">Review Post</h2>
      <?php if (!empty($_GET['message'])) { ?>
        <div class="alert alert-success text-center mt-4" role="alert">
          <?php echo $_GET['message']; ?>
        </div>
      <?php } ?>

    
      <?php if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !empty($message)) { ?>
        <form action="./inc/submit_review.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Review Title" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="content" placeholder="Your Review" rows="5" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit Review</button>
          </div>
        </form>
      <?php } ?>

   
    </div>
  </div>
</div>
<?php
// Start the session at the beginning of the file
session_start();
?> 
<?php
include 'footer.php';

?>