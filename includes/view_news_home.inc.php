<?php

 include '../admin/includes/dbh.inc.php';
 $newsNewCount = $_POST['newsNewCount'];
 $sql = "SELECT * FROM news";
 $result = mysqli_query($conn, $sql);
 $resultCheck = mysqli_num_rows($result);
 $res2 = $resultCheck-3;

			  	$sqlres2 = "SELECT * FROM news WHERE id<='$res2' ORDER BY id DESC LIMIT $newsNewCount";
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
										<button class="btn btn-link btn-wrap-text" name="viewNews" type="submit" value="'.$rowRes2['id'].'">
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