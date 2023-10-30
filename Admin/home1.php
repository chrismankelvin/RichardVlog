<?php
session_start();

// Include the database connection file

require_once './inc/db_connection.php';
include './inc/get_reviews.php';
include './inc/approved.php';
include 'navbar.php';
include './inc/header.php';
?>
<body>

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
</body>




<?php
include './footer.php';
?>