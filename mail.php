<?php
 require_once "Mail.php";
 require_once "Mail/mime.php";



// echo $_GET['id'];
 $from = "bhaktimergu11@gmail.com";
 $to = $_REQUEST['email'];
 $subject ="Medilife";
 $body =  $_REQUEST['sub'];
 
 $host = "ssl://smtp.gmail.com";
 $port = "465";
 $username = "medilife@gmail.com";
 $password = "medilife1234	";

$text = 'Text version of email';
$html = '<html><body>HTML version of email</body></html>';
$file = "uploads/".$_REQUEST['file'];
$crlf = "\n"; 
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));

 $mime = new Mail_mime(array('eol' => $crlf));

$mime->setTXTBody($text);
$mime->setHTMLBody($html);
$mime->addAttachment($file, 'text/plain');

$body = $mime->get();
$headers = $mime->headers($headers);

 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else 
  {
  // echo("<p>Message successfully sent!</p>");?>
 	  		<script>
					alert('File sent successfully');
        			window.location.href="view.php";
        		</script>
	  		
<?php  }
 ?>

