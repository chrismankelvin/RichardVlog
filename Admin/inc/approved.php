<?php

// Function to retrieve reviews from the reviews table
function getReviews()
{
    global $conn;

    $sql = "SELECT * FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Process and display the reviews
        while ($row = $result->fetch_assoc()) {
            // Display the review information here (e.g., create HTML elements)
            echo "<div class='review card mb-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title' id='name_{$row['id']}'>{$row['name']}</h5>";
            echo "<p class='card-text' id='title_{$row['id']}'>{$row['title']}</p>";
            echo "<p class='card-text' id='body_{$row['id']}'>{$row['body']}</p>";

            // Add buttons for actions
            echo "<div class='btn-group'>";
            echo "<button class='btn btn-danger mr-2' onclick='deleteReviewA({$row['id']})'>Delete</button>";
            echo "<button class='btn btn-primary edit-btn mr-2' id='edit_btn_{$row['id']}' onclick='editReviewA({$row['id']})'>Edit</button>";
            echo "<button class='btn btn-primary' id='save_btn_{$row['id']}' style='display: none;' onclick='saveReviewA({$row['id']})'>Save</button>";
            echo "</div>";

            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p class='lead'>No reviews found in the reviews table.</p>";
    }
}
?>
