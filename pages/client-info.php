<!--
	Application: CMK Marketing Customer Management System
	Module: Client Information Page

	Developers: Tusa Larkowski, Adeel Minhas, Ruowen Qin
	Brief Description: Shows the details of the client being examined - including their subscriptions and projects.
-->

<!DOCTYPE html>
<html>

<!-- Header Info -->
<head>
	<meta charset="UTF-8">
	<title>Client Management Homepage</title>

	<!-- Personal CSS -->
	<link rel="stylesheet" href="/css/main.css">

	<!-- General CDN Additions -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<!-- Bootstrap CDN Additions -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>


<!-- Page Content -->
<body>
	<?php include '../include/navbar.html';?>

	<!-- Client Content -->
	<div class="container">
		<div class="row">
			<!-- Left Column -->
			<div id="left-column" class="col-md-5 my-4">
				<div class="card mb-4">
					<div class="card-body">
						<h4 class="card-title" style="margin-bottom:0;">{Name of Company}</h4>
					</div>

					<img class="card-img-top" src="/img/no-image.jpg" alt="Company Image" width="100%" height="auto">

					<div class="card-body">
						<h4 class="card-title">Description</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
					</div>
				</div>

				<button type="button" class="btn btn-primary btn-lg btn-block blue-button">Edit Client Information</button>

				<button type="button" class="btn btn-primary btn-lg btn-block red-button">Archive Client Information</button>
			</div>

			<!-- Right Column -->
			<div id="right-column" class="col-md-7 my-4">

				<!-- Main Contact Info -->
				<div class="sidebar">
					<h4 class="sidebar-header">Main Contact Info</h4>

					<div class="sidebar-content">
						<ul id="client-info" class="list-group">
							<li class="client-name list-group-item">
								<img src="../img/icons/person.png" alt="Person Icon" width="24" height="24">
								<span class="name">Elizabeth Jones</span>
							</li>
							<li class="client-phone list-group-item">
								<img src="../img/icons/phone.png" alt="Phone Icon" width="24" height="24">
								<span class="phone">(555) 555-5555</span>
							</li>
							<li class="client-email list-group-item">
								<img src="../img/icons/mail.png" alt="Mail Icon" width="24" height="24">
								<span class="email">elizabeth.jones@email.com</span>
							</li>
						</ul>
					</div>
				</div>

				<!-- Subscriptions -->
				<div id="subscriptions" class="sidebar">
					<button type="button" class="btn btn-primary add-subscription rounded-circle blue-button"><strong>&#43;</strong></button>
					<h4 class="sidebar-header">Subscriptions</h4>

					<div class="sidebar-content list-group">
						<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Name of Website</h5>
							</div>
							<p class="mb-1 text-muted">www.website-domain-name.com</p>
							<small class="due-date"><strong>Deadline: Mar. 15, 2018</strong></small></span>
						</a>
					</div>
				</div>

				<!-- Projects -->
				<div id="projects" class="sidebar">
					<button type="button" class="btn btn-primary add-project rounded-circle blue-button"><strong>&#43;</strong></button>
					<h4 class="sidebar-header">Projects</h4>

					<div class="sidebar-content list-group">
						<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Name of Project</h5>
							</div>
							<p class="mb-1 text-muted">https://basecamp.com/####/projects/####/</p>
							<small class="due-date"><strong>Deadline: Mar. 10, 2018</strong></small></span>
						</a>
						<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Name of Project</h5>
							</div>
							<p class="mb-1 text-muted">https://basecamp.com/####/projects/####/</p>
							<small class="due-date"><strong>Deadline: Mar. 15, 2018</strong></small></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Client Content -->
</body>

</html>