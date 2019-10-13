<?php
	include "database.php";
	echo "Admin Password<br>";

	$old = $_POST['old'];
	$new = $_POST['new'];
	
	$db = new database();
	echo "old: $old<br>";
	echo "new: $new<br>";
	
	$query = "select * from userdetails where password = '$old';";
	echo "$query<br><br>";
	
	$result = $db -> executeQuery($query);
	
	if($result['password'] == $old)
	{		
		echo" Exists<br>";
		
		$updateAdmin = "update userdetails set password='$new' where password = '$old'; ";
		echo "$updateAdmin<br><br>";
		$result = $db->executeQuery($updateAdmin);
		
		var_dump($result);
	}
		var_dump($result);
	exit;
?>
