<?php 
require_once("Database.php");

	class User{
		public $id;
		public $email;
		public $username;
		public $password;
		public $konek;

		function User($konek){
			$konek=new Database();
		}
		
		function setId($id){
			$this->id = $id;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function setUsername($username){
			$this->username = $username;
		}

		function setPassword($password){
			$this->password = $password;
		}

		function getId(){
			return $this->id;
		}

		function getEmail(){
			return $this->email;
		}

		function getUsername(){
			return $this->username;
		}

		function getPassword(){
			return $this->password;
		}

		function showData(){
			echo $this->id;
			echo $this->email;
			echo $this->username;
			echo $this->password;
		}

		function insert(){
			$save = mysqli_query($this->konek, "INSERT INTO 'user' ('email', 'username', 'password') VALUES('$this->username','$this->password', '$this->email')");
		}
	}
?>