<?php

  //  echo "<br>File: ".$_GET['name'];
  //  echo "<br>type: ".$_GET['type'];
  //  echo "<br>size: ".$_GET['size'];
  //  echo "<br>id: ".$_GET['user_id'];

    include 'database.php';
    
    $db = new database();

/*    $query = "delete from table_upload where file = '".$_GET['name']."' and type = '".$_GET['type']."'"." and size = '".$_GET['size']."' and
    user_id= ".$_GET['user_id'].";"; */

   $query = "delete from table_upload where file = '".$_GET['name']."' and type = '".$_GET['type']."' and user_id= ".$_GET['user_id'].";";

//    echo "query: ".$query;
//    exit;
    $row = $db->fetchResult($query);
    
    if($row)
    {
        ?>
  		<script>
  			alert('File Deleted Successfully');
        	window.location.href='view.php';
        </script>
    <?php
    }
    else
    {
        ?>
  		<script>
  			alert('Error: Something Went Wrong');
        	window.location.href='view.php';
        </script>
        <?php
    }
?>
