
<?php 
$main_title ="Success";
include 'header.php';
include 'navbar.php';

?>
<style>
.section {
    background-color: #f8f8f8;
    padding: 40px;
    text-align: center;
    margin: 0 auto;
    max-width: 600px;
    margin-top: 40px;
  }

  .section h3 {
    margin-bottom: 20px;
  }

  .section img {
    max-width: 100px;
    margin-bottom: 20px;
  }

  .delivered-icon {
    font-size: 100px;
    color: #28a745;
    margin-bottom: 20px;
  }
  
  .trust-section {
    text-align: center;
    padding: 50px 0;
    background-color: #f9f9f9;
  }
  .trust-item {
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 20px;
  }


  /* <style> */
  .btn-group {
      margin-top: 20px;
  }

  .btn-success {
      background-color:  #28a745;
      border-color: #28a745;
  }

  .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
  }

  .btn-warning {
      background-color: #ffc107;
      border-color: #ffc107;
  }

  .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
  }
</style>

  <div class="container" >
    <div class="section">
      <img src="./inc/images/mail.png" alt="Request Image">
      <h3>Request Sent</h3>
      <p>Thank you for submitting your request. We have received it and will get back to you soon. Please check your email regularly for further communication.</p>
      <i class="bi bi-check-circle-fill delivered-icon"></i>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
<?php
  require 'footer.php'
?>
