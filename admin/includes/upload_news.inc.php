<?php
// UPLOAD NEWS HERE
if (isset($_POST['upload_news'])) {
	include 'dbh.inc.php';

$title = $_POST['title'];
$catagory = $_POST['catagory'];
$date = $_POST['date'];
$body = $_POST['body'];

 if(empty($title) || empty($catagory) || empty($date) || empty($body)){

 	header("Location: ../update_news.php?empty");
      		exit();
 }else{

 		$comment_id = uniqid('', true);

 	$file = $_FILES['image'];
	$fileName =  $_FILES['image']['name'];
	$fileTmpName =  $_FILES['image']['tmp_name'];
	$fileSize =  $_FILES['image']['size'];
	$fileError =  $_FILES['image']['error'];
	$fileType =  $_FILES['image']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpeg', 'jpg', 'png');

		if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = '../images/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);

	             $sql = "INSERT INTO news (title, body, catagory, photo_id, publishing_date, comment_id) VALUES (?,?,?,?,?,?);";
	             $stmt = mysqli_stmt_init($conn);
			     if(!mysqli_stmt_prepare($stmt, $sql)){
				   header("Location: ../update_news.php?sqlerror");
	               exit();
			     }else{
				   mysqli_stmt_bind_param($stmt, "ssssss", $title, $body, $catagory, $fileNameNew, $date, $comment_id);
				   mysqli_stmt_execute($stmt);
				   header("Location: ../update_news.php?update=success");
	               exit();

			        }
				header("Location: ../update_news.php?success");
				exit();
			}else {
		      header("Location: ../update_news.php?image is too big");	
		      exit();
		    }
		}else {
		 header("Location: ../update_news.php?image error");	
		 exit();
		}
	 }else {
		header("Location: ../update_news.php?image_format_is_not_allowed");
		exit();
	 }
 }


// UPDATE NEWS HERE
}elseif(isset($_POST['update_news'])){
	include 'dbh.inc.php';

$id = $_POST['id'];
$title = $_POST['title'];
$catagory = $_POST['catagory'];
$body = $_POST['body'];

if(empty($id)){

 	header("Location: ../update_news.php?Id_cannot_be_empty");
    exit();

}else{
		$file = $_FILES['image'];

	if(!empty($file)){
	$fileName =  $_FILES['image']['name'];
	$fileTmpName =  $_FILES['image']['tmp_name'];
	$fileSize =  $_FILES['image']['size'];
	$fileError =  $_FILES['image']['error'];
	$fileType =  $_FILES['image']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpeg', 'jpg', 'png');

		if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 100000) {
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = '../images/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);


					$sqlUpdate = "UPDATE news SET photo_id = '$fileNameNew' WHERE id='$id'";
        			$stmt = $conn->prepare($sqlUpdate);
      			    $stmt->execute();
			}
		}
	}
}


   	  if(!empty($title)){
   	  	$sqlUpdate = "UPDATE news SET title = '$title' WHERE id='$id'";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->execute();
	  }
	  if(!empty($catagory)){
	  	$sqlUpdate = "UPDATE news SET catagory = '$catagory' WHERE id='$id'";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->execute();
	  }
	  if(!empty($body)){
	  	$sqlUpdate = "UPDATE news SET body = '$body' WHERE id='$id'";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->execute();
	  }

			header("Location: ../update_news.php?update_success");
      		exit();
}




}else{
	header("Location: ../update_news.php?invalid_entry");
      		exit();
}