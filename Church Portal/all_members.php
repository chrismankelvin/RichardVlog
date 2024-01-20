<?php
include './inc/values.php';
include './inc/header.php';
?>

<header class="app-header fixed-top">
	<?php
	$currentpage = 'meets';
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
					<h1 class="app-page-title mb-0">All Members</h1>
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
							
						</div><!--//row-->
					</div><!--//table-utilities-->
				</div><!--//col-auto-->
			</div><!--//row-->

			<div class="row g-4">





<?php
			// Fetch data from the General_Members table using a prepared statement
$sql = "SELECT * FROM general_members ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

// Display data in the specified HTML format
while ($row = $result->fetch_assoc()) {
    $imagePath = htmlspecialchars($row['profile_picture_path']);

    echo '<div class="col-6 col-md-4 col-xl-3 col-xxl-2">';
    echo '<!-- <span class="badge bg-success ">NEW</span> -->';
    echo '<div class="card">';
    // echo '<img src="' . $imagePath . '" class="card-img-top" alt="...">';
    echo '<img src="./comp/images/users/user-1.jpg" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<div class="dropdown">';
    // ... (dropdown content)

	echo '<ul class="dropdown-menu">';
    echo '<li><a class="dropdown-item" href="member.php?id=' . $row['member_id'] .'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">';
    echo '<path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />';
    echo '<path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />';
    echo '</svg>View</a></li>';

    echo '<li><a class="dropdown-item" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">';
    echo '<path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />';
    echo '<path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />';
    echo '</svg>Add Department</a></li>';
    
    
    echo '<li><hr class="dropdown-divider"></li>';
    echo '<li><a class="dropdown-item" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">';
    echo '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />';
    echo '<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />';
    echo '</svg>Delete</a></li>';
    echo '</ul>';

    echo '<div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">';
    echo '<svg width="2em" height="2em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">';
    echo '<path d="M17.005 11.995L17.005 12.005" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />';
    echo '<path d="M12.005 11.995L12.005 12.005" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />';
    echo '<path d="M7.005 11.995L7.005 12.005" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />';
    echo '</svg>';
    echo '</div><!--//dropdown-toggle-->';

    echo '<li class="list-group-item d-flex justify-content-between align-items-start">';
    echo '<div class="ms-2 me-auto">';
    echo '<div class="fw-bold">Name</div>';
    echo htmlspecialchars($row['surname'] . ' ' . $row['other_names'], ENT_QUOTES, 'UTF-8');
    echo '</div>';
    echo '<!--<span class="badge bg-primary rounded-pill">14</span> -->';
    echo '</li>';

    echo '<li class="list-group-item d-flex justify-content-between align-items-start">';
    echo '<div class="ms-2 me-auto">';
    echo '<div class="fw-bold">Group</div>';
    echo htmlspecialchars($row['group_name'], ENT_QUOTES, 'UTF-8');
    echo '</div>';
    echo '<!-- <span class="badge bg-primary rounded-pill">14</span>  -->';
    echo '</li>';

    echo '<li class="list-group-item d-flex justify-content-between align-items-start">';
    echo '<div class="ms-2 me-auto">';
    echo '<div class="fw-bold">Phone</div>';
    echo htmlspecialchars($row['telephone_no1'], ENT_QUOTES, 'UTF-8');
    echo '</div>';
    echo '<!-- <span class="badge bg-primary rounded-pill">14</span> -->';
    echo '</li>';

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
?>
















				<footer class="app-footer">
					<div class="container text-center py-3">
						<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
						<small class="copyright">Crafty Graphix 2023</small>

					</div>
				</footer><!--//app-footer-->

			</div><!--//app-wrapper-->






			<?php include './inc/footer.php'; ?>