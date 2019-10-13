<?php
	include 'database.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$db = new database();
	
	$strSqlUser = "select * from userdetails where email = '$username' and password = '$password';";

	$row = $db->executeQuery($strSqlUser);

	//	var_dump($row);	

	if($row['password'] == $password)
	{
		if($row['id'] != 10)
		{
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['email'];
			header('location:userHome.php');
		}
		else
		if($row['id']==10)
		{
			$_SESSION['username'] = $row['email'];
			header('location:adminHome.php');
		}
	}
	else
	{
	  ?>
  		<script>
  			alert('Incorrect Username or Password');
	    	window.location.href='login.php';
	    </script>
  <?php
		//echo 'Incorrect Username or Password';
	}
?>



	<?php
/*
	include 'database.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$db = new database();
	
	$strSqlUser = "select * from userdetails where email = '$username' and password = '$password';";
	
							//echo "$strSqlUser<br>";
	
	$row = $db->executeQuery($strSqlUser);

								//	echo "row: $row<br>";
	
	if($row)
	{
								// session_start();
		$_SESSION['username'] = $row['email'];
		header('location:home.php');
	}
	else
	{
		echo 'Incorrect Username or Password';
	}
*/									//echo "in authenticate:<br>";
?>
