<?php
// Include the database connection file
require 'db_connection.php';

if (isset($_POST['review_id'])) {
    $reviewId = $_POST['review_id'];

    // Use a prepared statement to avoid SQL injection
    $sql = "DELETE FROM waitreviews WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $reviewId); // "i" indicates the parameter type is integer
    if ($stmt->execute()) {
        echo "Review deleted successfully.";
    } else {
        echo "Error deleting review: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
