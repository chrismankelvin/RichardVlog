<?php
// Start the session
session_start();

// Include the database connection file
require_once './inc/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Prepare the SQL statement to retrieve the hashed password for the given username
    $sql = "SELECT id, password FROM admin WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists in the database
    if ($stmt->num_rows > 0) {
        // Bind the result variables
        $stmt->bind_result($userId, $hashedPassword);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, create a session and log in the user
            $_SESSION['user_id'] = $userId;
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;
            // Redirect to the home page
            header("Location: dashboard.php");

            exit();
        } else {
            // Incorrect password, display an error message
            $_SESSION['login_error'] = "Invalid username or password.";
            header("Location: ./index.php?Invalid username or password.");
            exit;
        }
    } else {
        // User does not exist, display an error message
        $_SESSION['login_error'] = "Invalid username or password.";
        header("Location: ./index.php?Invalid username or password.");
        exit;
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect to the login page if accessed directly without submitting the form
    header("Location: ./index.php?without submitting the form");
    exit;
}
?>
