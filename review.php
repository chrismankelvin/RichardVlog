<section style="color: #000; background-color: #EEF5F9;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h3 class="fw-light mb-4">Reviews</h3>
                <!-- <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                quisquam eum porro a pariatur veniam.
            </p> -->
            </div>
        </div>

        <div class="row text-center">


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
                $star = $review['star']; // Change this value to the desired star rating (between 1 and 5)
                // Calculate the number of full stars and half stars
                $fullStars = floor($star);
                $halfStar = ($star - $fullStars) >= 0.5;


                echo '<div class="col-md-4 mb-4 mb-md-0">';
                echo '  <div class="card">';
                echo '    <div class="card-body py-4 mt-2">';
                echo '      <div class="d-flex justify-content-center mb-4">';

                echo '        <img src="./inc/upload/' . $review['profile_picture'] . '"';
                echo '          class="rounded-circle shadow-1-strong" width="100" height="100" />';
                echo '      </div>';
                echo '      <h5 class="font-weight-bold">' . $review['name'] . '</h5>';
                echo '      <h6 class="font-weight-bold my-3">' . $review['title'] . '</h6>';

                // Generate stars HTML
                echo '<ul class="list-unstyled d-flex justify-content-center">';
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $fullStars) {
                        echo '<li><i class="fas fa-star fa-sm text-info"></i></li>';
                    } elseif ($halfStar) {
                        echo '<li><i class="fas fa-star-half-alt fa-sm text-info"></i></li>';
                        $halfStar = false; // To prevent adding additional half star
                    } else {
                        echo '<li><i class="far fa-star fa-sm text-info"></i></li>';
                    }
                }
                echo '</ul>';

                echo '      <p class="mb-2">';
                echo '        <i class="fas fa-quote-left pe-2.5"></i>' . $review['content'] . '';
                echo '      </p>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
            }

            ?>




        </div>
        <!-- <div class="text-center mt-4">
            <nav aria-label="Review Pagination">
                <ul class="pagination">
                    <li class="page-item -->
                     <?php
                    //   echo $currentPage <= 1 ? 'disabled' : ''; 
                      ?>
                      <!-- "> 
                        <!-- <a class="page-link" href="?page= -->
                        <?php 
                        // echo $currentPage - 1; 
                        ?>
                        <!-- ">Previous</a> 
                    </li>
                    <?php 
                    // for ($i = 1; $i <= ceil(count($reviews) / $reviewsPerPage); $i++) { 
                        ?>
                        <!-- <li class="page-item  -->
                        <?php
                        //  echo $currentPage == $i ? 'active' : ''; 
                        ?>
                        <!-- "> -->
                            <!-- <a class="page-link" href="?page=<?php 
                            //  echo $i; ?>"><?php 
                            // echo $i;
                              ?>
                              </a>
                        </li>
                    <?php
                //  }
                  ?>
                    <!-- <li class="page-item <?php 
                    //  echo $startIndex + $reviewsPerPage >= count($reviews) ? 'disabled' : ''; 
                     ?>">
                        <!-- <a class="page-link" href="?page= -->
                        <?php
                        //  echo $currentPage + 1; 
                        //  ?>
                        <!-- ">Next</a> -->
                    </li>
                </ul>
            </nav>
        </div>
    </div>






</section>