<?php
	include "database.php";
//	echo "Admin Password<br>";

	$old = $_POST['old'];
	$new = $_POST['newPassword'];
	
	$db = new database();
	$user = $_SESSION['username'];
	
	//echo "user: $user<br>";
	//echo "new: $new<br>";
	$query = "select * from userdetails where password = '$old';";
//	echo "$query<br><br>";
	
	$result = $db -> executeQuery($query);
	
	if($result['password'] == $old)
	{		
	//	echo" Exists<br>";
		
		$updateAdmin = "update userdetails set password='$new' where password = '$old' and email='$user'; ";
	//	echo "$updateAdmin<br><br>";
		$result = $db->executeQuery($updateAdmin);
		
	//	var_dump($result);
		?>
		<script>
		  alert('Password is updated successfully');
	      window.location.href="adminHome.php";
		</script>
		<?php
//		header('location: adminHome.php');
	}
	else
		{
		//var_dump($result);
		?>
		<script>
		  alert('Old Password is wrong');
	      window.location.href="adminPasswordForm.php";
		</script>
		<?php
//		header('location: adminPassword.html');
	}
	exit;
?>
