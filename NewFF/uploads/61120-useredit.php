<?php

	include "database.php";
	
	$id = $_GET['id'];
	
	$editQuery = "select * from userdetails where id = $id";
	
	$db = new database();
	
	
	$result = $db->executeQuery($editQuery);

	$_SESSION['id'] = $id;
	$_SESSION['password'] = $result['password'];
	$_SESSION['address'] = $result['address'];
	$_SESSION['gender'] = $result['gender'];
	$_SESSION['security_question'] = $result['security_question'];
	$_SESSION['security_answer'] = $result['security_answer'];

/*echo $result['firstname'];
echo $result['lastname'];
echo $result['email'];
echo $result['password'];
echo $result['contact'];
echo $result['address'];
echo $result['gender'];
echo $result['security_question'];
echo $result['security_answer'];	*/
	
	?>
	
	</html>
	<head><h1> Update Your Profile <br><br></h1>
		<title> Update Profile </title>
	</head>
	<body>
		<form name="edit" action="update.php" method="GET" onsubmit="return validate();">
			First Name: <input type="text" id="firstname" name="firstname" value="<?php echo $result['firstname'] ?>" autofocus="true"><br><br>
			Last Name: <input type="text" name="lastname" value="<?php echo $result['lastname'] ?>"><br><br>
			Email: <input type="email" name="email" value="<?php echo $result['email'] ?>"><br><br>
			Enter New-Password: <input type="password" name="password" placeholder="<?php echo '********'; ?>"><br><br>
			Contact: <input type="number" min="1111111" max="9999999999" name="contact" 
								value="<?php echo $result['contact'] ?>"><br><br>
			Address: <textarea name="address" ></textarea><br><br>
			Gender: <input type="radio" name="gender" value="M">Male
				<input type="radio" name="gender" value="F">Female<br><br>
			Secuirity Question:
			<select name="sQues" >
			<option>What is Your Nick Name ?</option>
			<option>What is Your Lucky Number ?</option>
			<option>What is Your Lucky Colour ?</option>
			<option>Who is Your Favourite Sports Person ?</option>
			<option>Who is Your Role Model ?</option>
			<option>Which is Your Favourite Destination Place ?</option>
			<option>Which is Your Birth Place ?</option>
			</select><br><br>
			Security Answer: <input type="text" name="sAns"  value="<?php echo $result['security_answer'] ?>"><br><br>
			<input type="submit" value="Updade" name="">
		</form>
	</body>
	<script>
		function validate()
		{
			var firstname=document.getElementById('firstname');
			var lastname=document.edit.lastname;
			var email=document.edit.email;
			var password=document.edit.password;
			var contact=document.edit.contact;
			var address=document.edit.address;
			var gender=document.edit.gender;
			var sQues=document.edit.sQues.value;
			var sAns=document.edit.sAns;
			//echo "inside validate<br><br>";
			if(firstname.value == '')
			{
				alert('Please enter first name ');
				firstname.focus();
				return false;
			}
			else
			if(!(/^[a-zA-Z ]+$/.test(firstname.value)))
			{
				alert('Please characters only');
				firstname.focus();
				return false;
			}
			else
			if(firstname.value.length > 30)
			{
				alert('Max 30 characters only');
				firstname.focus();
				return false;
			}
			else if(lastname.value == '' )
			{
				alert('Please enter last name ');
				lastname.focus();
				return false;
			}	
			else
			if(!(/^[a-zA-Z]+$/.test(lastname.value)))
			{
				alert('Please characters only');
				lastname.focus();
				return false;
			}
			else
			if(lastname.value.length > 30)
			{
				alert('Max 30 characters only');
				lastname.focus();
				return false;
			}
			else if(email.value == '')
			{
				alert('Please enter email ');
				email.focus();
				return false;
			}
			else
			if(!(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(email.value)))
			{
				alert('please enter valid email address');
				email.focus();
				return false;
			}
			else if(password.value == '')
			{
				alert('Please enter password ');
				password.focus();
				return false;
			}
			else
			if(password.value.length < 8)
			{
				alert('Password should be of minimum 8 length');
				password.focus();
				return false;
			}
			else 
			if(contact.value == '')
			{
				alert('Please enter contact ');
				contact.focus();
				return false;
			}	
			else
			if(address.value == '')
			{
				alert('Please enter address ');
				address.focus();
				return false;
			}
			else 
			if(gender.value == '')
			{
				alert('Please select gender ');
				gender.focus();
				return false;
			}
			else if(sAns.value == '')
			{
				alert('Please enter security answer ');
				sAns.focus();
				return false;
			}
			return true;
		}
	</script>
	</html>
	
	
	
	<?php
/*
	include "database.php";
	
	
	$id = $_GET['id'];
	
	$editQuery = "select * from userdetails where id = $id";
	
	$db = new database();
	
	$result = $db->executeQuery($editQuery);
	
	if(!$row)
	{
		echo "nothing";
		exit;
	}
	*/
	
	?>
	<!--
	</html>
	<head><h1> Update Your Profile <br><br></h1>
		<title> Update Profile </title>
	</head>
	<body>
		<form action="update.php" method="GET">
			First Name: <input type="text" name="firstname" value="<?php echo $result['firstname'] ?>" autofocus="true"><br><br>
			Last Name: <input type="text" name="lastname" value="<?php echo $result['lastname'] ?>"><br><br>
			Email: <input type="email" name="email" value="<?php echo $result['email'] ?>"><br><br>
			Password: <input type="password" name="password" value="<?php echo '********'; ?>"><br><br>
			Contact: <input type="number" min="1111111" max="9999999999" name="contact" 
								value="<?php echo $result['contact'] ?>"><br><br>
			Address: <textarea name="address" value="<?php echo $result['address'] ?>"></textarea><br><br>
			Gender: <input type="radio" name="gender" value="M">Male
				<input type="radio" name="gender" value="F">Female<br><br>
			Secuirity Question:
			<select name="sQues">
			<option>What is Your Nick Name ?</option>
			<option>What is Your Lucky Number ?</option>
			<option>What is Your Lucky Colour ?</option>
			<option>Who is Your Favourite Sports Person ?</option>
			<option>Who is Your Role Model ?</option>
			<option>Which is Your Favourite Destination Place ?</option>
			<option>Which is Your Birth Place ?</option>
			</select><br><br>
			Security Answer: <input type="text" name="sAns" ><br><br>
			<input type = "submit" value="Update" name="id">
		</form>
	</body>
	</html>
	-->
