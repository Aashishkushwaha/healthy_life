<?php

	include "database.php";
	
	echo $_GET['id'];
	
	$id = $_GET['id'];
	
	$db = new database();
	
	$deleteQuery = "delete from userdetails where id = $id";
	
	$result = $db->fetchResult($deleteQuery);
		
	header('location:home.php');
?>
