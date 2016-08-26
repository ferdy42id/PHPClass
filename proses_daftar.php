		<!-- Bootstrap CSS -->
<html>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="custom.css">
</html>
<?php

	require_once('Database.php');
	require_once("User.php");
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$submit = $_POST['submit'];
	$konek = new Database();
	$user = new User();

	if($submit){
		$user->setEmail($email);
		$user->setUsername($username);
		$user->setPassword($password);
		if($user->insert()){
			echo "sukses<br>";
			echo "<a href=\"index.php\"><button type class=\"btn btn-danger\">back</button></a>";
		}
		else{
			echo "gagal<br>";
			echo "<a href=\"index.php\"><button type class=\"btn btn-danger\">back</button></a>";
		}
	}
?>