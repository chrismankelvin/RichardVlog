<?php
include 'database.inc.php';
// Assuming you have a database connection established

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $title = $_POST['title'];
  $content = $_POST['content'];

  // Perform any necessary validation on the form data

  // Insert the review into the database
  $query = "INSERT INTO reviews (name, title, body) VALUES ('$name', '$title', '$content')";
  $result = mysqli_query($connection, $query);

  if ($result) {
    // Review successfully inserted
    $message = 'Review Captured';
  } else {
    // Error occurred while inserting review
    $message = 'Error submitting review. Please try again.';
  }
}

// Redirect back to the original page with the success message
header("Location: ".$_SERVER['HTTP_REFERER']."?message=".urlencode($message));
exit;
?>
