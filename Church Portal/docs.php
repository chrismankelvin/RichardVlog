<?php

include './inc/values.php';
include './inc/header.php';
include './inc/db_connection.php';

?>

<header class="app-header fixed-top">
	<?php
	$currentpage = 'docs';
	include './inc/sidepanel.php';
	?>

	<?php
	include './inc/panelnav.php';

	?>

</header>






<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Church Report</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								<form class="docs-search-form row gx-1 align-items-center">
									<div class="col-auto">
										<input type="text" id="search-docs" name="searchdocs" class="form-control search-docs" placeholder="Search">
									</div>
									<div class="col-auto">
										<button type="submit" class="btn app-btn-secondary">Search</button>
									</div>
								</form>

							</div><!--//col-->
							<div class="col-auto">

								<select class="form-select w-auto">
									<option selected="" value="option-1">All</option>
									<option value="option-2">PDF</option>
									<option value="option-3">word</option>
									<option value="option-4">other</option>
									<!-- <option value="option-5">Presentation</option> -->
									<!-- <option value="option-6">Zip file</option> -->

								</select>
							</div>
							<div class="col-auto">
								<a class="btn app-btn-primary" href="uploadreport.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-upload me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
										<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
									</svg>Upload File</a>
							</div>
						</div><!--//row-->
					</div><!--//table-utilities-->
				</div><!--//col-auto-->
			</div><!--//row-->




			<div class="row g-4">
				
			


				<?php
 // Make sure to include your database connection details

// Function to calculate relative time
function time_elapsed_string($timestamp) {
    $current_time = time();
    $time_difference = $current_time - $timestamp;
    $seconds = $time_difference;
    
    $minutes      = round($seconds / 60);           
    $hours        = round($seconds / 3600);         
    $days         = round($seconds / 86400);        
    $weeks        = round($seconds / 604800);       
    $months       = round($seconds / 2629440);      
    $years        = round($seconds / 31553280);     

    if ($seconds <= 60) {
        return "Just Now";
    } else if ($minutes <= 60) {
        return ($minutes == 1) ? "1 minute ago" : "$minutes minutes ago";
    } else if ($hours <= 24) {
        return ($hours == 1) ? "1 hour ago" : "$hours hours ago";
    } else if ($days <= 7) {
        return ($days == 1) ? "yesterday" : "$days days ago";
    } else if ($weeks <= 4.3) {  
        return ($weeks == 1) ? "1 week ago" : "$weeks weeks ago";
    } else if ($months <= 12) {
        return ($months == 1) ? "1 month ago" : "$months months ago";
    } else {
        return ($years == 1) ? "1 year ago" : "$years years ago";
    }
}

// Fetch data from the reports table
$sql = "SELECT * FROM reports";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $timestamp = strtotime($row['time_uploaded']);
        $relative_time = time_elapsed_string($timestamp);
		
							
			if($row['file_type'] == 'pdf'){
				$icon = '<i class="fas fa-file-pdf pdf-file"></i>';
			}elseif($row['file_type'] == 'PDF'){
				$icon = '<i class="fas fa-file-pdf pdf-file"></i>';
			}
			 else {
				$icon = '<i class="fas fa-file-alt text-file"></i>';

			};	


        echo '<div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                    <div class="app-card app-card-doc shadow-sm h-100">
                        <div class="app-card-thumb-holder p-3">
                            <span class="icon-holder">
							' . $icon.'
                            </span>
                            <span class="badge text-secondary">' . $row['month_report'] . ' Report</span>
                            <a class="app-card-link-mask" href="#file-link"></a>
                        </div>
                        <div class="app-card-body p-3 has-card-actions">
    
                            <h4 class="app-doc-title truncate mb-0"><a href="#file-link">' . $row['file_name'] . '</a></h4>
                            <div class="app-doc-meta">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="text-muted">Type:</span> ' . $row['file_type'] . '</li>
                                    <li><span class="text-muted">Uploaded:</span> ' . $relative_time . '</li>
                                </ul>
                            </div>
    
                            <div class="app-card-actions">
                                <div class="dropdown">
                                    <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="uploads/' . $row['file_name'] . '" download>
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 1 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                    <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                </svg>Download</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg>Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
    }
} else {
    echo "No reports found.";
}

// Close the database connection
$conn->close();
?>




			</div><!--//row-->


			<!-- <nav class="app-pagination mt-5">
				<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
					</li>
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav -->
			<!--//app-pagination-->
		</div><!--//container-fluid-->
	</div><!--//app-content-->

	    
	<footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Crafty Graphix 2023</small>
		       
		    </div>
	    </footer><!--//app-footer-->
</div><!--//app-wrapper-->






<?php include './inc/footer.php'; ?>