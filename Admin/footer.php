
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    const sidebar = document.getElementById('sidebar');
    const sidebarCollapse = document.getElementById('sidebarCollapse');
    const closeSidebarBtn = document.getElementById('closeSidebar');

    sidebarCollapse.addEventListener('click', () => {
      sidebar.classList.toggle('active');
    });

    // Function to close the sidebar when the "Close Sidebar" button is clicked
    closeSidebarBtn.addEventListener('click', () => {
      sidebar.classList.remove('active');
    });






    

    function deleteReview(reviewId) {
    if (confirm('Are you sure you want to delete this reviewed?')) {
      // Make an AJAX request to delete_review.php
      $.ajax({
        url: './inc/delete_review.php',
        type: 'POST',
        data: { review_id: reviewId },
        success: function(response) {
          alert(response); // Show the response message (e.g., "Review deleted successfully.")
          location.reload(); // Reload the page to update the review lists
        },
        error: function(error) {
          alert('An error occurred while deleting the review.');
        }
      });
    }
  }

  function approveReview(reviewId) {
  if (confirm('Are you sure you want to approve this review?')) {
    // Make an AJAX request to approve_review.php
    $.ajax({
      url: './inc/approve_review.php',
      type: 'POST',
      data: { review_id: reviewId },
      success: function(response) {
        // Display the response message from the server
        alert(response);
        
        // Reload the page to update the review lists
        location.reload();
      },
      error: function(jqXHR, textStatus, errorThrown) {
        // Handle any errors that occur during the AJAX request
        alert('An error occurred while approving the review.');
      }
    });
  }
}

  

  function deleteReviewA(reviewId) {
    if (confirm('Are you sure you want to delete this review?')) {
      // Make an AJAX request to delete_review.php
      $.ajax({
        url: './inc/delete_reviewA.php',
        type: 'POST',
        data: { review_id: reviewId },
        success: function(response) {
          alert(response); // Show the response message (e.g., "Review deleted successfully.")
          location.reload(); // Reload the page to update the review lists
        },
        error: function(error) {
          alert('An error occurred while deleting the review.');
        }
      });
    }
  }



  function editReview(reviewId) {
  // Disable other edit buttons to avoid conflicts
  $('.edit-btn').prop('disabled', true);

  // Get the review content elements
  const nameElement = $(`#name_${reviewId}`);
  const titleElement = $(`#title_${reviewId}`);
  const contentElement = $(`#content_${reviewId}`);

  // Save the original content for reverting if needed
  const originalName = nameElement.text();
  const originalTitle = titleElement.text();
  const originalContent = contentElement.text();

  // Convert the elements to input fields for editing
  nameElement.html(`<input type="text" id="edit_name_${reviewId}" value="${originalName}">`);
  titleElement.html(`<input type="text" id="edit_title_${reviewId}" value="${originalTitle}">`);
  contentElement.html(`<textarea id="edit_content_${reviewId}">${originalContent}</textarea>`);

  // Show the Save button and hide the Edit button
  $(`#edit_btn_${reviewId}`).hide();
  $(`#save_btn_${reviewId}`).show();
}

// Function to save the edited review
function saveReview(reviewId) {
  // Get the edited review content
  const editedName = $(`#edit_name_${reviewId}`).val();
  const editedTitle = $(`#edit_title_${reviewId}`).val();
  const editedContent = $(`#edit_content_${reviewId}`).val();

  // Make an AJAX request to update_review.php
  $.ajax({
    url: './inc/update_review.php',
    type: 'POST',
    data: { 
      review_id: reviewId,
      name: editedName,
      title: editedTitle,
      content: editedContent 
    },
    success: function(response) {
      alert(response); // Show the response message (e.g., "Review updated successfully.")
      location.reload(); // Reload the page to reflect the updated review
    },
    error: function(error) {
      alert('An error occurred while updating the review.');
    }
  });
}


function editReviewA(reviewId) {
  // Disable other edit buttons to avoid conflicts
  $('.edit-btn').prop('disabled', true);

  // Get the review content elements
  const nameElement = $(`#name_${reviewId}`);
  const titleElement = $(`#title_${reviewId}`);
  // const contentElement = $(`#b${reviewId}`);
  const bodyElement = $(`#content_${reviewId}`);

  // Save the original content for reverting if needed
  const originalName = nameElement.text();
  const originalTitle = titleElement.text();
  const originalBody = bodyElement.text();

  // Convert the elements to input fields for editing
  nameElement.html(`<input type="text" id="edit_name_${reviewId}" value="${originalName}">`);
  titleElement.html(`<input type="text" id="edit_title_${reviewId}" value="${originalTitle}">`);
  bodyElement.html(`<textarea id="edit_content_${reviewId}">${originalBody}</textarea>`);

  // Show the Save button and hide the Edit button
  $(`#edit_btn_${reviewId}`).hide();
  $(`#save_btn_${reviewId}`).show();
}

// Function to save the edited review
function saveReviewA(reviewId) {
  // Get the edited review content
  const editedName = $(`#edit_name_${reviewId}`).val();
  const editedTitle = $(`#edit_title_${reviewId}`).val();
  const editedBody = $(`#edit_content_${reviewId}`).val();

  // Make an AJAX request to update_review.php
  $.ajax({
    url: './inc/update_reviewA.php',
    type: 'POST',
    data: { 
      review_id: reviewId,
      name: editedName,
      title: editedTitle,
      content: editedBody 
    },
    success: function(response) {
      alert(response); // Show the response message (e.g., "Review updated successfully.")
      location.reload(); // Reload the page to reflect the updated review
    },
    error: function(error) {
      alert('An error occurred while updating the review.');
    }
  });
}



</script>
</body>
</html>