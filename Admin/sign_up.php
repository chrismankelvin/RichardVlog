<?php
// Start the session
session_start();

// Include the database connection file
require_once './inc/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement to insert the admin data into the table
    $sql = "INSERT INTO admin (username, password) VALUES (?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ss", $username, $hashedPassword);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Insertion successful, redirect to a success page or do further processing
        header("Location: success.php");
        exit;
    } else {
        // Insertion failed, display an error message
        $_SESSION['insert_error'] = "Error inserting data into the database.";
        header("Location: index.php");
        exit;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // Redirect to the login page if accessed directly without submitting the form
    header("Location: index.php");
    exit;
}
?>
