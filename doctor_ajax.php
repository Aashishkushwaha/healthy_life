<?php
	include 'database.php';
	$opt = $_GET['opt'];
  	
   $db = new database();	
	$username = $_SESSION['username'];
  	
  	$sqlUserDetails = "select doc_name from consultant where type = '$opt';";
	$result = pg_query($sqlUserDetails);
			
 	$doctor = array();
 	$i = 0;
 	
 	while($row=pg_fetch_array($result))
	{
		$doctor[$i++] = $row[0];
  	}
  	
  	
  switch($opt)
  {
    default:
      echo '
            <option>Select an Option...</option>
           ';
        break;
    case 'Cardiologist':
      echo '
            <option >'.$doctor[0].'</option>
            <option >'.$doctor[1].'</option>
            <option >'.$doctor[2].'</option>
           ';
        break;
    case 'Gynecologist':
      echo '
            <option >'.$doctor[0].'</option>
            <option >'.$doctor[1].'</option>
            <option >'.$doctor[2].'</option>
           ';
        break;
    case 'Cancer':
      echo '
            <option >'.$doctor[0].'</option>
            <option >'.$doctor[1].'</option>
            <option >'.$doctor[2].'</option>
           ';
        break;
	case 'Dermatologist':
      echo '
            <option >'.$doctor[0].'</option>
            <option >'.$doctor[1].'</option>
            <option >'.$doctor[2].'</option>
           ';
        break;
	case 'Neurologist':
      echo '
            <option >'.$doctor[0].'</option>
            <option >'.$doctor[1].'</option>
            <option >'.$doctor[2].'</option>
           ';
        break;
   case 'Pediatrician':
      echo '
            <option >'.$doctor[0].'</option>
            <option >'.$doctor[1].'</option>
            <option >'.$doctor[2].'</option>
           ';
        break;
   case 'Psychiatrist':
      echo '
            <option >'.$doctor[0].'</option>
            <option >'.$doctor[1].'</option>
            <option >'.$doctor[2].'</option>
           ';
        break;
  case 'Surgeon':
      echo '
            <option >'.$doctor[0].'</option>
            <option >'.$doctor[1].'</option>
            <option >'.$doctor[2].'</option>
           ';
        break;
  }

?>

<?php
/*
  switch($opt)
  {
    default:
      echo '
            <option>Select an Option...</option>
           ';
        break;
    case 'cardiology':
      echo '
            <option value="opt1_1">'Option1_Test1</option>
            <option value="opt1_2">Option1_Test2</option>
            <option value="opt1_3">Option1_Test3</option>
           ';
        break;
    case 2:
      echo '
            <option value="opt2_1">Option2_Test1</option>
            <option value="opt2_2">Option2_Test2</option>
            <option value="opt2_3">Option2_Test3</option>
           ';
        break;
  }

?>


*/
?>
