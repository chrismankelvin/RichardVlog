

<?php
function getReviews()
{
    global $conn;

    $sql = "SELECT * FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='review card'>";
            echo "<img src='../inc/upload/{$row['profile_picture']}' class='profile-picture' alt='Profile Picture'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title' id='name_{$row['id']}' >{$row['name']}</h5>";
            echo "<p class='card-text' id='title_{$row['id']}' >{$row['title']}</p>";
            echo "<p class='card-text' id='content_{$row['id']}' >{$row['content']}</p>";
            echo "<p class='star-rating'>Rating: {$row['star']} Stars</p>";

            echo "<div class='btn-group'>";
            echo "<button class='btn btn-danger' onclick='deleteReview({$row['id']})'>Delete</button>";
            echo "<button class='btn btn-primary edit-btn'  id='edit_btn_{$row['id']}' onclick='editReviewA({$row['id']})'>Edit</button>";
            echo "<button class='btn btn-primary' id='save_btn_{$row['id']}' style='display: none;' onclick='saveReviewA({$row['id']})'>Save</button>";
            echo "</div>";

            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p class='lead'>No reviews found in the reviews table.</p>";
    }
}

function getWaitReviews()
{
    global $conn;

    $sql = "SELECT * FROM waitreviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Process and display the reviews
        while ($row = $result->fetch_assoc()) {
            echo "<div class='review card'>";
            echo "<img src='../inc/upload/{$row['profile_picture']}' class='profile-picture' alt='Profile Picture'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title' id='name_{$row['id']}' >{$row['name']}</h5>";
            echo "<p class='card-text' id='title_{$row['id']}' >{$row['title']}</p>";
            echo "<p class='card-text' id='content_{$row['id']}' >{$row['content']}</p>";
            echo "<p class='star-rating'>Rating: {$row['star']} Stars</p>";

            echo "<div class='btn-group'>";
            echo "<button class='btn btn-danger mr-2' onclick='deleteReviewA({$row['id']})'>Delete</button>";
            echo "<button class='btn btn-success mr-2' onclick='approveReview({$row['id']})'>Approve</button>";
            echo "<button class='btn btn-primary edit-btn mr-2' id='edit_btn_{$row['id']}' onclick='editReview({$row['id']})'>Edit</button>";
            echo "<button class='btn btn-primary' id='save_btn_{$row['id']}' style='display: none;' onclick='saveReview({$row['id']})'>Save</button>";
            echo "</div>";

            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p class='lead'>No reviews found in the Pending Reviews Table.</p>";
    }
}


?>
