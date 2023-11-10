

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

<div class="container ">
        <small class="lead"> Richard Educational Consult <?php echo ' ' . $_SESSION['username'] .'s Dashboard';?> </small>
    
    </div>


<?php
include './footer.php';
?>