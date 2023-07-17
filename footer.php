





<section class="other-services-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <button class="other-services-button" onclick="toggleSidebar()">Other Services</button>
        <div id="sidebar" class="sidebar">
          <div class="sidebar-tab" onclick="toggleSidebar()">Close</div>
          <ul>
            <li><a href="#">Educational Advice</a></li>
            <li><a href="#">Accelerate Study</a></li>
            <li><a href="#">Required Document</a></li>
            <li><a href="#">Success Calculator(SRC)</a></li>
            <li><a href="./contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require 'icons.php'
?>

<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="footer-logo">
      <img src="./inc/images/logo.png" alt="Richard Vlog Logo">
      <!-- <h5>Richard Vlog</h5> -->
    </div>
    <div class="footer-nav">
      <nav class="nav">
        <a class="nav-link" href="./index.php">Home</a>
        <a class="nav-link" href="#">Privacy Policy</a>
        <a class="nav-link" href="#">Discover</a>
        <a class="nav-link" href="#">Terms And Conditions</a>
        <a class="nav-link" href="#">Cookie Agreement</a>
        <a class="nav-link" href="./contact.php">Contacts</a>
        <a class="nav-link" href="#">About Us</a>
        <a class="nav-link" href="#">Support</a>
      </nav>
    </div>

    <div class="footer-social">
      <a class="social-icon" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
      <a class="social-icon" href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
      <a class="social-icon" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
      <a class="social-icon" href="mailto:info@richardvlog.com"><i class="fas fa-envelope"></i></a>
    </div>

    <div class="footer-text">
      <p>&copy; Chrisman's Technology 2023. All rights reserved.</p>
    </div>

  </div>
</footer>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<!-- Replace with your Font Awesome Kit URL -->



<script>
  function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("open");
  }

  function changePage(offset) {
      var currentPage = <?php echo $currentPage; ?>;
      var totalPages = <?php echo ceil(count($reviews) / $reviewsPerPage); ?>;
      var newPage = currentPage + offset;

      if (newPage >= 1 && newPage <= totalPages) {
        window.location.href = '?page=' + newPage;
      }
    }

</script>



</body>



</html>