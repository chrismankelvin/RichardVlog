
<?php
include './header.php';
// Check if the user is logged in, if not, redirect to the login page
session_start();

// if ($_SESSION['logged_in'] !== true) {
//   header("Location: dashboard.php");
//   exit();
// }

?>


  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        
        <form class="border p-4 rounded login-form" method="POST" action="log_in.php">
        <div class="text-center mb-4">
          <i class="fas fa-user-shield fa-4x"></i> <!-- Font Awesome admin icon -->
        </div>
          <h4 class="mb-4 text-center">Administrator</h4>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
      </div>
    </div>
  </div>

  <?php
include './footer.php';
?>