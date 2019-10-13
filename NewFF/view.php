<?php
//include_once 'dbconfig.php';

	pg_connect("host=localhost dbname=aashish user=aashish");

	

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>	
    <td>File Size(KB)</td>
    <th colspan="4">your uploads...<label><a href="index.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>size</td>
    </tr>
    <?php
	$sql="SELECT * FROM table_upload";
	$result_set=pg_query($sql);
	
	echo"BEFORE wHILE";
	echo"$row=pg_fetch_array($result_set)";
	
	while($row=pg_fetch_array($result_set))
	{
		echo"In While LOOp";
		?>
        <tr>
        <td><?php echo $row['file']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><?php echo $row['size']; ?></td>
        <td><a href="uploads/<?php echo $row['file']; ?>" ">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>
