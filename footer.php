





<section class="other-services-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <button class="other-services-button" onclick="toggleSidebar()">Discover</button>
        <div id="sidebar" class="sidebar">
          <div class="sidebar-tab" onclick="toggleSidebar()">Close</div>
          <ul>
            <li><a href="#">Educational Advice</a></li>
            <li><a href="#">Accelerate Study</a></li>
            <li><a href="#">Required Document</a></li>
            <li><a href="./spc.php">Success Probability (SPC)</a></li>
            <li><a href="./contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// Check if the switch_event.txt file exists and get its modification time
$eventFile = 'switch_event.txt';
if (file_exists($eventFile)) {
    $lastModifiedTime = filemtime($eventFile);

    // You can define a time interval (e.g., every 30 minutes) to switch between sections
    $intervalInSeconds = 30 * 60;

    // Calculate the current time
    $currentTime = time();

    // If the time difference exceeds the interval, switch the section
    if ($currentTime - $lastModifiedTime >= $intervalInSeconds) {
        // Modify the switch_event.txt file's timestamp to reset the interval
        touch($eventFile);

        // Toggle between icons1.php and icons2.php based on the file's previous state
        $previousSection = file_get_contents($eventFile);
        if ($previousSection === 'icons1') {
            include 'icons2.php';
        } else {
            include 'icons.php';
        }
    } else {
        // If the time difference is within the interval, display the same section as before
        $previousSection = file_get_contents($eventFile);
        if ($previousSection === 'icons1') {
            include 'icons.php';
        } else {
            include 'icons2.php';
        }
    }
} else {
    // If the switch_event.txt file doesn't exist, create it and start with icons1.php
    touch($eventFile);
    include 'icons.php';
}
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
        <!-- <a class="nav-link" href="./index.php">Home</a> -->
        <a class="nav-link" href="PandP.php">Privacy Policy</a>
        <!-- <a class="nav-link" href="#">Discover</a> -->
        <a class="nav-link" href="./TandC.php">Terms And Conditions</a>
        <!-- <a class="nav-link" href="#">Cookie Agreement</a> -->
        <a class="nav-link" href="./contact.php">Contacts</a>
        <a class="nav-link" href="about.php">About Us</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Replace with your Font Awesome Kit URL -->



<script>
  function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("open");
  }

  $(document).ready(function() {
      // Function to animate the counting numbers
      function animateCounters() {
        const options = {
          threshold: 0.5 // Trigger when 50% of the element is in the viewport
        };

        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const target = entry.target;
              const from = parseInt(target.getAttribute('data-from'));
              const to = parseInt(target.getAttribute('data-to'));
              let current = from;

              const countInterval = setInterval(() => {
                current++;
                if (current > to) {
                  current = to;
                  clearInterval(countInterval);
                }
                target.textContent = current + "+";
              }, 50); // Increase this value to make counting smoother (lower values increase speed)
              observer.unobserve(target);
            }
          });
        }, options);

        $('.count').each(function() {
          observer.observe(this);
        });
      }

      // Animate the counters when the "trust-section" is in the viewport
      animateCounters();
    });

    $(document).ready(function() {
      $(".terms-section h3").on("click", function() {
        $(this).toggleClass("open");
        $(this).next(".hidden-info").slideToggle();
      });
    });

</script>



</body>



</html>