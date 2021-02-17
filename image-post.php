<?php

if(isset($_POST['viewNews'])){
	include 'admin/includes/dbh.inc.php';
	// FETCH NEWS FROM DB
	$id = $_POST['viewNews'];
	$sql = "SELECT * FROM news WHERE id = '$id'";
	 $result = mysqli_query($conn, $sql);
	 $row = mysqli_fetch_assoc($result);

	 $comment_id = $row['comment_id'];
	$sqlCom = "SELECT * FROM comments WHERE comment_id = '$comment_id'";
	$resultCom = mysqli_query($conn, $sqlCom);
	$resultComRow = mysqli_fetch_assoc($resultCom);
	$resultCom = mysqli_num_rows($resultCom);

	
}else{
	include 'admin/includes/dbh.inc.php';
	// FETCH NEWS FROM DB

	$sql = "SELECT * FROM news";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	$id = $resultCheck;

	$sqlNew = "SELECT * FROM news WHERE id = '$id'";
	$resultNew = mysqli_query($conn, $sqlNew);
	$row = mysqli_fetch_assoc($resultNew); 

	// FETCH COMMENTS FROM DB
	$comment_id = $row['comment_id'];
	$sqlCom = "SELECT * FROM comments WHERE comment_id = '$comment_id'";
	$resultCom = mysqli_query($conn, $sqlCom);
	$resultComRow = mysqli_fetch_assoc($resultCom);
	$resultCom = mysqli_num_rows($resultCom);





}?>




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
		<title>Magazine</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<header>
			
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+97 9906439121</span></a></li>
								<li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>saeedfarhan129@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="index.php">
								<img class="img-fluid" src="logo2.jpeg" alt="">
							</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<img class="img-fluid" src="img/banner-ad.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
					</ul>
					</nav><!-- #nav-menu-container -->
					
				</div>
			</div>
		</header>
		
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="feature-img-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="admin/images/<?php echo $row['photo_id'] ?>" alt="">
								</div>
								<div class="content-wrap">
									<ul class="tags mt-10">
										<li><a href="#"><?php echo $row['catagory']?></a></li>
									</ul>
									<a href="#">
										<h3><?php echo $row['title']?>.</h3>
									</a>
									<ul class="meta pb-20">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $row['publishing_date']?></a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span><?php echo $resultCom ?> Comments</a></li>
									</ul>
									
								
								<blockquote><?php echo $row['body']?>.</blockquote>
							</div>
								
									<?php
										$fetchCom = "SELECT * FROM comments WHERE comment_id = '$comment_id' ORDER BY id DESC";
										$queryCom = mysqli_query($conn, $fetchCom);
										echo '<h6>'.$resultCom.' Comments</h6>';
										if(mysqli_num_rows($queryCom) > 0){
											while($resultComRow = mysqli_fetch_assoc($queryCom)){

												echo '
								<div class="content-wrap">
								<div class="comment-sec-area">
									<div class="container">
										<div class="row flex-column">
											
											<div class="comment-list">
												<div class="single-comment justify-content-between d-flex">
													<div class="user justify-content-between d-flex">
														<div class="thumb">
															<img src="img/blog/c1.jpg" alt="">
														</div>
														<div class="desc">
															<h5>'.$resultComRow['comment_from'].'</a></h5>
											<p class="date">'.$resultComRow['comment_date'].'  at '. $resultComRow['comment_time'].' </p>
															<p class="comment">
																'.$resultComRow['comment_body'].'
															</p>
														</div>
													</div>
													
												</div>
											</div>
											
										
										</div>
									</div>
								</div>
							</div>
		
												';}}?>





								
							<div class="comment-form">
								<h4>Post Comment</h4>
								<form action="includes/post_comment.inc.php" method="POST">
									<div class="form-group form-inline">
										<div class="form-group col-lg-6 col-md-12 name">
										<input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" name="comment_from" required="">
										</div>
										
									</div>
									
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" placeholder="Comment" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" name="comment_body" required=""></textarea>
									</div>
									<button type="submit" name="post_comment" class="primary-btn text-uppercase" value="<?php echo $comment_id ?>">Post Comment</button>
								</form>

							</div>
						</div>
						<!-- End single-post Area -->
					</div>
		
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>
	
	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
		<!--<script src="js/easing.min.js"></script>-->
		<!--<script src="js/hoverIntent.js"></script>-->
		<!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
		<!--<script src="js/mn-accordion.js"></script>-->
		<!--<script src="js/jquery-ui.js"></script>-->
		<!--<script src="js/jquery.nice-select.min.js"></script>-->
		<!--<script src="js/mail-script.js"></script>-->
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
</body>
</html>