<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validate the form data (you can add more validation if required)
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill out all the fields.";
    exit;
  }

  // Send the email to the administrators
  $to = "admin@example.com"; // Replace with the actual email address
  $subject = "Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // You can customize the email headers as per your requirements
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for contacting us. We will get back to you soon.";
  } else {
    header("Location: ../success.php");
  }
}
?>
