<?php 
	$dsn = 'mysql:host=108.167.132.214; dbname=gabr6451_database_social';
	$user = 'gabr6451_admin';
	$password = 'userDB@0';
 

	try{
		$pdo = new PDO($dsn, $user, $password);
	}catch(PDOException $e){
		echo 'connection error! ' . $e;
	}	
?>