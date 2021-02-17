<?php


if(isset($_POST['post_comment'])){
	include '../admin/includes/dbh.inc.php';
	$comment_id = $_POST['post_comment'];

	$comment_from = mysqli_real_escape_string($conn, $_POST['comment_from']);
	$comment_body = mysqli_real_escape_string($conn, $_POST['comment_body']);
	

	$time = date("h:i:sa");
	$date = date("Y/m/d");
	
	
	if(empty($comment_from) || empty($comment_body)){
		header("Location: ../index.php?empty");
		exit();
	}else{
		if(!preg_match("/^[a-zA-Z0-9 ]*$/",$comment_from) || !preg_match("/^[a-zA-Z0-9 ]*$/",$comment_body)){
			header("Location: ../image-post.php?special_symbols_not_allowed");
			exit();
		}
				 $sql = "INSERT INTO comments (comment_id, comment_from, comment_body, comment_date, comment_time) VALUES (?,?,?,?,?);";
	             $stmt = mysqli_stmt_init($conn);
	             if(!mysqli_stmt_prepare($stmt, $sql)){
	             	 header("Location: ../index.php?sqlerror");
	              	 exit();
	             }else{
	             	 mysqli_stmt_bind_param($stmt, "sssss", $comment_id, $comment_from, $comment_body, $date, $time);
	             	 mysqli_stmt_execute($stmt);
				     header("Location: ../index.php?update=success");
	                 exit();

	             }
	}






}else{
	header("Location: ../index.php");
	exit();
}


