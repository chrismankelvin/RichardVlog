<?php
include 'db_connection.php'; // Make sure to include your database connection details

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $ministry = $_POST['ministry'];
    $month_report = $_POST['setting-input-6'];

    // File upload handling
    $target_dir = "uploads/";
    $file_name = ($ministry) . ' Report';

    $target_file = $target_dir . $file_name;

    // Check file type
    $allowed_file_types = ['pdf', 'doc', 'docx'];
    $file_type = pathinfo($_FILES["setting-input-12"]["name"], PATHINFO_EXTENSION);

    if (in_array(strtolower($file_type), $allowed_file_types)) {
        // Move the uploaded file to the destination folder
        if (move_uploaded_file($_FILES["setting-input-12"]["tmp_name"], $target_file)) {

            // Insert data into the database
            $sql = "INSERT INTO reports (file_name, minstry, month_report, file_path, file_type) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Check if the statement is prepared successfully
            if ($stmt) {
                $stmt->bind_param("sssss", $file_name, $ministry, $month_report, $target_file, $file_type);

                // Execute the statement
                if ($stmt->execute()) {
                    header("Location: ../success_page.php");
                } else {
                    echo "Error inserting data into the database.";
                }

                // Close the statement
                $stmt->close();
            } else {
                echo "Error preparing the SQL statement.";
            }

        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "Invalid file type. Allowed file types are pdf, doc, and docx.";
    }

    // Close the database connection
    $conn->close();
}
?>
