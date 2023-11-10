<?php
include './inc/db_connection.php';
// Check if the user is logged in, if not, redirect to the login page
session_start();
// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: index.php");
  exit();
}
include './header.php';
include './inc/navbar.php';
include './functions.php'
?>

<div class="container mt-4">
  <h1>Accepted Reviews</h1>
  <?php getReviews(); ?>
</div>


<div class="container mt-4">
  <h1>Pending Reviews</h1>
  <?php getWaitReviews(); ?>
</div>


<?php
include './footer.php';
?>