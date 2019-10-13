<?php

//	echo "Admin Profile<br>";
	$user = $_GET['username'];
	
//	echo"user: $user<br><br>";
?>

<html>
	<head><h1>Edit Profile</h1><br><br>
		<title>Edit Profile</title>
	</head>
	<body>
		<form action="AdminProfileUpdated.php" method="POST">
			First Name: <input type="text" name="firstname"><br><br>
			Last Name: <input type="text" name="lastname"><br><br>
			Email: <input type="email" name="email"><br><br>
			New-Password: <input type="password" name="password"><br><br>
			Contact: <input type="number" name="contact" min="7777777" max="9999999999"><br><br>
			Address: <textarea name="address"></textarea><br><br>
			Gender: <input type="radio" name="gender" value="M">Male
						   <input type="radio" name="gender" value="F">Female<br><br>
			<input type="submit" value="Update"><br><br>
		</form>
	</body>
</html>
