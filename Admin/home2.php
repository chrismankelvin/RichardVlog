<?php

session_start();

// Include the database connection file
include'./inc/header.php';
require_once './inc/db_connection.php';
include './inc/get_reviews.php';
include './inc/approved.php';
include 'navbar.php';

?>

  <body>
    <div class="container">
      <h1 class="mt-4 mb-4">User Information</h1>
      <div class="row">
        <?php
        // Retrieve user information from the database table (replace 'your_table_name' with the actual table name)
        $sql = "SELECT id, name, email, contact, educational_level FROM meets";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title"><?php echo $row['name']; ?></h5>
                </div>
                <div class="card-body">
                  <p class="card-text"><strong>Email:</strong> <?php echo $row['email']; ?></p>
                  <p class="card-text"><strong>Contact:</strong> <?php echo $row['contact']; ?></p>
                  <p class="card-text"><strong>Educational Level:</strong> <?php echo $row['educational_level']; ?></p>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "<div class='col-md-12'><p>No user information found in the database.</p></div>";
        }
        ?>
      </div>
      <!-- Add a link to navigate back to the main page or any other relevant pages -->
      <a href="home.php" class="back-link">Back to Main Page</a>
    </div>
  </body>









  <?php
  include './footer.php';
  ?>