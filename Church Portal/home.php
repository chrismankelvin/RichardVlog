<?php



include './inc/db_connection.php';
include './inc/values.php';
include './inc/header.php';

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: login.php");
  exit();
}

?>
<header class="app-header fixed-top">
	<?php
	$currentpage = 'overview';

	include './inc/sidepanel.php';
	?>

	<?php
	include './inc/panelnav.php';

	?>

</header>

<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<h1 class="app-page-title"> Secretaraite Dashboard</h1>

			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				<div class="inner">
					<div class="app-card-body p-3 p-lg-4">
						<h3 class="mb-3">Welcome, Mr. <?php echo ' ' . $_SESSION['username'] .'';?> </h3>
						<div class="row gx-5 gy-3">
							<div class="col-12 col-lg-9">

								<div>This Portal The Nazareth Secretaraite's Portal for Membership Management, You are signed in as an Administration therefore you have previledge to manage all the membership of Nazareth Asembly .</div>
							</div><!--//col-->
							<div class="col-12 col-lg-3">
								<button data-bs-dismiss="alert" style="background-color:transparent; border:none;" aria-label="Close"><a class="btn app-btn-primary" href="#">
									<!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
										<path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
										<path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z" />
									</svg> -->
									Get Started</a></button>
							</div><!--//col-->
						</div><!--//row-->
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div><!--//app-card-body-->

				</div><!--//inner-->
			</div><!--//app-card-->

			<div class="row g-4 mb-4">
				<div class="col-6 col-lg-3">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Total Members</h4>
							<div class="stats-figure"><?php echo ' '. $total_meets .''; ?></div>
							<div class="stats-meta text-success">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
								</svg> 
								<!-- 20% -->
							</div>
						</div><!--//app-card-body-->
						<a class="app-card-link-mask" href="#"></a>
					</div><!--//app-card-->
				</div><!--//col-->

				<div class="col-6 col-lg-3">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Adults</h4>
							<div class="stats-figure">
								2,250

							</div>
							<div class="stats-meta text-success">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
								</svg>
								 <!-- 5% -->
							</div>
						</div><!--//app-card-body-->
						<a class="app-card-link-mask" href="#"></a>
					</div><!--//app-card-->
				</div><!--//col-->
				<div class="col-6 col-lg-3">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Teenagers</h4>
							<div class="stats-figure"><?php echo ' '. $total_reviews .''; ?></div>
							<div class="stats-meta">
								
								<!-- Open -->
							</div>
						</div><!--//app-card-body-->
						<a class="app-card-link-mask" href="#"></a>
					</div><!--//app-card-->
				</div><!--//col-->
				<div class="col-6 col-lg-3">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Children</h4>
							<div class="stats-figure">2</div>
							<div class="stats-meta">
								<!-- New -->
							</div>
						</div><!--//app-card-body-->
						<a class="app-card-link-mask" href="#"></a>
					</div><!--//app-card-->
				</div><!--//col-->
			</div><!--//row-->



			<div class="row g-4 mb-4">
				<div class="col-12 col-lg-4">
					<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						<div class="app-card-header p-3 border-bottom-0">
							<div class="row align-items-center gx-3">
								<div class="col-auto">
									<div class="app-icon-holder">
										<!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
											<path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
										</svg> -->
										<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg>
									</div><!--//icon-holder-->

								</div><!--//col-->
								<div class="col-auto">
									<h4 class="app-card-title">Register a Member</h4>
								</div><!--//col-->
							</div><!--//row-->
						</div><!--//app-card-header-->
						<div class="app-card-body px-4">

							<div class="intro">Add new members to the church register, New converts, transfered and newly born children should be registered here </div>
						</div><!--//app-card-body-->
						<div class="app-card-footer p-4 mt-auto">
							<a class="btn app-btn-secondary" href="registermember.php"> Add</a>
						</div><!--//app-card-footer-->
					</div><!--//app-card-->
				</div><!--//col-->

				


				

		<div class="col-12 col-lg-4">
					<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						<div class="app-card-header p-3 border-bottom-0">
							<div class="row align-items-center gx-3">
								<div class="col-auto">
									<div class="app-icon-holder">
										<!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
											<path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
										</svg> -->
										<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg>
									</div><!--//icon-holder-->

								</div><!--//col-->
								<div class="col-auto">
									<h4 class="app-card-title">Register an Executive</h4>
								</div><!--//col-->
							</div><!--//row-->
						</div><!--//app-card-header-->
						<div class="app-card-body px-4">

							<div class="intro">Transfered and Newly Ordained officers should be registered here</div>
						</div><!--//app-card-body-->
						<div class="app-card-footer p-4 mt-auto">
							<a class="btn app-btn-secondary" href="registerexecutive.php"> Add</a>
						</div><!--//app-card-footer-->
					</div><!--//app-card-->
				</div><!--//col-->


				<div class="col-12 col-lg-4">
					<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						<div class="app-card-header p-3 border-bottom-0">
							<div class="row align-items-center gx-3">
								<div class="col-auto">
									<div class="app-icon-holder">
										<!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-code-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
											<path fill-rule="evenodd" d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
										</svg> -->
										<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708z"/>
