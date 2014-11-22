<?php
	
	$serverName = 'localhost:3306';
	$userName = 'root';
	$password = 'panduck27';
	$class = 'databasehandler';
	
	//set_include_path("./classes");
	//spl_autoload_register();
	
	spl_autoload_register(function($class){
		include "./classes/".$class.'.php';
	});
	
	//$instance = new Database();
	
	try{
	$conn = new PDO("mysql:host=$serverName;dbname=STUDENT", $userName, $password);
	echo 'success';
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	
?>
