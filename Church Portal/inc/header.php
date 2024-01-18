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
    <style type="text/css">
    /* body {
      color: #6F8BA4;
      margin-top: 20px;
    } */

    .section {
      padding: 50px 50px;
      position: relative;
    }
    .personal{
      background-color: #ffffff;
      padding: 20px;
      border-radius: 30px;
    }

    .gray-bg {
      background-color: transparent;
    }

    img {
      max-width: 100%;
      /* max-height: 700px; */
    }

    img {
      vertical-align: middle;
      border-style: none;
    }

    /* About Me 
---------------------*/
    .about-text h3 {
      font-size: 45px;
      font-weight: 700;
      margin: 0 0 6px;
    }

    @media (max-width: 767px) {
      .about-text h3 {
        font-size: 35px;
      }
    }

    .about-text h6 {
      font-weight: 600;
      margin-bottom: 15px;
    }

    @media (max-width: 767px) {
      .about-text h6 {
        font-size: 18px;
      }
    }

    .about-text p {
      font-size: 18px;
      max-width: 450px;
    }

    .about-text p mark {
      font-weight: 600;
      color: #20247b;
    }

    .about-list {
      padding-top: 10px;
    }

    .about-list .media {
      padding: 5px 0;
    }

    .about-list label {
      color: #20247b;
      font-weight: 600;
      width: 88px;
      margin: 0;
      position: relative;
    }

    .about-list label:after {
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      right: 11px;
      width: 1px;
      height: 12px;
      background: #20247b;
      -moz-transform: rotate(15deg);
      -o-transform: rotate(15deg);
      -ms-transform: rotate(15deg);
      -webkit-transform: rotate(15deg);
      transform: rotate(15deg);
      margin: auto;
      opacity: 0.5;
    }

    .about-list p {
      margin: 0;
      font-size: 15px;
    }

    @media (max-width: 991px) {
      .about-avatar {
        margin-top: 30px;
      }
    }

    .about-section .counter {
      padding: 22px 20px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    }

    .about-section .counter .count-data {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .about-section .counter .count {
      font-weight: 700;
      color: #20247b;
      margin: 0 0 5px;
    }

    .about-section .counter p {
      font-weight: 600;
      margin: 0;
    }

    mark {
      background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
      background-size: 100% 3px;
      background-repeat: no-repeat;
      background-position: 0 bottom;
      background-color: transparent;
      padding: 0;
      color: currentColor;
    }

    .theme-color {
      color: #fc5356;
    }

    .dark-color {
      color: #20247b;
    }
  </style>
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