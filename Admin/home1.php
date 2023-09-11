<?php
// Check if the user is logged in, if not, redirect to the login page
// Start the session
session_start();

// Include the database connection file
require_once './inc/db_connection.php';
include './inc/get_reviews.php';
include './inc/approved.php';

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: index.php");
  exit;
}

// Retrieve user information from the database based on the user_id stored in the session
if (isset($_SESSION['user_id'])) {
  $userId = $_SESSION['user_id'];
  $sql = "SELECT username FROM admin WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $stmt->bind_result($username);
  $stmt->fetch();
  $stmt->close();
  $_SESSION['username'] = $username;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./inc/style.css">

</head>

<body class="bod">



  <!-- Sidebar -->
  <?php
include 'navbar.php';

?>


  <!-- Page Content -->
  <div class="sticky-bar">
    <div class="container">
      <div class="sticky-bar-content">
        <button type="button" id="sidebarCollapse" class="btn">
          <i class="fas fa-bars"></i>
        </button>
        <div class="user-info">
          <?php
          // Display user information if logged in
          if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo 'Welcome, ' . $_SESSION['username'] . '!';
          }
          ?>
        </div>
        <div>
          <?php
          // Display logout link if logged in
          if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo '<a href="./inc/logout.php" class="logout-link"><i class="fas fa-sign-out-alt"></i> Logout</a>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <div id="content">
    <div class="container mt-4">

      <hr>
      <h4 id="approved">Approved Reviews</h4>
      <hr>
      <?php
      getReviews();
      ?>

    </div>
  </div>




  <?php
  include './footer.php';
  ?>