<?php
// Start the session at the beginning of the file
session_start();

// Include any necessary database connection code
// Replace with your actual database connection details
include './database.inc.php';
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Process the form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$title = $_POST["status"];
$content = $_POST["content"];
$star = $_POST["star"];
$profile_picture = $_POST["profile_picture"]; // Assuming it's a file path

// File uploaded successfully
// Now, you can save $profile_picture (the path to the uploaded profile picture) in your database
$sql = "INSERT INTO waitreviews (name, title, content, star, profile_picture ) VALUES ('$name', '$title', '$content', '$star', '$profile_picture')";

if ($connection->query($sql) === TRUE) {
    // Insert successful
    $message = "Review submitted successfully!";
} else {
    // Error with the SQL query
    $message = "Error executing SQL query: " . $connection->error;
}

$connection->close();

// Redirect back to the form page with a success or error message
header("Location: ../ProfileUpload.php?message=" . urlencode($message));
exit;
