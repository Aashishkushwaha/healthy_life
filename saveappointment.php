<?php
	
	include_once 'database.php';
	include 'back_button.php';
	
	disable_back();
	$db = new database();
	
	$username = $_SESSION['username'];

	$sqlUserDetails = "select * from userdetails where email = '$username';";
		
	$row = $db->executeQuery($sqlUserDetails);
	//echo $row['id'];
	
	$name = $_GET['na'];
	$email = $_GET['ema'];
	$contact = $_GET['cont'];
	$date = $_GET['appdate'];
	$time = $_GET['apptime'];
	$dept = $_GET['dep'];
	$doct = $_GET['doctor'];
	$sub = $_GET['sub'];
	$descr = $_GET['descr'];
	$id = $row['id'];
    $sqlInsertUser = "insert into appointment values ('$name','$email',$contact,'$date','$time','$dept', '$doct', '$sub','$descr',$id)";
	$result = $db->fetchResult($sqlInsertUser);
	
	$explode = explode("-",$date);
	
	$date_str = $explode[0].'-'.$explode[1].'-'.$explode[2];
	
	
	if($result)
	{
		$selectQuery = "select reserved_time from consultant where doc_name = '$doct' and app_date = '$date_str';";
		$result = pg_query($selectQuery);
		//echo "<html><Body><h1> Here : $selectQuery <br>Res : $result</h1><br><br></Body></html>";
		$row = pg_fetch_row($result);
		if($row[0])
		{
			$row[0] = $row[0].','.$time;
		}
		else
		{
			$row[0] = $time;
		}
		$reserved_time = $row[0];
		
		$updateQuery = "update consultant set reserved_time = '$reserved_time' where doc_name = '$doct' and app_date = '$date_str';";
		$result1 = $db->fetchResult($updateQuery);
		//echo "<html><Body><h1> Here : $updateQuery <br>Res : $result1</h1><br><br></Body></html>";
		if($result1)
		{
			?>
			<script>
        	//alert('Updated');
        	</script>
		<?php

			$q = pg_num_rows($result1);
			//echo "<html><Body><h1> $q $date_str $doct $time</h1></Body></html>";
			
			$sqlUserDetails = "select avail_time from consultant where doc_name = '$doct' and app_date = '$date_str';";
			$result = pg_query($sqlUserDetails);
			$row = pg_fetch_row($result);
			$avail_time = explode(",",$row[0]);
			$i = 0;
		 	for(; $i < count($avail_time); $i++)
 			{
 				if($avail_time[$i] == $time){ }
 				else
 				{
 					if($i == 0)
 					{
 						$temp = $avail_time[$i];
 					}
 					else
 					if($temp == '')
 					{
 						$temp = $avail_time[$i];
 					}
 					else
 					{
 						$temp = $temp.','.$avail_time[$i];
 					}
 				}
			}
			
			$avail_time = $temp;
			//echo "<html><Body><br><h1>Hi : $temp </h1></Body></html>";
		
			$updateQuery = "update consultant set avail_time = '$avail_time' where doc_name = '$doct' and app_date = '$date_str'";

			//echo "<html><Body><br><h1>updatequery : $updateQuery </h1></Body></html>";
			$result1 = pg_query($updateQuery);
		
			//echo "<html><Body><br><h1>result1 : $result1 </h1></Body></html>";
		}
	?>
		<script>
        	alert('Appointment Saved Successfully');
            window.location.href="appointments.php";
        </script>
    <?php
	}

?>
