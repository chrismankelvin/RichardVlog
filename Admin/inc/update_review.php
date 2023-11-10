<?php
// Include the database connection file
require 'db_connection.php';

if (isset($_POST['review_id']) && isset($_POST['name']) && isset($_POST['title']) && isset($_POST['content'])) {
    $reviewId = $_POST['review_id'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $body = $_POST['content'];

    // Use a prepared statement to avoid SQL injection
    $sql = "UPDATE waitreviews SET name = ?, title = ?, content = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $title, $body, $reviewId); // "ssi" indicates two string parameters and one integer parameter
    if ($stmt->execute()) {
        echo "Review updated successfully.";
    } else {
        echo "Error updating review: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
