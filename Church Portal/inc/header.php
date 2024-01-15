<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>REC - Richard Educational Administrator</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Richard Educational Administrator">
    <meta name="author" content="Crafty Graphics">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="comp/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="comp/css/portal.css">

</head> 
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
  // $_SESSION['username'] = $username;
}

$timeout = 600;


if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    // User has exceeded the session timeout. Log them out.
    session_unset();
    session_destroy();
    header('location: index.php?TimeOut'); // Redirect to the login page
    exit;
}

?>

<body class="app">   