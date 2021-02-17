<?php
include 'admin/includes/dbh.inc.php';

//FETHING NEWS POST FROM DATABASE
$sql = "SELECT * FROM news";
 $result = mysqli_query($conn, $sql);
 $resultCheck = mysqli_num_rows($result);

$sqlNew = "SELECT * FROM news WHERE id = '$resultCheck'";
 $resultNew = mysqli_query($conn, $sqlNew);
 $row = mysqli_fetch_assoc($resultNew);

$comment_id = $row['comment_id'];
$sqlCom = "SELECT * FROM comments WHERE comment_id = '$comment_id'";
$resultCom = mysqli_query($conn, $sqlCom);
$resultCom = mysqli_num_rows($resultCom);







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
		<title>The Voice Of Kashmir | Home</title>
		<style>
			.btn-wrap-text {
   			 white-space: normal !important;
   			 word-wrap: break-word !important;

}
		</style>
		<script
 		    src="https://code.jquery.com/jquery-3.3.1.min.js" 
  			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  			crossorigin="anonymous"></script>

  			 <script>
      $(document).ready(function() {
        var newsCount = 5;
        $("#btn").click(function() {
          newsCount = newsCount + 1;
          $("#row").load("includes/view_news_home.inc.php", {
            newsNewCount : newsCount

          });

        });

      });
    </script>

  			 <script>
      $(document).ready(function() {
        var videoCount = 1;
        $("#btn2").click(function() {
          videoCount = videoCount + 1;
          $("#rowRight").load("includes/view_videos_home.inc.php", {
            videoNewCount : videoCount

          });

        });

      });
    </script>
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
								<li><a href="https://www.facebook.com/Voiceofkashmir24x7/?__xts__[0]=68.ARD0XmMURBznEaqqNtV_Hsw7KhG0gY0qwKbCr0IGPkShpwK-9L78DkKjzvzTCOgZAimD6L1bhE0-uMdJRPt0HvuJ9UnNx_kCTglgWk7InY9P_qxmqXXsqfVbZbLmhHADVe7zw_6ClOuc3gyZZU-GSc6gFiqJ7VY7I2188w2WPebeYA0yfpUvH5HhTE_1k9w7f5BBoveuc6ZWVBmdEZMepJT0A_LJ1mWHLqXJWGfnRr_TiHiMRQcJN2FzADFRU_jlcgSPcJhfhZXaY7-478JG1JK-hoU05saU8ElS82KfazuXsQY3a7wnCPqGpeGJTrhfSpYYvP7JY6N1O6NdedBC7FpL7QC3dVUM"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+91 9906439121</span></a></li>
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
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
					</ul>
					</nav><!-- #nav-menu-container -->
					
				</div>
			</div>
		</header>
		
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">
						<div class="col-lg-8 top-post-left">
							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
								<?php
									echo '

								<img class="img-fluid" src="admin/images/'.$row['photo_id'].'" alt="">
							
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<li>'.$row['catagory'].'</a></li>
								</ul>
								<form action="image-post.php" method="POST">
								<button class="btn btn-link btn-wrap-text" name="viewNews" type="submit" value="'.$row['id'].'">
									<h3>'.$row['title'].'</h3>
								</button>
								</form>
								<ul class="meta">
									<li><span class="lnr lnr-bubble"></span>'.$resultCom.' Comments</a></li>
									<li><span class="lnr lnr-calendar-full"></span>'.$row['publishing_date'].'</a></li>
								</ul>
							</div>
						</div>
								
							'
								?>
						<div class="col-lg-4 top-post-right">
						<?php

							$res = $resultCheck-1;
									for($res; $res>=$resultCheck-2; $res--){
										$sqlRes = "SELECT * FROM news WHERE id = '$res'";
										$resultRes = mysqli_query($conn, $sqlRes);
 										$rowRes = mysqli_fetch_assoc($resultRes);

 										$comment_id2 = $rowRes['comment_id'];
										$sqlCom2 = "SELECT * FROM comments WHERE comment_id = '$comment_id2'";
										$resultCom2 = mysqli_query($conn, $sqlCom2);
										$resultCom2 = mysqli_num_rows($resultCom2);

						echo'
							<div class="single-top-post mb-10">
								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="admin/images/'.$rowRes['photo_id'].'" alt="">
								</div>
								<div class="top-post-details">
									<ul class="tags">
											<li>'.$rowRes['catagory'].'</a></li>
									</ul>
								<form action="image-post.php" method="POST">
									<button class="btn btn-link btn-wrap-text" type="submit" name="viewNews" value="'.$rowRes['id'].'">
											<h4>'.$rowRes['title'].'</h4>
									</button>
								</form>
									<ul class="meta">
										<li><span class="lnr lnr-bubble"></span> '.$resultCom2.' Comments</a></li>
										<li><span class="lnr lnr-calendar-full"></span>'.$rowRes['publishing_date'].'</a></li>
									</ul>
								</div>
							</div>
							
									';
								}
									?>
							
						</div>
						
						<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<h6><span>Breaking News:</span>    <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
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
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap" id="row">
								<h4 class="cat-title">News</h4>
								
								<?php
								$res2 = $resultCheck-3;

									  	$sqlres2 = "SELECT * FROM news WHERE id<='$res2' ORDER BY id DESC LIMIT 5";
                 						$resultRes2 = mysqli_query($conn, $sqlres2);
                  						if (mysqli_num_rows($resultRes2) > 0){    
                  							while($rowRes2 = mysqli_fetch_assoc($resultRes2)){

                  								$comment_id3 = $rowRes2['comment_id'];
												$sqlCom3 = "SELECT * FROM comments WHERE comment_id = '$comment_id3'";
												$resultCom3 = mysqli_query($conn, $sqlCom3);
												$resultCom3 = mysqli_num_rows($resultCom3);

                  									echo '


														<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="admin/images/'.$rowRes2['photo_id'].'" alt="">
										</div>
										<ul class="tags">
											<li>'.$rowRes2['catagory'].'</a></li>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
									<form action="image-post.php" method="POST">
										<button class="btn btn-link btn-wrap-text" type="submit" name="viewNews" value="'.$rowRes2['id'].'">
											<h4>'.$rowRes2['title'].'</h4>
										</button>
									</form>
										<ul class="meta">
											<li><span class="lnr lnr-calendar-full"></span>'.$rowRes2['publishing_date'].'</a></li>
											<li><span class="lnr lnr-bubble"></span>'.$resultCom3.' Comments</a></li>
										</ul>
									
									</div>
                        	
                      	    
								</div>

                  					';	}}?>


							</div>
								<button type="submit" id="btn" class="btn btn-warning">Load More</button>
							<!-- End latest-post Area -->
							
							<!-- Start banner-ads Area -->
							<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="img/banner-ad.jpg" alt="">
							</div>
							<!-- End banner-ads Area -->

						
						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget" >
									<h6 class="title">Trending Videos</h6>

									<?php

									//FETCHING VIDEO POST FROM DATABASE
										
										
										 $sqlVideo = "SELECT * FROM videos ORDER BY id DESC LIMIT 1";
										 $resultVideo = mysqli_query($conn, $sqlVideo);
										 $rowVideo = mysqli_fetch_assoc($resultVideo);

										 $comment_idVideo = $rowVideo['comment_id'];
										 $sqlComVideo = "SELECT * FROM comments WHERE comment_id = '$comment_idVideo'";
										 $resultComVideo = mysqli_query($conn, $sqlComVideo);
										 $resultComVideo = mysqli_num_rows($resultComVideo);

										 echo'
										 <div class="editors-pick-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="admin/images/5d37e87f2f2f19.51615089.jpg" alt="">
											</div>
											<ul class="tags">
												<li>'.$rowVideo['catagory'].'</a></li>
											</ul>
										</div>
										<div class="details">
										<form action="video-post.php" method="POST">
											<button class="btn btn-link btn-wrap-text" type="submit" name="viewVideo" value="'.$rowVideo['id'].'">
												<h4 class="mt-20">'.$rowVideo['title'].'.</h4>
											</button>
										</form>
											<ul class="meta">
												<li>><span class="lnr lnr-calendar-full"></span>'.$rowVideo['publishing_date'].'</a></li>
												<li><span class="lnr lnr-bubble"></span>'.$resultComVideo.' Comments </a></li>
											</ul>
										
										</div> ';

										 $sqlVideo = "SELECT * FROM videos";
										 $resultVideo = mysqli_query($conn, $sqlVideo);
										 $resultCheckVideo = mysqli_num_rows($resultVideo);
										 $newId = $resultCheckVideo-1;

										$sqlVideo = "SELECT * FROM videos WHERE id <= '$newId' ORDER BY id DESC LIMIT 1";
										$resultVideo = mysqli_query($conn, $sqlVideo);
                  						if (mysqli_num_rows($resultVideo) > 0){    
                  							while($rowVideo = mysqli_fetch_assoc($resultVideo)){

                  								$comment_idVideo = $rowVideo['comment_id'];
												$sqlComVideo = "SELECT * FROM comments WHERE comment_id = '$comment_idVideo'";
												$resultComVideo = mysqli_query($conn, $sqlComVideo);
												$resultComVideo = mysqli_num_rows($resultComVideo);

													echo '


										<div class="post-lists" id="rowRight">
											
											<div class="single-post d-flex flex-row" >
												<div class="thumb">
													<img src="img/e4.jpg" alt="">
												</div>
												<div class="detail">
												<form action="video-post.php" method="POST">
												<button class="btn btn-link btn-wrap-text" type="submit" name="viewVideo" value="'.$rowVideo['id'].'">
												<h6>'.$rowVideo['title'].'</h6>
												</button>
												</form>
													<ul class="meta">
														<li><span class="lnr lnr-calendar-full"></span>'.$rowVideo['publishing_date'].'</a></li>
														<li><span class="lnr lnr-bubble"></span>'.$resultComVideo.' Comments</a></li>
													</ul>
												</div>
											</div>
										</div>

													';}}?>

									<button type="submit" id="btn2" class="btn btn-warning">Load More</button>
									
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
								</div>
							
							
								<div class="single-sidebar-widget social-network-widget">
									<h6 class="title">Social Networks</h6>
									<ul class="social-list">
										<li class="d-flex justify-content-between align-items-center fb">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-facebook" aria-hidden="true"></i>
													<p>Like Our Page</p>
											</div>
											<a href="#">Like</a>
										</li>
										<li class="d-flex justify-content-between align-items-center tw">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-twitter" aria-hidden="true"></i>
													<p>Follow Us</p>
											</div>
											<a href="#">Follow</a>
										</li>
										<li class="d-flex justify-content-between align-items-center yt">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
													<p>Subscribe Our Channel</p>
											</div>
											<a href="#">Subscribe</a>
										</li>
									</ul>
								</div>
							</div>
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
					<p class="footer-text m-0 col-lg-8 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to The Voice Of Kashmir </p>
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
		<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>-->
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>