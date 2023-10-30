<!DOCTYPE html>
<html>
<head>
    <title>Display Image</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quaerat.</p>
<?php
// Include your database connection code
include_once './inc/database.inc.php';

// Get the user ID for which you want to retrieve the image
$user_id = 1; // Replace '1' with the appropriate user ID

// Query to retrieve the image data for the specified user ID
$sql = "SELECT profile_picture FROM agenda1 WHERE id = ?";
if ($stmt = $connection->prepare($sql)) {
    $stmt->bind_param("i", $user_id); // 'i' for integer
    $stmt->execute();
    $stmt->store_result();

    // Check if a row with the specified user ID exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($imageData);
        $stmt->fetch();

        // Determine the image format (e.g., JPEG, PNG, etc.)
        $imageFormat = 'png'; // Change this to the appropriate format

        // Set the appropriate content type header
        header("Content-Type: image/$imageFormat");

        // Output the image data to the browser
        echo $imageData;
    } else {
        echo "User not found in the database.";
    }

    $stmt->close();
} else {
    echo "Error preparing statement: " . $connection->error;
}

// Close the database connection
$connection->close();
?>
</body>
</html>
