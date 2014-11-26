<?php
	include '/classes/itemEntity.php';
	include 'classes/databaseManager.php';
	$item = new Item();
	$item->set_name('Jordan');
	echo 'Full Name is: '.$item->getName();
	
	$database = new Database();
	$database->student(1);
?>