<?php
	
	include "database.php";	
	
	$title = $_POST['title'];
	if($title == "Mrs." || $title == "Miss")
	    $gender = "F";
	else
	    $gender = "M";
	//exit;
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$e_con = $_POST['e_con'];
	$address = $_POST['address'];
	//$gender = $_POST['gender'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$sQues = $_POST['sQues'];
	$sAns = $_POST['sAns'];
	if($password == $cpassword)
	{	
		$db = new database();
			  			//	$db->connect();

		$check = "select * from userdetails where email = '".$email."'";
		
		$already = $db->executeQuery($check);
		
		//var_dump($already);

		//echo $check;
		//exit;

		if($already)
		{
			?>
			<script>
				alert('User already exist : Please choose different email address');
				window.location.href = "registerForm.php";
			</script>
		<?php
		}
		else
		{

			$id = $db->getNextPrimaryId('userdetails');

			if(!$id)
			{
				$id = 1;
			}
			$sqlInsertUser = "insert into userdetails values ( $id , '$firstname','$lastname','$email', $contact, '$address', 				'$gender', '$password', '$sQues', '$sAns' , $e_con)";

			$result = $db->fetchResult($sqlInsertUser);

$message="Registration%20Successful%20!!%20Email%20id:-".$email."%20Password%20:-".$password."%20\nThanks%20for%20Registrating%20on%20Medilife%20Emergency%20Number=1099";
$url="http://smsalertbox.com/api/sms.php?uid=5370616365436f6d70&pin=5d0ec0b960811d7f2d9f560b4af0539a&sender=your_sender_id&route=0&mobile=". $contact."&message="."$message"."&pushid=1";
$data = file_get_contents($url);




$url="http://smsalertbox.com/api/sms.php?uid=5370616365436f6d70&pin=5d0ec0b960811d7f2d9f560b4af0539a&sender=your_sender_id&route=0&mobile=". $e_con."&message="."$message"."&pushid=1";
$data = file_get_contents($url);

//echo "Done";

			if($result)
			{
				//	echo "Inserted Successfully"; 
				?>
		    	<script>
            	    alert('Registered Successfully');
            	    window.location.href="login.php";
            	</script>
            	<?php
        	}
			else
			{
				//	echo "Error in Query";
				//	exit ;
		    	?>
		    	<script>
                	alert('Something Went Wrong : Please Register Again');
                	window.location.href="registerForm.php";
            	</script>
            	<?php
			}
		}
	}
	else
	{
		echo "Password & confirm password not matched";
    	    ?>
	    <script>
            alert('Password & Confirm Password are not matching');
            window.location.href="registerForm.php";
        </script>
        <?php
	}
?>

<!--
<?php
/*	
	include "database.php";	
	
	echo "title: ".$_POST['title'];
	exit;
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$sQues = $_POST['sQues'];
	$sAns = $_POST['sAns'];
	if($password == $cpassword)
	{	
		$db = new database();
			  			//	$db->connect();

		$id = $db->getNextPrimaryId('userdetails');

			if(!$id)
			{
				$id = 1;
			}
		$sqlInsertUser = "insert into userdetails values ( $id , '$firstname','$lastname','$email', 			$contact, '$address', '$gender', '$password', '$sQues', '$sAns')";

		$result = $db->fetchResult($sqlInsertUser);

		if($result)
			echo "Inserted Successfully"; 
		else
		{
			echo "Error in Query";
			exit ;
		}
	}
	else
		echo "Password & confirm password not matched";
*/
?>
-->
<!--
<?php

/*
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$sQues = $_POST['sQues'];
	$sAns = $_POST['sAns'];
	
	if($password == $cpassword)
	{	
//		"select (max(id)+1) as nextId drom userdetails)";
		$connection = pg_connect("host = localhost dbname=aashish user=aashish");
		if($connection)
		{
		
			$sqlNextPrimaryKey = "select (count(id)+1) as nextId from userdetails;";
			$primaryResult = pg_query($connection,$sqlNextPrimaryKey);

										//	echo "$sqlNextPrimaryKey<br>";
			$row = pg_fetch_array($primaryResult);
										//	print_r($row);
			$id = $row['nextid'];
										//	echo "$id<br>";
			$sqlInsertUser = "insert into userdetails values ( $id , '$firstname','$lastname','$email', 			$contact, '$address', '$gender', '$password', '$sQues', '$sAns')";
			
										//	echo "$sqlInsertUser";// exit;
			
			$result = pg_query($connection,$sqlInsertUser);
			if($result)
				echo "Inserted Successfully"; 
			else
			{
				echo "Error in Query";
				exit ;
			}
		}
		else
			echo "error in connection";
	}
	else
		echo "Password & confirm password not matched";
*/
?>
-->



<!--

<?php

/*
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$sQues = $_POST['sQues'];
	$sAns = $_POST['sAns'];
	
	if($password == $cpassword)
	{	
//		"select (max(id)+1) as nextId drom userdetails)";
		$connection = pg_connect("host = localhost dbname=aashish user=aashish");
		if($connection)
		{
		
			$sqlNextPrimaryKey = "select (max(id)+1) as nextId from userdetails;";
			$primaryResult = pg_query($connection,$sqlNextPrimaryKey);

			echo "$sqlNextPrimaryKey<br>";
			$row = pg_fetch_array($primaryResult);
									// print_r($row);
			$id = $row['nextid'];
									// echo "$id<br>";
			if(!$id)
			{
				$id = 1;
			}

			$sqlInsertUser = "insert into userdetails values ( $id , '$firstname','$lastname','$email', 			$contact, '$address', '$gender', '$password', '$sQues', '$sAns')";
			
									//		echo "$sqlInsertUser";// exit;
			
			$result = pg_query($connection,$sqlInsertUser);
			if($result)
				echo "Inserted Successfully"; 
			else
			{
				echo "Error in Query";
				exit ;
			}
		}
		else
			echo "error in connection";
	}
	else
		echo "Password & confirm password not matched";
*/

?>

-->

<!--

//	echo "firstname: ".$firstname."<br>";
//	echo "lastname: ".$lastname."<br>";
//	echo "email: ".$email."<br>";
//	echo "contact: ".$contact."<br>";
//	echo "address: ".$address."<br>";
//	echo "gender: ".$gender."<br>";
//	echo "password: ".$password."<br>";
//	echo "cpassword: ".$cpassword."<br>";
//	echo "sQues: ".$sQues."<br>";
//	echo "sAns: ".$sAns."<br>";

-->
