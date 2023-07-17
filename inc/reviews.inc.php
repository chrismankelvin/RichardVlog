          <?php
          // Assuming you have a database connection established
          include 'database.inc.php';

          // Query to fetch review data from the database (modify this as per your database schema)
          $query = "SELECT * FROM reviews";
          $result = mysqli_query($connection, $query);



          
        //   // Displaying three reviews at a time
        //   $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //   $totalReviews = count($reviews);
        //   $reviewsPerPage = 3;
        //   $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        //   $startIndex = ($currentPage - 1) * $reviewsPerPage;
        //   $endIndex = $startIndex + $reviewsPerPage;
        //   $reviewsToDisplay = array_slice($reviews, $startIndex, $endIndex);

        //   foreach ($reviewsToDisplay as $review) {
        //     $name = $review['name'];
        //     $title = $review['title'];
        //     $body = $review['body'];

        //     echo '<div class="review-item">';
        //     echo '<p class="review-name">' . $name . '</p>';
        //     echo '<h4 class="review-title">' . $title . '</h4>';
        //     echo '<p class="review-body">' . $body . '</p>';
        //     echo '</div>';
        //   }

        //   // Pagination
        //   $totalPages = ceil($totalReviews / $reviewsPerPage);
        //   $previousPage = $currentPage - 1;
        //   $nextPage = $currentPage + 1;

        //   echo '<div class="review-nav">';
        //   if ($previousPage > 0) {
        //     echo '<a href="?page=' . $previousPage . '"><button>&#8249; Previous</button></a>';
        //   }
        //   if ($nextPage <= $totalPages) {
        //     echo '<a href="?page=' . $nextPage . '"><button>Next &#8250;</button></a>';
        //   }
        //   echo '</div>';

               // Displaying three reviews at a time
               
          $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
          $totalReviews = count($reviews);
          $reviewsPerPage = 3;
          $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
          $startIndex = ($currentPage - 1) * $reviewsPerPage;
          $endIndex = $startIndex + $reviewsPerPage;
          $reviewsToDisplay = array_slice($reviews, $startIndex, $endIndex);

          foreach ($reviewsToDisplay as $review) {
            $name = $review['name'];
            $title = $review['title'];
            $body = $review['body'];

            echo '<div class="col-md-4">';
            echo '<div class="review-item">';
            echo '<div class="review-content">';
            echo '<p class="review-name">' . $name . '</p>';
            echo '<h4 class="review-title">' . $title . '</h4>';
            echo '<p class="review-body">' . $body . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
          ?>
        //   ?>