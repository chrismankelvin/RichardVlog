<?php
// Check if the user is logged in, if not, redirect to the login page
// Start the session
session_start();
include './inc/header.php';
include './inc/get_reviews.php';
include './inc/approved.php';
include 'navbar.php';
?>

<body>
<div id="content">

  <div class="container mt-4">


    <hr>
    <h4 id="main">Main Reviews</h4>
    <hr>
    <?php
    getWaitReviews();
    ?>


  </div>
</div>
</body>

<?php
include './footer.php';
?>