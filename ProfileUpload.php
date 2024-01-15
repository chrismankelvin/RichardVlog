<?php
$main_title = "Add your Review";
session_start();
// require 'header.php';
include 'header.php';
include 'navbar.php';

?>

<div class="container-fluid review-post" style="background-image: url('./inc/images/stationary.jpg');">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <h2 class="text-center text-white mb-4">Review</h2>

<form action='./inc/upload.php' method='post' enctype='multipart/form-data'>
<h3 class="text-center text-blue lead mb-4">Add Your Profile Picture</h3>
<input type="text" name="name" id="nameInput" placeholder="Enter Your Name Agian">
<input type='file' name='file' id='fileInput'>
        <button type='submit' name='submit'>UPLOAD</button>
        </form>
        </div>
  </div>
</div>




    
</body>
</html>