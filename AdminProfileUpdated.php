<?php
	include "database.php";
	$db = new database();
	$user = $_SESSION['username'];
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	
	//echo "AdminProfileUpdated<br><br> $user";
	
	$adminUpdateQuery = "update userdetails set firstname = '$firstname' , lastname = '$lastname' , email = '$email',contact = $contact, address = '$address' where email = '$user';";
	
	$result = $db->executeQuery($adminUpdateQuery);
	?>
	<script>
		alert('Profile updated successfully');
		window.location.href="adminHome.php";
	</script>
	<?php
	//header('location: adminHome.php ');
	
	// echo $adminUpdateQuery;

	// var_dump($result);
?>
