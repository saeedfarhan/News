<?php
session_start();

//IF ANYONE ACCESSES THE PAGE WITHOUT SIGNING IN
if(!$_SESSION['id']){
	header("Location: index.php?please_provide_your_details_to_log_in");
exit();
}
include 'includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>The Voice Of Kashmir | Admin</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="../css/linearicons.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/magnific-popup.css">
		<link rel="stylesheet" href="../css/nice-select.css">
		<link rel="stylesheet" href="../css/animate.min.css">
		<link rel="stylesheet" href="../css/owl.carousel.css">
		<link rel="stylesheet" href="../css/jquery-ui.css">
		<link rel="stylesheet" href="../css/main.css">
	</head>
	<body>
		
		<header>
			
			<div class="header-top">
				<div class="container">
					<div class="row">
						
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="update_news.php">
								<img class="img-fluid" src="../logo.png" alt="">
							</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="update_news.php">Upload/Update News</a></li>
							<li class="menu-active"><a href="upload_video.php">Upload/Update Video</a></li>
							<li class="menu-active"><a href="manage_video.php">Manage Video</a></li>
							<li><a href="manage_news.php">Manage News</a></li>
					</ul>
					</nav><!-- #nav-menu-container -->
					
				</div>
			</div>
		</header>

			<div class="comment-form">
								<h4>Upload Videos</h4>
								<form action="includes/upload_video.inc.php" method="POST" enctype="multipart/form-data">
									<div class="form-group ">
										<div class="form-group col-lg-6 col-md-12 email">
											<input type="text" class="form-control" id="email" placeholder="Enter Video Title Here" name="title">
										</div>
										<div class="form-group col-lg-6 col-md-12 email">
											<input type="text" class="form-control" id="email" placeholder="Enter Video catagory Here" name="catagory">
										</div>
										<div class="form-group col-lg-6 col-md-12 email">
											<input type="file" class="form-control" name="video">
										</div>
										<div class="form-group col-lg-6 col-md-12 email">
											<input type="date" class="form-control" id="email" placeholder="Enter Date" name="date">
										</div>
										<div class="form-group">
											<textarea class="form-control mb-10" rows="5" placeholder="Enter Video Body Here" name="body"></textarea>
										</div>
											<button type="submit" class="primary-btn text-uppercase" name="upload_video">Upload</button>
									</div>
								</form>
							</div>


							<div class="comment-form">
								<h4>Update Current Videos</h4>
								<form action="includes/upload_video.inc.php" method="POST" enctype="multipart/form-data">
									<div class="form-group ">
										<div class="form-group col-lg-6 col-md-12 email">
											<input type="text" class="form-control" id="email" placeholder="Enter Video id Here" name="id" required>
										</div>
										<div class="form-group col-lg-6 col-md-12 email">
											<input type="text" class="form-control" id="email" placeholder="Updated Title" name="title">
										</div>
										<div class="form-group col-lg-6 col-md-12 email">
											<input type="text" class="form-control" id="email" placeholder="Updated Catagory" name="catagory">
										</div>
										<div class="form-group col-lg-6 col-md-12 email">
											<input type="file" class="form-control" name="image">
										</div>
										<div class="form-group">
											<textarea class="form-control mb-10" rows="5" placeholder="Updated  Video Body Here" name="body"></textarea>
										</div>
											<button type="submit" class="primary-btn text-uppercase" name="update_video">Update</button>
									</div>
								</form>
							</div>



		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
		<!--<script src="js/easing.min.js"></script>-->
		<!--<script src="js/hoverIntent.js"></script>-->
		<!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
		<!--<script src="js/mn-accordion.js"></script>-->
		<!--<script src="js/jquery-ui.js"></script>-->
		<!--<script src="js/jquery.nice-select.min.js"></script>-->
		<!--<script src="js/mail-script.js"></script>-->
		<script src="../js/vendor/jquery-2.2.4.min.js"></script>
		<script src="../js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="../js/superfish.min.js"></script>
		<script src="../js/jquery.magnific-popup.min.js"></script>
		<script src="../js/owl.carousel.min.js"></script>	
		<script src="../js/main.js"></script>



	</body>
	</html>