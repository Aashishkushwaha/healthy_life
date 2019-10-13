<?php
include "database.php";

$db = new database();

$id = $_SESSION['id'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$password = $_GET['password'] ;
$contact = $_GET['contact']; 
$address = $_GET['address'] ;
$secQ = $_GET['sQues'];
$secA = $_GET['sAns'];

//echo 'que'.$secQ;
//echo "<br>".$secA;

	$updateQuery = "update userdetails set firstname = '$firstname' , lastname = '$lastname' , email = '$email' , password = '$password' ,
		contact = $contact , address = '$address' , security_question = '$secQ' , security_answer = '$secA' 
		where id = $id";

//	echo "$updateQuery<br>";	

	$result = $db->fetchResult($updateQuery);
	
	if($result)
	{
	    ?>
	    <script>
              alert('Profile successfully updated');
              window.location.href="userHome.php";
        </script>
      <?php
 }

	//header('location:userHome.php');
//	exit;
?>


<?php 
/*
<?php
include "database.php";

$db = new database();

$id = $_SESSION['id'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$password = $_SESSION['password'] ;
$contact = $_GET['contact']; 
$address = $_SESSION['address'] ;
$gender = $_SESSION['gender'] ;
$secQ = $_SESSION['security_question'];
$secA = $_SESSION['security_answer'];

echo "id: $id";

echo $password."\n";
echo $contact."\n";
echo $address."\n";
echo $gender;
echo $secQ;
echo $secA;


	$updateQuery = "update userdetails set firstname = '$firstname' , lastname = '$lastname' , email = '$email' , password = '$password' 
		contact = $contact , address = '$address' , gender = '$gender' , security_question = '$secQ' , security_answer = '$secA' 
		where id = $id;";

	echo "$updateQuery";	
	
?>

*/


?>
