

<footer class="footer">
    <div class="social-icons">
        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
    <div class="footer-links">
        <a href="#">Quick Job</a>
        <a href="#">Pricing</a>
        <a href="#">Terms</a>
        <a href="#">Contact</a>
    </div>
    <div class="footer-line"></div>
    <div class="copyright">&copy; Crafty Graphixs, 2023 </div>
</footer>


<!-- Bootstrap JS and jQuery scripts (required for responsive navbar and dropdowns) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
   
  <!-- Custom JavaScript for image carousel -->
  <script>
        $(document).ready(function () {
            $('#imageCarousel').carousel({
                interval: 5000 // Set the interval for image changes (in milliseconds)
            });
        });


        // <script> for the buttons section
        const leftButton = document.getElementById('left-button');
        const rightButton = document.getElementById('right-button');
        const subButtonsContainer = document.getElementById('sub-buttons-container');

        let scrollInterval;

        leftButton.addEventListener('mouseenter', () => {
            scrollInterval = setInterval(() => {
                subButtonsContainer.scrollLeft -= 10; // Adjust the scroll speed as needed
            }, 25); // Adjust the interval time as needed
        });

        leftButton.addEventListener('mouseleave', () => {
            clearInterval(scrollInterval);
        });

        rightButton.addEventListener('mouseenter', () => {
            scrollInterval = setInterval(() => {
                subButtonsContainer.scrollLeft += 10; // Adjust the scroll speed as needed
            }, 25); // Adjust the interval time as needed
        });

        rightButton.addEventListener('mouseleave', () => {
            clearInterval(scrollInterval);
        });

    // <script>


    </script>


</body>
</html>
