<?php
//include_once 'dbconfig.php';
pg_connect("host=localhost dbname=aashish user=aashish");

if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];

    echo "Temp Location".$file_loc;
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";

 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
 echo "file location".$file_loc;
 echo "Folder name".$folder;
 
 $id=1;
 $userid = $_GET['id'];
  $sql="INSERT INTO table_upload VALUES($id,'$final_file','$file_type','$new_size',$userid)";
  echo"<br>$sql<br>";
	$query = "select max(id) from table_upload";

echo $query."<br>";

  pg_query($sql);
  ?>
  <script>
  //alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
  <?php
 }
}
?>
