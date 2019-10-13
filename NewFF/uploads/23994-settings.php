<?php
	include "database.php";
	$db = new database();
	 $settingsUser = $_SESSION['username'];
	//echo "settingUser: $settingsUser <br><br>";
?>

<html>
	<head><h1>Settings</h1>
		<title>Settings</title></head>
	<body>
		<div align="right">
			<?php echo"<a href=\"adminProfile.php?username=".$settingsUser."\">Edit Profile</a>";?>
			<a href="adminPassword.html">Change Password</a>
		</div>
	</body>
</html>
