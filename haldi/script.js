{/* <script> */}
// JavaScript for the banner section
const bannerImages = document.querySelectorAll('.banner-image');
const indicators = document.querySelectorAll('.indicator');
let currentIndex = 0;

// Function to show a specific image and update the indicators
function showImage(index) {
    bannerImages.forEach((image) => {
        image.classList.remove('active');
    });
    indicators.forEach((indicator) => {
        indicator.classList.remove('active');
    });
    bannerImages[index].classList.add('active');
    indicators[index].classList.add('active');
}

// Function to navigate to the previous image
function prevImage() {
    currentIndex = (currentIndex - 1 + bannerImages.length) % bannerImages.length;
    showImage(currentIndex);
}

// Function to navigate to the next image
function nextImage() {
    currentIndex = (currentIndex + 1) % bannerImages.length;
    showImage(currentIndex);
}

// Initial display
showImage(currentIndex);

// Automatic image rotation (you can add more features)
setInterval(() => {
    nextImage();
}, 7000); // Change image every 5 seconds
{/* </script> */}



