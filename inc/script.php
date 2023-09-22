<?php
// Start the session at the beginning of the file
session_start();

// Include any necessary database connection code
// Replace with your actual database connection details
include'./database.inc.php';
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $star = $_POST["star"];
    
    // Handle profile picture upload
    if ($_FILES["profile_picture"]["error"] == UPLOAD_ERR_OK) {
        $target_dir = "profile_pictures/"; // Specify the directory where you want to store uploaded profile pictures
        $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
        
        // Ensure the uploaded file is an image
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        
        if (!in_array($imageFileType, $allowedExtensions)) {
            $message = "Only JPG, JPEG, PNG, and GIF files are allowed.";
        } elseif (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            // File uploaded successfully
            // Now, you can save $target_file (the path to the uploaded profile picture) in your database
            $sql = "INSERT INTO agenda1 (name, title, content, star, profile_picture) VALUES (?, ?, ?, ?, ?)";
            
            if ($stmt = $conn->prepare($sql)) {
                // Bind parameters to the prepared statement
                $stmt->bind_param("sssss", $name, $title, $content, $star, $target_file);
                
                // Execute the prepared statement
                if ($stmt->execute()) {
                    // Insert successful
                    $message = "Review submitted successfully!";
                } else {
                    // Error with the prepared statement
                    $message = "Error executing prepared statement: " . $stmt->error;
                }
                
                // Close the prepared statement
                $stmt->close();
            } else {
                // Error preparing the statement
                $message = "Error preparing statement: " . $conn->error;
            }
        } else {
            // Error uploading file
            $message = "Error uploading profile picture.";
        }
    } else {
        // No file uploaded or an error occurred during upload
        $message = "No profile picture uploaded.";
    }
    
    $conn->close();
}

// Redirect back to the form page with a success or error message
header("Location: your_form_page.php?message=" . urlencode($message));
exit;
?>
