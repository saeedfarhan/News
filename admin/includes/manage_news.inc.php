<?php

if(isset($_POST['submit_status'])){
	 include 'dbh.inc.php';

	 $change_status = $_POST['submit_status'];
	 $id = $_POST['id'];

	  $sqlSelectNews = "SELECT * FROM news WHERE id = $id";
	  $newsResult = mysqli_query($conn, $sqlSelectNews);
   	  $row = mysqli_fetch_assoc($newsResult);

	 if($change_status == 1){
	 	$sqlUpdate = "UPDATE news SET Status = 1 WHERE id='$id'";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->execute();

 			header("Location: ../manage_news.php?success");
      		exit();
	 }elseif($change_status == 0){
	 	$sqlUpdate = "UPDATE news SET Status = 0 WHERE id='$id'";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->execute();

        	header("Location: ../manage_news.php?success");
      		exit();
	 }
}