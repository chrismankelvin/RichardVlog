<?php
// Include the database connection file
require 'db_connection.php';

if (isset($_POST['review_id'])) {
    $reviewId = $_POST['review_id'];

    // Use a prepared statement to avoid SQL injection
    $sql = "SELECT * FROM waitreviews WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $reviewId); // "i" indicates the parameter type is integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Get the review details
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $title = $row['title'];
        $content = $row['content'];
        $star = $row['star'];
        $profile_picture= $row['profile_picture'];

// Insert the review into the approvereview table
        $sql_approve = "INSERT INTO reviews (name ,title, content,star, profile_picture) VALUES (?, ?, ?, ?, ?)";
        $stmt_approve = $conn->prepare($sql_approve);
        $stmt_approve->bind_param("sssss", $name, $title, $content, $star, $profile_picture); // "ss" indicates two string parameters
        if ($stmt_approve->execute()) {
            // Delete the review from the mainreview table after approval
            $sql_delete = "DELETE FROM waitreviews WHERE id = ?";
            $stmt_delete = $conn->prepare($sql_delete);
            $stmt_delete->bind_param("i", $reviewId); // "i" indicates the parameter type is integer
            if ($stmt_delete->execute()) {
                echo "Review approved and moved to the approved reviews table.";
            } else {
                echo "Error deleting review from review table: " . $conn->error;
            }
        } else {
            echo "Error approving review: " . $conn->error;
        }
    } else {
        echo "Review not found in review table.";
    }
} else {
    echo "Invalid request.";
}
?>
