
 <?php
 include './header.php';
 ?>

  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <form class="border p-4 rounded" method="post" action="sign_up.php">
          <h4 class="mb-4">Register As Admin</h4>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
  <?php
 include './footer.php';
 ?>



