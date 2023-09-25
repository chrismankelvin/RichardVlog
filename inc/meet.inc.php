<?php
include 'database.inc.php';
// Define variables and set them to empty values
$name = $email = $contact = $educationalLevel = "";
$errors = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate and sanitize the input values
  $name = cleanInput($_POST["fullName"]);
  $email = cleanInput($_POST["email"]);
  $contact = cleanInput($_POST["contact"]);
  $educationalLevel = cleanInput($_POST["educationLevel"]);

  // Perform validation
  if (empty($name)) {
    $errors[] = "Name is required";
  }

  if (empty($email)) {
    $errors[] = "Email is required";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
  }

  if (empty($contact)) {
    $errors[] = "Contact is required";
  }

  if (empty($educationalLevel)) {
    $errors[] = "Educational level is required";
  }

  // If there are no errors, insert the data into the database
  if (empty($errors)) {
    // Assuming you have a database connection established

    // Prepare the SQL statement
    $query = "INSERT INTO meets (name, email, contact, educational_level) VALUES (?, ?, ?, ?)";
    $statement = $connection->prepare($query);
    $statement->bind_param("ssss", $name, $email, $contact, $educationalLevel);

    // Execute the statement
    if ($statement->execute()) {
      // Data inserted successfully
      // You can perform any additional actions or redirect to a success page
      // For example:
      header("Location: ../success.php");
      exit();
    } else {
      // Failed to insert data
      $errors[] = "Failed to insert data. Please try again.";
    }

    // Close the statement
    $statement->close();
  }
}

// Function to clean and sanitize input values
function cleanInput($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>
