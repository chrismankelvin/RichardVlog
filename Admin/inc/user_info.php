<?php
// Start the session
session_start();

// Include the database connection file
require_once 'db_connection.php';

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
?>
