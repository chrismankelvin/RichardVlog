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


        // JavaScript to handle video playback on thumbnail click
        const videoThumbnails = document.querySelectorAll('.video-thumbnail');

        videoThumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                const videoSrc = thumbnail.getAttribute('data-video-src');
                const videoDescription = thumbnail.nextElementSibling;
                const videoContainer = thumbnail.parentElement;

                // Create a video element
                const videoElement = document.createElement('video');
                videoElement.controls = true;

                // Create a source element for the video
                const sourceElement = document.createElement('source');
                sourceElement.src = videoSrc;
                sourceElement.type = 'video/mp4';

                // Append the source element to the video element
                videoElement.appendChild(sourceElement);

                // Remove the thumbnail and description
                videoContainer.innerHTML = '';

                // Append the video element and description back to the container
                videoContainer.appendChild(videoElement);
                videoContainer.appendChild(videoDescription);

                // Start playing the video
                videoElement.play();
            });
        });
    // </script>
