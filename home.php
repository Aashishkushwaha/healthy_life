<?php
	include 'database.php';
	
	$db = new database();
	
	$username = $_SESSION['username'];

	$sqlUserDetails = "select * from userdetails where email = '$username';";
	
	$row = $db->executeQuery($sqlUserDetails);

/*	if(!$row)
	{
		echo 'User does not exist, please login again';
		exit;
	}*/
	
	$query = "select * from userdetails";
	$result = $db->fetchResult($query);
?>

<html>
	<head>
		<title> Home Page </title>
	</head>
	<body>
		<div align="right"><a href="login.html">Logout</a>     <a href="settings.php"><img src="setting.png" height = 30 width =20"></img></a>
		</div><br><br>
		Hello <h1><?php echo $row['firstname'].' '; echo $row['lastname'];?></h1><br><br><br><br><br>
		
		
		<table border= 10 cellspacing=4 cellpadding=4 bordercolordark="red" bordercolordark="blue" align="center">
		<tr><th>ID</th></td>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th >Contact</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Password</th> 
		</tr>
		<?php
			while($row = pg_fetch_array($result))
			{
				echo"<tr><td align=\"center\">".$row['id']."</td>";
				echo"<td align=\"center\">".$row['firstname']."</td>";
				echo"<td align=\"center\">".$row['lastname']."</td>";
				echo"<td align=\"center\">".$row['email']."</td>";
				echo"<td align=\"center\">".$row['contact']."</td>";
				echo"<td align=\"center\">".$row['address']."</td>";
				echo"<td align=\"center\">".$row['gender']."</td>";
				echo"<td align=\"center\">*******</td>";
				echo"<td align=\"center\"><a href=\"edit.php?id=".$row['id']."\">Edit</a></td>";
				echo"<td align=\"center\"><a href=\"delete.php?id=".$row['id']."\">Delete</a></td></tr>";
			}
		?>
	</body>
</html>
