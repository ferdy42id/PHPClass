<?php
	require_once("User.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	 	<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>login</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="custom.css">
	</head>
	<body>
		<center>
		<h1 class="text-xs-center">Register</h1>
		</center>
		<div class="form-login">
			<form action="proses_daftar.php" method="POST">
				<div class="form-group">
				<label>Email</label>
				<input class="form-control" type="text" name="email">
				</div>

				<div class="form-group">
				<label>Username</label>
				<input class="form-control" type="text" name="username" required>
				</div>

				<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" name="password" required>
				</div>
				<input type="submit" name="submit" class="btn btn-lg btn-danger pull-right" value="Register">
			</form>
		</div>
	</body>
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="js/bootstrap.js"></script>
</html>