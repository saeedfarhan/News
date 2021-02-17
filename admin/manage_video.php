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
		<script
  src="https://code.jquery.com/jquery-3.3.1.min.js" 
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
		 <script>
      $(document).ready(function() {
        var videoCount = 2;
        $("#btn").click(function() {
          videoCount = videoCount + 1;
          $("#row").load("includes/view_video.inc.php", {
            videoNewCount : videoCount

          });

        });

      });
    </script>
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
					</ul>
					</nav><!-- #nav-menu-container -->
					
				</div>
			</div>
		</header>

		<!-- Add New Products -->
          <div class="card mb-3">
            <div class="card-header">
              <h4>Manage News</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    	<th>Id</th>
                      <th>Title</th>
                      <th>Catagory</th>
                      <th>Video Id</th>
                      <th>Publishing Date</th>
                      <th>Body</th>
                      <th>Comment_id</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody id="row">
                	 <?php
                  $sql = "SELECT * FROM videos LIMIT 2";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr>";
                        echo "<td>"; echo $row['id']; echo "</td>";
       					echo "<td>"; echo $row['title']; echo "</td>";
       					echo "<td>"; echo $row['catagory']; echo "</td>";
       					echo "<td>"; echo $row['video_id']; echo "</td>";
       					echo "<td>"; echo $row['publishing_date']; echo "</td>";
       					echo "<td>"; echo $row['body']; echo "</td>";
       					echo "<td>"; echo $row['comment_id']; echo "</td>";
                      if ($row['status'] == 1){
                      	 echo "
                      	 <td>
                      	  <form action='includes/manage_video.inc.php' method='POST'>
                        	<input type='hidden' name='id' value='"; echo $row['id']; echo"'>
                      	    <button type='submit' class='btn btn-warning' name='submit_status' value='0'>Disable</button>
                      	  </form>
                      	 </td>";
                      echo "</tr>";
                  }else{
                  	 echo "
                  	 <td>
                  	  <form action='includes/manage_video.inc.php' method='POST'>
                  	  <input type='hidden' name='id' value='"; echo $row['id']; echo"'>
                  	    <button type='submit' class='btn btn-warning' name='submit_status' value='1'>Enable</button>
                  	  </form>
                  	 </td>";
                      echo "</tr>";
                  }
                     
                    }
                  }

                  ?>
                        
                  </tbody>

                </table>
              </div>
            </div>
            <div class="card-footer"> 
              <button id="btn" type="submit" class="btn btn-dark">Load More Items</button>
            </div>
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