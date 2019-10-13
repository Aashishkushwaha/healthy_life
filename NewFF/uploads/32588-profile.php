<?php
	include 'database.php';
	
	$db = new database();
	
	$username = $_SESSION['username'];

	$sqlUserDetails = "select * from userdetails where email = '$username';";
	
	
	$row = $db->executeQuery($sqlUserDetails);
	
	if(!$row)
	{
		echo 'User does not exist, please login again';
		exit;
	}
?>

<html>
	<head><h1>Profile:</h1>
		<title> Profile </title>
	</head>
	<body>
		<h1><?php echo $row['firstname'].' '; echo $row['lastname'];?></h1><br><br><br><br><br>
		
		<table border= 10 cellspacing=4 cellpadding=4 bordercolordark="red" bordercolordark="blue" align="center">
		<tr><td>
		<th>ID</th></td>
		<th>First Name</th></td>
		<td><th>Last Name</th></td>
		<td><th>Email</th></td>
		<td><th>Contact</th></td>
		<td><th>Address</th></td>
		<td><th>Gender</th></td>
		<td><th>Password</th></td>
		<td><th>Security Question</th></td>
		<td><th>Securiity Answer</th>
		</td></tr>

		<font color = "blue">
		<tr><td>
		<th><?php echo $row['id']; ?></th></td>
		<th><?php echo $row['firstname']; ?></th></td>
		<td><th><?php echo $row['lastname']; ?></th></td>
		<td><th><?php echo $row['email']; ?></th></td>
		<td><th><?php echo $row['contact']; ?></th></td>
		<td><th><?php echo $row['address']; ?></th></td>
		<td><th><?php echo $row['gender']; ?></th></td>
		<td><th><?php echo $row['password']; ?></th></td>
		<td><th><?php echo $row['security_question']; ?></th></td>
		<td><th><?php echo $row['security_answer']; ?></th>
		</td></tr>
		</font>
		</table>
		
	</body>
</html>
