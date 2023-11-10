

<div class="sticky-bar">
    <div class="container">
      <div class="sticky-bar-content">
        <button type="button" id="sidebarCollapse" class="btn">
          <i class="fas fa-bars"></i>
        </button>
        <div class="user-info">
          <?php
          // Display user information if logged in
          if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo 'Welcome, ' . $_SESSION['username'] . '!';
          }
          ?>
        </div>
        <div>
          <?php
          // Display logout link if logged in
          if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo '<a href="./logout.php" class="logout-link"><i class="fas fa-sign-out-alt"></i> Logout</a>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>

   <!-- Sidebar -->
   <nav id="sidebar">
    <div class="p-4">
      <ul class="list-unstyled">
        <li>
          <a href="./dashboard.php">Dashboard</a>
        </li>
        <li>
          <a href="./reviews.php">Main Reviews</a>
        </li>
        <!-- <li>
          <a href="./waitreviews.php">Pending Reviews</a>
        </li> -->
        <li>
          <a href="./meets.php">Appointments</a>
        </li>
      </ul>
      <!-- <div class="mt-5">
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div> -->
      <!-- Close Sidebar Button -->
      <button type="button" id="closeSidebar" class="btn btn-danger mt-3">Close Sidebar</button>
    </div>
  </nav>