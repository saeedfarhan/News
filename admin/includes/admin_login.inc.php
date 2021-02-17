<?php
session_start();




if (isset($_POST['submit'])) {
	include 'dbh.inc.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($username) || empty($password)) {
	header("Location: ../index.php?empty");
	exit();		
	}else{
		$sql = "SELECT * FROM admin WHERE a_username = '$username'";
		if(mysqli_num_rows(mysqli_query($conn, $sql)) != 1){
			header("Location: ../index.php?notfound");
	        exit();
		
			}else{
				$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
			$hashedpwd = password_verify($password, $row['a_password']);
			if ($hashedpwd == False) {
				header("Location: ../index.php?passwordincorrect");
	        	exit();				
			}elseif($hashedpwd == True) {
				$_SESSION['id'] = $row['id'];
				$_SESSION['a_username'] = $row['a_username'];


				header("Location: ../manage_news.php?login=successfull");
	            exit();
			}
		}
	}



}else {
	header("Location: ../index.php");
	exit();
}