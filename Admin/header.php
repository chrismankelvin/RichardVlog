
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="../comp/bootstrap-5.3.2-dist/css/bootstrap.min.css"><link rel="stylesheet" href="../comp/fontawesome-free-6.4.2-web/css/all.min.css">
  <link rel="stylesheet" href="./inc/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  

    <?php

// Retrieve user information from the database based on the user_id stored in the session
if (isset($_SESSION['user_id'])) {
  $userId = $_SESSION['user_id'];
  $sql = "SELECT username FROM admin WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $stmt->bind_result($username);
  $stmt->fetch();
  $stmt->close();
  $_SESSION['username'] = $username;
}
?>
</head>
<body>
    

