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
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
	
		<link rel="stylesheet" href="../css/main.css">
		<style>
			body{
				background-repeat: no-repeat;
			}
			#form{
				text-align: center;
				border: solid 1px;
				padding-top: 50px;
				padding-bottom: 50px;
				margin-top: 10%;
				margin-left: 25%;
				margin-right: 25%;
				border-radius: 20px;
				background-color: #ad93a3;
				background-image: url('vok2.jpg');

			}
			#form input{
				margin-bottom: 30px;
				padding-bottom: 10px;
				padding-top: 10px;
				border-radius: 7px;
				background-color: white;
				border: none;
			}
			#form p{
				background-color: green;
				padding-bottom: 10px;
				padding-top: 10px;
				color: white;
				font-size: 20px;
			}
			#form button{
				padding: 10px;
				padding-left: 30px;
				padding-right: 30px;
				border-radius: 7px;
				background-color: #0ac9b3;
				border: none;
				text-transform: uppercase !important;
			
			}
			#form button:hover {
  				background: white;
  				
}
			#form label{
				color: white;
				font-family: 'roboto';
				font-size: 20px;
				font-weight: bold;
			}

		</style>
	</head>
	<body>

	<div class="container" id="form">
		<p>Admin Login</p>
		<form action="includes/admin_login.inc.php" method="POST">
		<label>Username: </label>
		<input type="text" name="username"><br>
		<label>Password: </label>
		<input type="password" name="password"><br>
		<button type="submit" name="submit">Login</button>
	</form>
		
	</div>
	
		
		
	
	</body>
</html>