<?php
// Check if the user is logged in, if not, redirect to the login page
// Start the session
session_start();

// Include the database connection file
require_once './inc/db_connection.php';
include './inc/get_reviews.php';

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit;
}

// Retrieve user information from the database based on the user_id stored in the session
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $sql = "SELECT username FROM admin WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($username);
    $stmt->fetch();
    $stmt->close();
    $_SESSION['username'] = $username;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    .bod{
      background-color: #F0F3F5;
    }
        /* Custom CSS for the sticky bar and additional styling */
        .sticky-bar {
            /* position: fixed; */
            /* top: 0; */
            left: 0;
            width: 100%;
            background-color: #007bff; 
            color: #ffffff; /* Change this to the desired text color */
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .sticky-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 15px;
        }

        .user-info {
            font-weight: bold;
        }

        .logout-link {
            color: #ffffff; /* Change this to the desired text color */
            text-decoration: none;
        }

        .logout-link:hover {
            text-decoration: underline;
        }
        #sidebar {
  min-width: 250px;
  max-width: 250px;
  background-color: #343a40;
  color: #fff;
  transition: all 0.3s;
  position: fixed;
  top: 0;
  right: -250px; /* Change 'left' to 'right' */
  height: 100%;
  overflow-y: auto;
  z-index: 999;
}

#sidebar.active {
  right: 0; /* Change 'left' to 'right' */
}

#sidebar .p-4 {
  padding-top: 20px;
}

#content {
  margin-right: 0px; /* Change 'margin-left' to 'margin-right' */
  padding: 20px;
}

#sidebarCollapse {
  background-color: #343a40;
  border: none;
  color: #fff;
  cursor: pointer;
}

#sidebarCollapse:hover {
  background-color: #444;
}

#sidebar ul li {
  padding: 10px;
}

#sidebar ul li a {
  color: #fff;
  display: block;
  text-decoration: none;
  transition: all 0.3s;
}

#sidebar ul li a:hover {
  color: #ddd;
}

    
    </style>

</head>

<body class="bod">



  <!-- Sidebar -->
  <nav id="sidebar">
    <div class="p-4">
      <ul class="list-unstyled">
        <li>
          <a href="#dashboard">Dashboard</a>
        </li>
        <li>
          <a href="#approved">Approved Reviews</a>
        </li>
        <li>
          <a href="#main">Main Reviews</a>
        </li>
        <li>
          <a href="../reviewform.php">Reviews</a>
        </li>
      </ul>
      <!-- <div class="mt-5">
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div> -->
      <!-- Close Sidebar Button -->
      <button type="button" id="closeSidebar" class="btn btn-danger mt-3">Close Sidebar</button>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="sticky-bar">
        <div class="container">
            <div class="sticky-bar-content">
            <button type="button" id="sidebarCollapse" class="btn">
          <i class="fas fa-bars"></i>
        </button>
                <div class="user-info">
                    <?php
                    // Display user information if logged in
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                        echo 'Welcome, ' . $_SESSION['username'] . '!';
                    }
                    ?>
                </div>
                <div>
                    <?php
                    // Display logout link if logged in
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                        echo '<a href="./inc/logout.php" class="logout-link"><i class="fas fa-sign-out-alt"></i> Logout</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

  <div id="content">
 
<div class="container mt-4">


<h4 id="main">Main Reviews</h4>
 <?php 
 getWaitReviews();
 ?>
 <br>
 <hr>


<h4 id="approved">Approved Reviews</h4>
<?php 
 getReviews(); 
?> 


    </div>
  </div>

  <!-- Link to Bootstrap and Font Awesome JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <!-- Custom script to handle sidebar toggle -->
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
    if (confirm('Are you sure you want to delete this review?')) {
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
          alert(response); // Show the response message (e.g., "Review approved and moved to the approved reviews table.")
          location.reload(); // Reload the page to update the review lists
        },
        error: function(error) {
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
  // const contentElement = $(`#b${reviewId}`);
  const bodyElement = $(`#body_${reviewId}`);

  // Save the original content for reverting if needed
  const originalName = nameElement.text();
  const originalTitle = titleElement.text();
  const originalBody = bodyElement.text();

  // Convert the elements to input fields for editing
  nameElement.html(`<input type="text" id="edit_name_${reviewId}" value="${originalName}">`);
  titleElement.html(`<input type="text" id="edit_title_${reviewId}" value="${originalTitle}">`);
  bodyElement.html(`<textarea id="edit_body_${reviewId}">${originalBody}</textarea>`);

  // Show the Save button and hide the Edit button
  $(`#edit_btn_${reviewId}`).hide();
  $(`#save_btn_${reviewId}`).show();
}

// Function to save the edited review
function saveReview(reviewId) {
  // Get the edited review content
  const editedName = $(`#edit_name_${reviewId}`).val();
  const editedTitle = $(`#edit_title_${reviewId}`).val();
  const editedBody = $(`#edit_body_${reviewId}`).val();

  // Make an AJAX request to update_review.php
  $.ajax({
    url: './inc/update_review.php',
    type: 'POST',
    data: { 
      review_id: reviewId,
      name: editedName,
      title: editedTitle,
      body: editedBody 
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
  const bodyElement = $(`#body_${reviewId}`);

  // Save the original content for reverting if needed
  const originalName = nameElement.text();
  const originalTitle = titleElement.text();
  const originalBody = bodyElement.text();

  // Convert the elements to input fields for editing
  nameElement.html(`<input type="text" id="edit_name_${reviewId}" value="${originalName}">`);
  titleElement.html(`<input type="text" id="edit_title_${reviewId}" value="${originalTitle}">`);
  bodyElement.html(`<textarea id="edit_body_${reviewId}">${originalBody}</textarea>`);

  // Show the Save button and hide the Edit button
  $(`#edit_btn_${reviewId}`).hide();
  $(`#save_btn_${reviewId}`).show();
}

// Function to save the edited review
function saveReviewA(reviewId) {
  // Get the edited review content
  const editedName = $(`#edit_name_${reviewId}`).val();
  const editedTitle = $(`#edit_title_${reviewId}`).val();
  const editedBody = $(`#edit_body_${reviewId}`).val();

  // Make an AJAX request to update_review.php
  $.ajax({
    url: './inc/update_reviewA.php',
    type: 'POST',
    data: { 
      review_id: reviewId,
      name: editedName,
      title: editedTitle,
      body: editedBody 
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