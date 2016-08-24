<?php

	require_once('Database.php');
	require_once("User.php");
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$submit = $_POST['submit'];
	$konek = new Database();

	if($submit){
		$user = new User($konek);
		$user->setEmail($email);
		$user->setUsername($username);
		$user->setPassword($password);
		if($user->insert()){
			echo "sukses";
			echo "<a href=\"index.php\"><button type class=\"btn btn-default\">back</button></a>";
		}
		else{
			echo "gagal";
			echo "<a href=\"index.php\"><button type class=\"btn btn-default\">back</button></a>";
		}
	}
?>