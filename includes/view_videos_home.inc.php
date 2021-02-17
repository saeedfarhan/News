<?php


 include '../admin/includes/dbh.inc.php';
 $videoNewCount = $_POST['videoNewCount'];
 $sqlVideo = "SELECT * FROM videos";
 $resultVideo = mysqli_query($conn, $sqlVideo);
 $resultCheckVideo = mysqli_num_rows($resultVideo);
 $newId = $resultCheckVideo-1;

	$sqlVideo = "SELECT * FROM videos WHERE id <= '$newId' ORDER BY id DESC LIMIT $videoNewCount";
	$resultVideo = mysqli_query($conn, $sqlVideo);
               if (mysqli_num_rows($resultVideo) > 0){    
                  while($rowVideo = mysqli_fetch_assoc($resultVideo)){

                  	$comment_idVideo = $rowVideo['comment_id'];
					$sqlComVideo = "SELECT * FROM comments WHERE comment_id = '$comment_idVideo'";
					$resultComVideo = mysqli_query($conn, $sqlComVideo);
					$resultComVideo = mysqli_num_rows($resultComVideo);

					echo '


									<div class="post-lists">
											
										<div class="single-post d-flex flex-row">
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