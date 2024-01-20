<?php
// include './inc/header.php';

// // Database connection
// $servername = "your_db_server";
// $username = "your_db_username";
// $password = "your_db_password";
// $dbname = "your_db_name";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
require "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $officer_status = $_POST["officer_status"];
    $position =$_POST["executive_position"];
    $surname = $_POST["setting-input-2"];
    $other_names = $_POST["setting-input-3"];
    $date_of_birth = $_POST["setting-input-4"];
    $place_of_birth = $_POST["setting-input-5"];
    $gender = $_POST["setting-input-6"];
    $nationality = $_POST["setting-input-7"];
    $residence = $_POST["setting-input-8"];
    $occupation = $_POST["setting-input-9"];
    $telephone_no1 = $_POST["setting-input-10"];
    $telephone_no2 = $_POST["setting-input-11"];
    $marital_status = $_POST["groupone"];
    $group_name = $_POST["grouptwo"];

// Handle profile picture
$target_dir = "uploads/";
$profile_picture_name = uniqid() . "_" . basename($_FILES["setting-input-12"]["name"]);
$target_file = $target_dir . $profile_picture_name;

// Check for file upload errors
$fileError = $_FILES["setting-input-12"]["error"];
if ($fileError !== UPLOAD_ERR_OK) {
    echo "File upload failed with error code: " . $fileError;
    exit;
}

// Save the uploaded file
if (move_uploaded_file($_FILES["setting-input-12"]["tmp_name"], $target_file)) {
    // echo "File has been uploaded successfully.";
} else {
    echo "Error moving the uploaded file to the destination.";
    exit;
}
    // Handle profile picture
    // $target_dir = "uploads/";
    // $profile_picture_name = uniqid() . "_" . basename($_FILES["setting-input-12"]["name"]);
    // $target_file = $target_dir . $profile_picture_name;

    // // Save the uploaded file
    // move_uploaded_file($_FILES["setting-input-12"]["tmp_name"], $target_file);

    // SQL with prepared statements to insert data into the database
    $sql = "INSERT INTO executives (
        officer_status,
        position,
        surname,
        other_names,
        date_of_birth,
        place_of_birth,
        gender,
        nationality,
        residence,
        occupation,
        telephone_no1,
        telephone_no2,
        marital_status,
        group_name,
        profile_picture_path
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    // $stmt->bind_param("sssssssssssss", $surname, $other_names, $date_of_birth, $place_of_birth, $gender, $nationality, $residence, $occupation, $telephone_no1, $telephone_no2, $marital_status, $group_name, $target_file);
    $stmt->bind_param("sssssssssssssss",$officer_status, $position, $surname, $other_names, $date_of_birth, $place_of_birth, $gender, $nationality, $residence, $occupation, $telephone_no1, $telephone_no2, $group_name, $marital_status, $profile_picture_path);

    // Execute the prepared statement
    if ($stmt->execute()) {
        header("Location: ../success_page.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// include './inc/footer.php';
$conn->close();
?>
