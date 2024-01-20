<?php

include './inc/values.php';
include './inc/header.php';
?>

<header class="app-header fixed-top">
	<?php
	$currentpage = 'teens';
	include './inc/sidepanel.php';
	?>

	<?php
	include './inc/panelnav.php';

	?>

</header>

<div class="app-wrapper">
        <div class="container">
		<hr class="mb-4">
            <div style="text-align: center;">
                <i class="fas fa-check-circle" style="font-size: 48px; color: green;"></i>
                <h1 class="app-page-title">Registration Successful</h1>
                <p>Your registration has been successfully submitted.</p>
                <a href="home.php">Back to Home</a>
                
                <!-- Horizontally Aligned Buttons -->
                <div style="display: flex; justify-content: center; margin-top: 20px;">
				<a href="registerexecutive.php"><button style="margin-right: 10px;" class="btn app-btn-primary">Add Executive</button> </a>
                   <a href="registermember.php"> <button class="btn app-btn-primary">Register Member</button></a>
                </div>
            </div>
          
        </div>
    </div>

<?php include './inc/footer.php'; ?>

