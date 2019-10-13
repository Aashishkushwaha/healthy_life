<?php
	include 'database.php';
	$opt = $_GET['opt'];
	$day = $_GET['day'];
  	$date_str = $_GET['datestr'];
  	
    $db = new database();	
	$username = $_SESSION['username'];
  	
  	$explode = explode("-",$date_str);
	$date_temp = $explode[0].'-'.$explode[2].'-'.$explode[1];
  	
  	$sqlUserDetails = "select avail_time from consultant where doc_name = '$opt' and app_date = '$date_temp';";
	
	$result = pg_query($sqlUserDetails);
	
	$gettime = date('H.i');
	$getday = date('d');
	
	$row = pg_fetch_row($result);
	if(!$row[0])
	{
		$row[0] = '10.00,10.30,11.00,11.30,12.00,12.30,13.00,14.30,15.00,15.30,16.00,16.30,17.00,18.00,18.30,19.00,19.30,20.00,22.30';	
		$av_time = $row[0];
		
		$InsertQuery = "insert into consultant values ('$opt',NULL,NULL,NULL,NULL,'$av_time','','$date_temp');";
		$result_update = pg_query($InsertQuery);
	}
	echo $row[0];
	
 	$avail_time = explode(",",$row[0]);
 	
 	var_Dump( $avail_time);
 	var_dump($_GET);
 	
 	$i = 0;
 	for(; $i < count($avail_time); $i++)
 	{
 		if($day == $getday)
 		{
 			if($avail_time[$i] > $gettime)
 				echo '<option>'.$avail_time[$i].'</option>';
 		}
 		else
 		if($day < $getday)
 		{
 			$str = 'Select Time';
			echo '<option>'.$str.'</option>';
 		}
 		else	
 		{
 			echo '<option>'.$avail_time[$i].'</option>';
 		}
 	}
?>
