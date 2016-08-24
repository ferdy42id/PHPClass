<?php

	class Database{
		
		function __construct(){

			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$db = 'projectprakrin';
			$konek = mysqli_connect($host, $user, $pass, $db) or die ('Tidak terkoneksi');
			
			return $konek;
		}
	}
?>