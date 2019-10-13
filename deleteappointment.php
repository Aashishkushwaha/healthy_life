<?php
	
	include_once 'database.php';
	include 'back_button.php';
	
	disable_back();
	$db = new database();
	
	$username = $_SESSION['username'];
	$sqlUserDetails = "select * from userdetails where email = '$username';";
	
	$row = $db->executeQuery($sqlUserDetails);
	//echo $row['id'];
	//exit;

	$name = $_GET['na'];
	$email = $_GET['ema'];
	$contact = $_GET['cont'];
	$date = $_GET['date'];
	$time = $_GET['time'];
	$dept = $_GET['dep'];
	$doct = $_GET['doctor'];
	$sub = $_GET['sub'];
	$descr = $_GET['descr'];
	$id = $row['id'];
	
	$deleteApp = "delete from appointment where uid = $id and time = '$time' and date = '$date' and doctor = '$doct'";
	
	$result = pg_query($deleteApp);
	
//	echo "<h1>Del :  $deleteApp </h1><h1>Res : $result</h1>";

//	exit;
	if($result)
	{
		$selectQuery = "select reserved_time from consultant where doc_name = '$doct' and app_date = '$date';";
		$result = pg_query($selectQuery);
		$row = pg_fetch_row($result);
//		echo "<h1>Reserved (before): $row[0] </h1><br>";
//		print_r($row);
		
		$reserved_time = explode(",",$row[0]);
		
		$i = 0;
		for(; $i < count($reserved_time); $i++)
 		{
 			if($reserved_time[$i] == $time){ }
 			else
			{
				if($i == 0)
				{
					$reserved_temp = $reserved_time[$i];
				}
				else
				if($reserved_temp == '')
				{
					$reserved_temp = $reserved_time[$i];
				}
				else
				{
					$reserved_temp = $reserved_temp.','.$reserved_time[$i];
				}
			}
		}
		
//		echo "<h1>Reserved (after): $reserved_temp </h1><br>";
		$reserved_time = explode(",",$reserved_temp);
//		echo "<h1> UnSorted </h1><br>";
//		print_r($reserved_time);
		sort($reserved_time);
//		echo "<h1> Sorted </h1><br>";
//		print_r($reserved_time);
		$i = 0;
	 	for(; $i < count($reserved_time); $i++)
		{
			if($i == 0)
			{
				$temp_res = $reserved_time[$i];
			}
			else
			{
				$temp_res = $temp_res.','.$reserved_time[$i];
			}
		}
		
//		echo "<h1>temp_res : $temp_res </h1>";
		
		$sqlUserDetails = "select avail_time from consultant where doc_name = '$doct' and app_date = '$date';";
		$result = pg_query($sqlUserDetails);
		$row = pg_fetch_row($result);
		$row[0].=",".$time;
//		echo "<h1>Available : $row[0]</h1><br>";
		//print_r($row[0]);
		
		$avail_time = explode(",",$row[0]);
		//$final = sort($avail_time);
//		echo "<h1> UnSorted </h1><br>";
//		print_r($avail_time);
		sort($avail_time);
//		echo "<h1> Sorted </h1><br>";
//		print_r($avail_time);
		$i = 0;
	 	for(; $i < count($avail_time); $i++)
		{
			if($i == 0)
			{
				$temp = $avail_time[$i];
			}
			else
			{
				$temp = $temp.','.$avail_time[$i];
			}
		}
		
		$updateQuery = "update consultant set avail_time = '$temp' , reserved_time = '$temp_res' where doc_name = '$doct' and app_date = '$date'";
		$updateresult = pg_query($updateQuery);	
		//echo "<h1> Update : $updateQuery </h1><br>";
	
		//exit;
		
		if($updateresult)
		{
			//echo "<br><h1> Success </h1>";
			//exit;
			?>
			<script>
				alert('Appointment Deleted Successfully');
				window.location.href="appointments.php";
			</script>
			<?php
		}
		else
		{
		}
	}

?>
