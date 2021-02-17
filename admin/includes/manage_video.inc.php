<?php

if(isset($_POST['submit_status'])){
	 include 'dbh.inc.php';

	 $change_status = $_POST['submit_status'];
	 $id = $_POST['id'];

	  $sqlSelectVideo = "SELECT * FROM videos WHERE id = $id";
	  $videoResult = mysqli_query($conn, $sqlSelectVideo);
   	  $row = mysqli_fetch_assoc($videoResult);

	 if($change_status == 1){
	 	$sqlUpdate = "UPDATE videos SET status = 1 WHERE id='$id'";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->execute();

 			header("Location: ../manage_video.php?success");
      		exit();
	 }elseif($change_status == 0){
	 	$sqlUpdate = "UPDATE videos SET status = 0 WHERE id='$id'";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->execute();

        	header("Location: ../manage_video.php?success");
      		exit();
	 }
}