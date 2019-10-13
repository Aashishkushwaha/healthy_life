<?php

    session_start();
//    $username = 
//    echo "<br>Username: ".$_SESSION['username'];
    
    session_unset();
    session_destroy();

//    echo "<br>Username: ".$_SESSION['username'];
?>

<body oncontextmenu="return false;">  

<SCRIPT type="text/javascript">

	window.history.forward();
	function noBack() { window.history.forward(); }
window.onbeforeunload = function() { return "You work will be lost."; };
</SCRIPT>
</HEAD>
<BODY onload="noBack();" 
	onpageshow="if (event.persisted) noBack();" onunload="">
	
<?php

    header('location:login.php');
  
?>
