<?php
$main_title = "Richard Educational Consult";
require 'header.php';


?>
<?php require 'navbar.php';?>
<section class="jumbotron text-left">

  <div class="container">
    <!-- <img class="logo" src="./inc/images/lg_1.png" alt="Richard Vlog Logo"> -->
    <h1 >Welcome to </h1>
    <h1>
      Richard Educational Consult
    </h1>


    <!-- <h1 class="display-4">Richard - Vlog</h1> -->
    <p class="lead">Travel The World With Us</p>
  </div>
</section>


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./inc/images/ann_1.jpg" class="d-block w-100" alt="Image 1">
              <div class="carousel-caption cap">
                <h3 style=" color:#fff; padding:5px; width:auto; background-color: #33333381; border-radius:20px;" class="lead">Annoucements</h3>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./inc/images/ann_2.png" class="d-block w-100" alt="Image 2">
              <div class="carousel-caption cap">
              <h3 style=" color:#fff; padding:5px; width:auto; background-color: #33333381; border-radius:20px;" class="lead">Oppotunities To Work Abroad </h3>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./inc/images/ann_3.png" class="d-block w-100" alt="Image 3">
              <div class="carousel-caption cap">
              <h3 style=" color:#fff; padding:5px; width:auto; background-color: #33333381; border-radius:20px;" class="lead">Infinite Oppotunities To Study Abroad</h3> 
                <!-- <p class="lead"></p> -->
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>


      <div class="col-lg-6">
        <div class="text-container">
          <p class="welcome-message">Welcome to <strong>Richard Educational Consult</strong>, where education meets excellence. Our mission is to empower students with the knowledge and skills they need to achieve their educational and career goals. At Richard Educational Consult, we believe that every student has the potential to succeed, and we are dedicated to providing the guidance and support necessary to make that potential a reality. Whether you're a high school student preparing for college admissions, a professional seeking career advancement, or a parent looking for the best educational opportunities for your child, we are here to assist you on your educational journey. Our team of experienced educators and advisors is committed to helping you navigate the educational landscape and reach your full potential.</p>

        </div>

      </div>
    </div>
  </div>
</section>




<?php
require 'review.php'
?>


<?php
require 'images.php'
?>

<?php
include "icon.php";
require 'footer.php'
?>