<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Medilife : Forgot Password</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">       
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">   
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Photo Swipe Image Gallery -->     
    <link rel='stylesheet prefetch' href='css/photoswipe.css'>
    <link rel='stylesheet prefetch' href='css/default-skin.css'>    

    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  </head>
  <body>  
    
    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
    <!-- END SCROLL TOP BUTTON -->

	<?php
		
	/*	session_start();
		if(isset($_SESSION['username']))
		{
			session_unset();
			session_distroy();
			?>
			<script>
				header('location: login.php');
			</script>
		<?php
		}*/
	?>

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat"></i>Medilife</a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <!--<li><a href="features.html">Features</a></li>-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="medical-stores.php">Medical Stores</a></li>
                    <li><a href="blood-bank.php">Blood Bank</a></li>
                    <li><a href="hospital.php">Nearby Hospitals & Clinics</a></li>
                    <li><a href="emergency.php">Emergency Ambulance</a></li>
		  <li><a href="videos.php">Videos</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accessories <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Doctors</a></li>
                    <li><a href="#">Patients</a></li>
                  </ul>
                </li>
                <li><a href="consultant.php">Consultant</a></li>
                <li><a href="about-us.php">About Us</a></li>
        <!--        <li><a href="gallery.html">Gallery</a></li>-->
        
                <li><a href="contact.php">Contact</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->   

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="sliderArea">
      <!-- Start slider wrapper -->      
      <!--<div class="top-slider">-->
        <!-- Start First slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/000000.jpg" alt="">
          </div>
          <div class="slider-text">
	<html>
		<center>
		<head><font size=20 font-monospace="family" color="#fff">&nbsp;&nbsp;<br>Forgot Password</font>
			    <div class="loginline"></div><br>
            <title> Forgot Password </title>
		</head>
		<body>
		<h4>
		<?php 
	include 'database.php';
	$db = new database();
	session_start();
	if(isset($_REQUEST['email']))
	{
		$email = $_REQUEST['email'];   										    	//$email = $_REQUEST['email'];
		$_SESSION['email'] = $email;
		$isexist = "select * from userdetails where email= '".$email."';";
				 																	//		echo $isexist;		
																					//		echo "<br>$email<br>";
		$result = $db->executeQuery($isexist);
		$_SESSION['id'] = $result['id'];
		$_SESSION['eme_contact'] =  $result['eme_con'];
		$_SESSION['sec_ans'] = $result['security_answer'];
		if($result)
		{
			//var_dump($result);
			?>
			<html>
				<head>
					<title>
					</title>
				<head>
				<style>
			.btn {
					border-color: black;
					color: white;
					padding: 14px 28px;
					font-size: 16px;
					/*cursor: pointer;*/
				}
				
			.log {background-color: #ff0000;} /* Red */ 
			.log:hover {background: #000000;
			color : white;
			border-color: red;}
		</style>
				<body background="images/000000.jpg">
					<form name="forgot" action="<?php echo $_SERVER[PHP_SELF]; ?>" method="POST" onsubmit="return validate();">
						<font size=4 font-monospace="family" color="#fff">
						Security Question: </font>
						<input type="text" name="sQues" placeholder="Enter Answer" style="width: 375px"
						value="<?php echo $result['security_question']; ?>" readonly><br><br>
						<font size=4 font-monospace="family" color="#fff">
						Security Answer:</font>&nbsp;&nbsp; 
						<input type="text" name="sAns" placeholder="Enter Answer" style="width: 375px"><br><br>
						<input class="btn log" type="submit" value="OK">
					</form>
				</body>
				<script>
				function validate()
				{
					var sec_ans=document.forgot.sAns;
//					var password=document.forgot.password;
					if(sec_ans.value == '')
					{
						alert('Please enter security answer ');
						sec_ans.focus();
						return false;
					}
					return true;
				}
			</script>
			</html>
				
			<?php
					
		}
		else
		{
			?>
			<script>
				alert('Invalid Email Address');
				window.location.href="forgot.php";
			</script>
			<?php
		}
		?>
<?php
	}
	
?>

<?php
	if((!isset($_REQUEST['email'])) && (!isset($_REQUEST['sAns'])) && (!isset($_REQUEST['password'])))
	{
		?>
		<html>
			<head>
				<title>
				</title>
			<head>
			<style>
			.btn {
					border-color: black;
					color: white;
					padding: 14px 28px;
					font-size: 16px;
					/*cursor: pointer;*/
				}
				
			.log {background-color: #ff0000;
			border-color : black;} /* Red */ 
			.log:hover {background: #000000;
			color : white;
			border-color: red;}
		</style>
			<body background="images/000000.jpg">
				<form name="forgot" action="<?php echo $_SERVER[PHP_SELF]; ?>" method="POST" onsubmit="return validate();">
					<font size=4 font-monospace="family" color="#fff">
					Email:</font> <input type="email" name="email"><br><br> <!-- style="width: 375px" -->
					<input class="btn log" type="submit" value="submit">
				</form>
			</body>
			<script>
			function validate()
			{
				var email=document.forgot.email;
//				var password=document.forgot.password;
				if(email.value == '')
				{
					alert('Please enter email ');
					email.focus();
					return false;
				}
				else
				if(!(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(email.value)))
				{
					alert('please enter valid email address');
					email.focus();
					return false;
				}
				return true;
			}
		</script>
		</html>
	<?php
	}
	if(isset($_REQUEST['sAns']))
	{
	
		$sec_ans = $_REQUEST['sAns'];
		if($sec_ans == $_SESSION['sec_ans'])
		{
//		echo $sec_ans;
	//	echo "<br>".$_SESSION['sec_ans'];
			
		//$isans = "select * from userdetails where email= '".$_SESSION['email']."' and security_answer='".$sec_ans."';";
																					//		echo $isexist;		
																					//		echo "<br>$email<br>";
		
																					//  echo $isans;
//		$result = $db->executeQuery($isexist);


			?>
			
			<html>
				<head>
					<title>
					</title>
				<head>
				<body background="images/bac.jpg">
					<form name="forgot" action="<?php echo $_SERVER[PHP_SELF]; ?>" method="POST" onsubmit="return validate();">
						<font size=4 font-monospace="family" color="#fff">
						New - Password: </font>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="password" name="password" placeholder="Enter Password" style="width: 375px"><br><br>
						<font size=4 font-monospace="family" color="#fff">
						Confirm Password: </font>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="password" name="cpassword" placeholder="Re-enter Password" style="width: 375px"><br><br>
						<input type="submit" value="submit">
					</form>
				</body>
				<script>
				function validate()
				{
					var password=document.forgot.password;
					var cpassword=document.forgot.cpassword;
					if(password.value == '')
					{
						alert('Please enter password ');
						password.focus();
						return false;
					}
					else
					if(password.value.length < 8)
					{
						alert('Password should be of minimum 8 length');
						password.focus();
						return false;
					}
					else if(cpassword.value == '')
					{
						alert('Please enter confirm password ');
						cpassword.focus();
						return false;
					}
					else if(password.value != cpassword.value)
					{
						alert('Password and confirm password are not match ');
						cpassword.focus();
						return false;
					}
					return true;
				}
				</script>
			</html>
			<?php
		}
		else
		{
			?>
			<script>
				alert('Incorrect Security Answer');
				window.location.href="forgot.php";
			</script>
			<?php
		}
	}
	//else
	
?>

<?php
	if((!isset($_REQUEST['email'])) && (!isset($_REQUEST['sAns'])) && (isset($_REQUEST['password'])) && (isset($_REQUEST['cpassword'])))
	{
		$update = "update userdetails set password = '".$_REQUEST['password']."' where email = '".$_SESSION['email']."';";
		
		//echo "$update";
		$res = $db->fetchResult($update); 
																	//	echo "<br>$res<br>";
		if(!is_resource($res))
		{
			?>
			<script>
				alert('Error: Something	went wrong');
				window.href.location="forgot.php";
			</script>
		<?php
		}
		else
		{
			?>
			<script>
				alert('Password is changed successfully');
			//	window.location.href="login.php";
			</script>
			<font size=4 font-monospace="family" color="#fff">
			<?php
				$message="Credentials%20Changed%20!!%20Email%20id:-".$_SESSION['email']."%20Password%20:-".$_REQUEST['password']."%20\nThanks%20for%20Using%20on%20Caring%20For%20Life%20!%20Emergency%20Number=1099";
$url="http://smsalertbox.com/api/sms.php?uid=5370616365436f6d70&pin=5d0ec0b960811d7f2d9f560b4af0539a&sender=your_sender_id&route=0&mobile=". $_SESSION['eme_contact']."&message="."$message"."&pushid=1";
$data = file_get_contents($url);
				echo "<br>email: ".$_SESSION['email'];
				echo "<br>password: ".$_REQUEST['password'];
			?>
			
			<script>
			window.location.href="login.php";
//				alert('Password is changed successfully');
//				
//			</script>

			<?php
		}
	?>
	<?php
	}
?>

        <!-- End Single Top Feature -->
  
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

  
    <!--=========== Start Footer SECTION ================-->
    <footer id="footer">
      <!-- Start Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>About Us</h2>
                <div class="line"></div>
              </div>           
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Our Service</h2>
                <div class="line"></div>
              </div>
              <ul class="footer-service">
                <li><a href="medical-stores.php"><span class="fa fa-check"></span>Medical Stores</a></li>
                <li><a href="blood-bank.php"><span class="fa fa-check"></span>Blood Banks</a></li>
                <li><a href="hospital.php"><span class="fa fa-check"></span>Nearby Hospitals & Clinics</a></li>
                <li><a href="emergency.php"><span class="fa fa-check"></span>Emergency Ambulance</a></li>
                <li><a href="videos.php"><span class="fa fa-check"></span>Videos</a></li>       
              </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Tags</h2>
                <div class="line"></div>
              </div>
                <ul class="tag-nav">
                  <li><a href="http://www.ada.org/en/about-the-ada/dentists-doctors-of-oral-health">Dental</a></li>
                  <li><a href="	https://www.practo.com/hyderabad/general-surgeon">Surgery</a></li>
                  <li><a href="http://umm.edu/programs/childrens/health/about/what-is-a-pediatrician">Pediatric</a></li>
                  <li><a href="http://www.heartsite.com/">Cardiac</a></li>
                  <li><a href="https://www.aao.org/eye-health/tips-prevention/what-is-ophthalmologist">Ophthalmology</a></li>
                  <li><a href="http://www.mercola.com/diabetes.aspx">Diabetes</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Contact Info</h2>
                <div class="line"></div>
              </div>
              <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
              <address class="contact-info">
                <p><span class="fa fa-home"></span>305 Kasba Peth,
                Pune - 411002, Maharashtra, INDIA</p>
                <p><span class="fa fa-phone"></span>9149154996</p>
                <p><span class="fa fa-envelope"></span>bhaktimergu11@gmail.com</p>
              </address>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Footer Middle -->
      <div class="footer-middle">
        <div class="container">
          <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-copyright">
              <p>&copy; Copyright 2019 <a href="forgot.php">Medilife</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-social">              
                <a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-google-plus"></span></a>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- Start Footer Bottom -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>Design & Developed By <a rel="nofollow" href="forgot.php">Medilife</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=========== End Footer SECTION ================-->

    <!-- jQuery Library  -->
    <script src="js/jquery.js"></script>    
    <!-- Bootstrap default js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>      
    <!-- counter -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Doctors hover effect -->
    <script src="js/snap.svg-min.js"></script>
    <script src="js/hovers.js"></script>
    <!-- Photo Swipe Gallery Slider -->
    <script src='js/photoswipe.min.js'></script>
    <script src='js/photoswipe-ui-default.min.js'></script>    
    <script src="js/photoswipe-gallery.js"></script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>
     
  </body>

<!--
<html>
	<head> <center><font size=20 color="blue"> <B>Login Page</B></font> </center>
	<title> Login Page </title>
	</head>
	<body  background="med1.jpg">
		<form action="authenticate.php" method="POST">
			Username: <input type="text" name="username" placeholder="Email"><br><br>
			Password: <input type="password" name="password" placeholder="Password"><br><br>
			<input type = "submit" value="submit">
		</form>
		<a href="register.html">Register</a><br><br>
		<a href="register.html">New User! Register Yourself</a><br><br>
		<a href="">Forgot Password</a>
	</body>
</html>
-->
