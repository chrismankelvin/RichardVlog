<?php
require './navbar.php';
?>


<section class="banner">
        <div class="banner-left">
            <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#imageCarousel" data-slide-to="1"></li>
                    <li data-target="#imageCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./inc/images/1.jpg" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="./inc/images/2.jpg" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="./inc/images/3.jpg" alt="Image 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- <div class="banner-right">
        <h2>Grow with great design</h2>
        <p>No matter what your business needs, we can connect you with a creative expert to make your business look and feel professional. Because good design makes great business.</p>
        <button class="get-design-button">Get a Design</button>
    </div> -->
        <div class="banner-right">
            <h2>Grow with great design</h2>
            <p>No matter what your business needs, we can connect you with a creative expert to make your business look
                and feel professional. Because good design makes great business.</p>
            <input type="text" class="search-box" placeholder="What do you need?">
            <button class="get-design-button">Get Design</button>
        </div>
    </section>

    <section class="cards-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">| Featured Categories</h2>
            <p class="section-description">Explore our top categories below: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt inventore tempora, ad pariatur eligendi quasi quae iure molestias fugit nostrum! Harum, molestias ullam itaque velit fuga consequatur voluptatum sit voluptatibus doloribus vel perferendis magni esse, numquam ipsa maiores omnis nam </p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="./inc/images/1.jpg" alt="Card 1">
                    <div class="card-body">
                        <h5 class="card-title">Card Title 1</h5>
                        <p class="card-description">Description for Card 1</p>
                        <span class="arrow">&#8594;</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./inc/images/2.jpg" alt="Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Card Title 2</h5>
                        <p class="card-description">Description for Card 2</p>
                        <span class="arrow">&#8594;</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./inc/images/3.jpg" alt="Card 3">
                    <div class="card-body">
                        <h5 class="card-title">Card Title 3</h5>
                        <p class="card-description">Description for Card 3</p>
                        <span class="arrow">&#8594;</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-more-link">
            <a href="#" class="view-more">View More Categories <span class="arrow">&#8594;</span></a>
        </div>
    </div>
</section>

<section class="package-section">
    <div class="package-description">
        <h2>Your business <br> deserves great design </h2>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum, ligula nec auctor commodo, tortor nulla vestibulum elit.</p>
        <a href="#" class="package-link">Start Your Brand &#8594;</a>
    </div>
    <div class="package-image">
        <!-- Random image from the internet, replace with your desired image URL -->
        <img src="./inc/images/3.jpg" alt="Package Image">
        <button class="floating-button">Button</button>
    </div>
</section>
<br>
<br>

<section class=" billboard-section">
        <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <div class="billboard-image">
                    <!-- Image for the billboard, replace with your desired image URL -->
                    <img src="./inc/images/2.jpg" alt="Billboard Image">
                </div>
                <div class="note">
                    By <span>Aldious Kweku</span>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="billboard-heading">Ready to level up your look with a great design?</h2>
                <button class="browse-button">Browse Arts Category</button>
              
            </div>
            
        </div>
    </div>
    </section>
    <br>

<a href=""><button class="float-button">Get Design</button></a>
<?php
require './footer.php';
?>

