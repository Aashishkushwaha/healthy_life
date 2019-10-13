<?php
$dbhost = "localhost";
$dbuser = "pratik";
$dbpass = "pratik1100";
$dbname = "pratik";
pg_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
pg_select_db($dbname) or die('database selection problem');
?>

