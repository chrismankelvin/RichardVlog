

<div class="container">
    <h2 class="text-center mb-4">Reviews From Clients</h2>
    
    <div id="reviewContainer" class="row">
      <!-- PHP code to fetch reviews from the database and generate the review cards -->
      <?php

      include './inc/database.inc.php';
      // Assuming you have a database connection established

      // Query to fetch review data from the database (modify this as per your database schema)
      $query = "SELECT * FROM reviews ORDER BY id DESC";
      $result = mysqli_query($connection, $query);

      // Fetch the reviews as associative arrays
      $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);

      // Number of reviews to show at a time
      $reviewsPerPage = 3;

      // Retrieve the current page number
      $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

      // Calculate the starting index of the reviews to display
      $startIndex = ($currentPage - 1) * $reviewsPerPage;

      // Get the reviews for the current page
      $currentReviews = array_slice($reviews, $startIndex, $reviewsPerPage);

      // Generate the review cards
      foreach ($currentReviews as $review) {
        echo '<div class="col-lg-4 review-card">';
        echo '<h4 class="mb-3">' . $review['name'] . '</h4>';
        echo '<h5 class="mb-3">' . $review['title'] . '</h5>';
        echo '<p>' . $review['body'] . '</p>';
        echo '</div>';
      }
      ?>
    </div>
    
    <div class="text-center mt-4">
      <nav aria-label="Review Pagination">
        <ul class="pagination">
          <li class="page-item <?php echo $currentPage <= 1 ? 'disabled' : ''; ?>">
            <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
          </li>
          <?php for ($i = 1; $i <= ceil(count($reviews) / $reviewsPerPage); $i++) { ?>
            <li class="page-item <?php echo $currentPage == $i ? 'active' : ''; ?>">
              <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
          <?php } ?>
          <li class="page-item <?php echo $startIndex + $reviewsPerPage >= count($reviews) ? 'disabled' : ''; ?>">
            <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>    
