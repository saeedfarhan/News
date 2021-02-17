<?php

if(isset($_POST['upload_video'])){
	include 'dbh.inc.php';

	$title = $_POST['title'];
	$catagory = $_POST['catagory'];
	$date = $_POST['date'];
	$body = $_POST['body'];


	if(empty($title) || empty($catagory) || empty($date) || empty($body)){

 	header("Location: ../upload_video.php?empty_feilds");
      		exit();
 }else{

 	$comment_id = uniqid('', true);

 	$fileName = $_FILES['video'] ['name'];
 	$fileTmpName = $_FILES['video'] ['tmp_name'];

 	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

 	$fileNameNew = uniqid('', true).".".$fileActualExt;
 	$fileDestination = '../videos/'.$fileNameNew;
 	move_uploaded_file($fileTmpName, $fileDestination);



 	 $sql = "INSERT INTO videos (title, catagory, video_id, publishing_date, body, comment_id) VALUES (?,?,?,?,?,?);";
	 $stmt = mysqli_stmt_init($conn);
	 if(!mysqli_stmt_prepare($stmt, $sql)){
		   header("Location: ../upload_video.php?sqlerror");
	       exit();
	}else{
				   mysqli_stmt_bind_param($stmt, "ssssss", $title, $catagory, $fileNameNew, $date, $body, $comment_id);
				   mysqli_stmt_execute($stmt);
				   header("Location: ../upload_video.php?update=success");
	               exit();

			        }
			        	
			}	



 




}elseif(isset($_POST['update_video'])){
	include 'dbh.inc.php';

$id = $_POST['id'];
$title = $_POST['title'];
$catagory = $_POST['catagory'];
$body = $_POST['body'];

if(empty($id)){

 	header("Location: ../upload_video.php?Id_cannot_be_empty");
    exit();

}else{
		$file = $_FILES['image'];

	if(!empty($file)){
	$fileName = $_FILES['video'] ['name'];
 	$fileTmpName = $_FILES['video'] ['tmp_name'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$fileNameNew = uniqid('', true).".".$fileActualExt;
 	$fileDestination = '../videos/'.$fileNameNew;
 	move_uploaded_file($fileTmpName, $fileDestination);


	$sqlUpdate = "UPDATE videos SET video_id = '$fileNameNew' WHERE id='$id'";
    $stmt = $conn->prepare($sqlUpdate);
    $stmt->execute();
			
		
	
}


   	  if(!empty($title)){
   	  	$sqlUpdate = "UPDATE videos SET title = '$title' WHERE id='$id'";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->execute();
	  }
	  if(!empty($catagory)){
	  	$sqlUpdate = "UPDATE videos SET catagory = '$catagory' WHERE id='$id'";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->execute();
	  }
	  if(!empty($body)){
	  	$sqlUpdate = "UPDATE videos SET body = '$body' WHERE id='$id'";
        $stmt = $conn->prepare($sqlUpdate);
        $stmt->execute();
	  }

			header("Location: ../upload_video.php?update_success");
      		exit();
}


}else{

	header("Location: ../upload_video.php?invalid_access");
      		exit();
}