<?php
$main_title = "Add your Review";
// require 'header.php';
include 'header.php';
include 'navbar.php';

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
        <form action="./inc/review.inc.php" method="POST">
          <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <label for="title">Review Title:</label>
            <input type="text" class="form-control" name="status" id="title" placeholder="Review Title" required>
          </div>
          <div class="form-group">
            <label for="content">Your Review:</label>
            <textarea class="form-control" name="content" id="content" placeholder="Your Review" rows="5" required></textarea>
          </div>
          <div class="form-group">
            <label for="star">Select Rating:</label>
            <select class="form-control" name="star" id="star" required>
              <option value="1">One</option>
              <option value="1.5">One and a Half</option>
              <option value="2">Two</option>
              <option value="2.5">Two and a Half</option>
              <option value="3">Three</option>
              <option value="3.5">Three and a Half</option>
              <option value="4">Four</option>
              <option value="4.5">Four and a Half</option>
              <option value="5">Five</option>
            </select>
          </div>

            <input type="text" style="visibility: hidden;" name="profile_picture"  value="profile">


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

?>
<?php
include 'footer.php';

?>