</svg>
									</div><!--//icon-holder-->

								</div><!--//col-->
								<div class="col-auto">
									<h4 class="app-card-title">Transfer a Member</h4>
								</div><!--//col-->
							</div><!--//row-->
						</div><!--//app-card-header-->
						<div class="app-card-body px-4">

							<div class="intro">Send both Execitives and members to a new local church. Members who left should all be tranfered here</div>
						</div><!--//app-card-body-->

						<div class="app-card-footer p-4 mt-auto">
							<a class="btn app-btn-secondary" href="#">Transfer</a>
						</div><!--//app-card-footer-->
					</div><!--//app-card-->
				</div><!--//col-->


				<div class="col-12 col-lg-4">
					<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						<div class="app-card-header p-3 border-bottom-0">
							<div class="row align-items-center gx-3">
								<div class="col-auto">
									<div class="app-icon-holder">
					
										<!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
											<path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
										</svg> -->
										<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/>
  <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z"/>
</svg>
										<!-- <img src="./comp/images/user.png" alt="" srcset=""> -->
									</div><!--//icon-holder-->

								</div><!--//col-->
								<div class="col-auto">
									<h4 class="app-card-title">Back Up</h4>
								</div><!--//col-->
							</div><!--//row-->
						</div><!--//app-card-header-->
						<div class="app-card-body px-4">

							<div class="intro">Upload the current church database to cloud, This requires Authorizaton </div>
						</div><!--//app-card-body-->
						<div class="app-card-footer p-4 mt-auto">
							<a class="btn app-btn-secondary" href="#">Upload</a>
						</div><!--//app-card-footer-->
					</div><!--//app-card-->
				</div><!--//col-->

				<div class="col-12 col-lg-4">
					<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						<div class="app-card-header p-3 border-bottom-0">
							<div class="row align-items-center gx-3">
								<div class="col-auto">
									<div class="app-icon-holder">
										<!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
											<path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
										</svg> -->
										<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg>
									</div><!--//icon-holder-->

								</div><!--//col-->
								<div class="col-auto">
									<h4 class="app-card-title">Upload Report</h4>
								</div><!--//col-->
							</div><!--//row-->
						</div><!--//app-card-header-->
						<div class="app-card-body px-4">

							<div class="intro">Save Monthly reports and yearly report of any department to the church data.</div>
						</div><!--//app-card-body-->
						<div class="app-card-footer p-4 mt-auto">
							<a class="btn app-btn-secondary" href="uploadreport.php">Create New</a>
							</div><!--//app-card-footer-->
					</div><!--//app-card-->
				</div><!--//col-->


				<div class="row g-4 mb-4">

		



			</div><!--//row-->
			
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