


<section class="other-services-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <button class="other-services-button" onclick="toggleSidebar()">Discover</button>
        <div id="sidebar" class="sidebar">
          <div class="sidebar-tab" onclick="toggleSidebar()">Close</div>
          <ul>
            <li><a href="./advice.php">Educational Advice</a></li>
            <li><a href="./spc.php">Success Probability (SPC)</a></li>
            <li><a href="./documents.php">Required Document</a></li>
            <!-- <li><a href="#">Success Stories</a></li> -->
            <li><a href="./contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>






<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="footer-logo">
      <img src="./inc/images/lg_1.png" alt="REC Logo">
      <!-- <h5 class="logo-text">REC</h5> -->
    </div>
    <div class="footer-nav">
      <nav class="nav">
        <a class="nav-link" href="PandP.php">Privacy Policy</a>
        <a class="nav-link" href="./TandC.php">Terms And Conditions</a>
        <a class="nav-link" href="./contact.php">Contacts</a>
        <a class="nav-link" href="about.php">About Us</a>
        <!-- <a class="nav-link" href="#">Support</a> -->
      </nav>
    </div>

    <div class="footer-social">
      <a class="social-icon" href="https://www.youtube.com/@RichardEducationalConsult"><i class="fab fa-youtube"></i></a>
      <a class="social-icon" href="https://web.facebook.com/profile.php?id=61550910960283"><i class="fab fa-facebook"></i></a>
      <a class="social-icon" href="https://www.tiktok.com/@richard.agyei.sik"><i class="fab fa-tiktok"></i></a>
      <a class="social-icon" href="mailto: richardeducationalconsult@gmail.com"><i class="fas fa-envelope"></i></a>
    </div>

    <div class="footer-text">
      <p>&copy; Crafty Graphix 2023. All rights reserved.</p>
    </div>
  </div>
</footer>






<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script src="./comp/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script> -->
<script src="./comp/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
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
              }, 30); // Increase this value to make counting smoother (lower values increase speed)
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



    // <script for the jumping cards on advice page>
        // JavaScript for subtle card animation
        document.addEventListener("DOMContentLoaded", function () {
            const adviceCards = document.querySelectorAll(".advice-card");

            setInterval(() => {
                adviceCards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.animation = "floatAnimation 3s infinite alternate";
                    }, index * 500);
                });
            }, 1500);
        });
    // </script>
   
</script>



</body>



</html>