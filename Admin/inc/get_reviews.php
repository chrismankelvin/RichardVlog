<?php
      function getWaitReviews() {
        global $conn;
    
        $sql = "SELECT * FROM waitreviews";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Process and display the reviews
            while ($row = $result->fetch_assoc()) {
                // Display the review information here (e.g., echo or create HTML elements)
                echo "<div class='review'>";
                echo "<p class='lead' id='name_{$row['id']}'>{$row['name']}</p>";
                echo "<p id='title_{$row['id']}'>{$row['title']}</p>";
                echo "<p id='body_{$row['id']}'>{$row['body']}</p>";
    
                // Add buttons for actions
                echo "<button class='btn btn-danger' onclick='deleteReview({$row['id']})'>Delete</button>";
                echo "<button class='btn btn-success' onclick='approveReview({$row['id']})'>Approve</button>";
                echo "<button class='btn btn-primary edit-btn' id='edit_btn_{$row['id']}' onclick='editReview({$row['id']})'>Edit</button>";
                echo "<button class='btn btn-primary' id='save_btn_{$row['id']}' style='display: none;' onclick='saveReview({$row['id']})'>Save</button>";
                
                // Add more information as needed
                echo "</div>";
                echo "<hr>";
            }
        } else {
            echo "No reviews found in the waitreviews table.";
        }
    }
    
      
      // Function to retrieve reviews from the reviews table
      function getReviews() {
          global $conn;
      
          $sql = "SELECT * FROM reviews";
          $result = $conn->query($sql);
      
          if ($result->num_rows > 0) {
              // Process and display the reviews
              while ($row = $result->fetch_assoc()) {
                  // Display the review information here (e.g., echo or create HTML elements)
                  echo "<div class='review'>";
                  echo "<p class='lead' id='name_{$row['id']}'>{$row['name']}</p>";
                  echo "<p id='title_{$row['id']}'>{$row['title']}</p>";
                  echo "<p id='body_{$row['id']}'>{$row['body']}</p>";
                  
      
                  echo "<button class='btn btn-danger' onclick='deleteReviewA({$row['id']})'>Delete</button>";
                // echo "<button class='btn btn-success' onclick='reviews({$row['id']})'>Approve</button>";
                echo "<button class='btn btn-primary edit-btn' id='edit_btn_{$row['id']}' onclick='editReviewA({$row['id']})'>Edit</button>";
                echo "<button class='btn btn-primary' id='save_btn_{$row['id']}' style='display: none;' onclick='saveReviewA({$row['id']})'>Save</button>";
                echo "<hr>";
                  
                  // Add more information as needed
                  echo "</div>";
              }
          } else {
              echo "No reviews found in the reviews table.";
          }
      }
       ?>