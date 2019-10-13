<?php
	//include_once 'dbconfig.php';
	pg_connect("host=localhost dbname=aashish user=aashish");

	$_SESSION['id'] = $_GET['id'];

	//$p = $_SESSION['id'];
	$p = $_GET['id'];
					//	echo "<br>p: $p <br>"; // --> userid
	if(isset($_POST['btn-upload']))
	{    
 		$file = rand(1000,100000)."-".$_FILES['file']['name'];
    	$file_loc = $_FILES['file']['tmp_name'];
//		echo "<br>Temp Location:\t".$file_loc;               //   ---->  lacation of file
		 $file_size = $_FILES['file']['size'];
	//	 echo "<br>File Size:\t".$file_size;
		 $file_type = $_FILES['file']['type']; // Multipurpose Internet Mail Extension (MIME)
		// echo "<br>File Type:\t".$file_type;
		 $folder="uploads/";
		 
		 // new file size in KB
		 $new_size = $file_size/1024;  
		 // new file size in KB
		 
		 // make file name in lower case
		 $new_file_name = strtolower($file);
		 
		 $final_file=str_replace(' ','-',$new_file_name);
 
	//	 echo "<br>file location".$file_loc;        //  --> location of file
	//	echo "<br>Folder name".$folder;        //  --> name of folder containing this file 
		 
	//	 exit;
		 if(move_uploaded_file($file_loc,$folder.$final_file))
		 {
		 
		 
			 $query = "select max(id) from table_upload";
			
			$result =  pg_query($query);
			
			$row = pg_fetch_array($result);
			$id=0;
			if($row['max'] == NULL)
			{
				$id = 1;
				// echo "<br>id: $id <br>";   //  -->  if no files then id=1
			}
			else
				$id = $row['max']+1;
			//	echo  "id: ".$row['max']."<br>";   //  -->  if files then max(id)+=1
			//var_dump($row);
			 //exit;
		  	$userid = $_GET['id'];
		  	$sql="INSERT INTO table_upload VALUES($id,'$final_file','$file_type','$new_size', $userid)";
			  
			  
			            // --> Query to add file
		  	pg_query($sql);
	  		
	  		?>
		  		<script>
					alert('successfully uploaded');
        			window.location.href="view.php";
        		</script>
	  		<?php
		 }
 		else
 		{
  			?>
				<script>
	  				alert('error while uploading file');
	        		window.location.href='view.php';
        		</script>
  			<?php
 		}
	}
?>
