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
     <title>Medilife : Upload Your Reports</title>

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
	include 'database.php';
	include 'back_button.php';
//	session_start();
//	if(!isset($_SESSION['username']))
//	    header('location: login.php');
	
	disable_back();
	
	$db = new database();
	
	$username = $_SESSION['username'];

	$sqlUserDetails = "select * from userdetails where email = '$username';";
	
	$row = $db->executeQuery($sqlUserDetails);

/*	if(!$row)

	{

		echo 'User does not exist, please login again';

		exit;

	}*/
//	var_dump($row);
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
              <a class="navbar-brand" href="userHome.php"><i class="fa fa-heartbeat"></i>Medilife</a>
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="userHome.php">Home</a></li>
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
                </li><!--                <li><a href="gallery.html">Gallery</a></li>-->
                                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accessories <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Doctors</a></li>
                    <li><a href="#">Patients</a></li>
                  </ul>
                </li>
                <li><a href="consultant.php">Consultant</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="view.php">View Reports</a></li>
                    <li><a href="uploadForm.php?id=<?php echo $row['id'];?>">Upload Reports</a></li>
                  </ul>
                </li>
                <li class="dropdown">
<!--                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Page <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="#">Link Two</a></li>
                    <li><a href="#">Link Three</a></li>               
                  </ul>-->
                </li>               
                <li><a href="about-us.php">About Us</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="edit.php?id=<?php echo $row['id'];?>">Update Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>
                <li align="center">
                <?php
                	if($row['gender'] == 'M')
                	{
                		?>
                		<img src="images/in_male.png" height=50px width=50px><br><font size=2 color="#fff">
                	<?php
                	}
                	else
                	{
                		?>
                		<img src="images/in_female.ico" height=50px width=50px><br><font size=2 color="#fff">
                	<?php
                	}
                	?>
                <?php echo $row['firstname'];?>&nbsp;&nbsp;<?php echo $row['lastname'];?>
                </font></img></li>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->   



    <!--=========== BEGIN SLIDER SECTION ================
    <section id="sliderArea">
      <!-- Start slider wrapper 
      <div class="top-slider">
        <!-- Start First slide 
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/14.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2>An <strong>Excellent Theme</strong> for your Health Related Project</h2>
            <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>
          </div>
        </div>
        <!-- End First slide -->


	
	<html>
	<center>
	<head><h1> Update Your Profile </h1><br><br>
		<title>File Upload and view With PHP and MySql</title>
	</head>
	<body>
		<?php if($row['gender'] == 'M'); //echo "<img src=\"images/Male.jpg\" height=300px width=300px align=\"left\"></img>";
		//else
			//echo "<img src=\"images/Female.jpg\" height=300px width=300px align=\"left\"></img>";
		?>	


<?php
//include_once 'dbconfig.php';
//include 'database.php';
pg_connect("host=localhost dbname=aashish user=aashish");
$db = new database();
$user = $_SESSION['id'];
//echo "<br> $user <br>";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<!--<label>File Uploading With PHP and MySql</label>-->
</div>
<div id="body">
<?php if($row['gender'] == 'M') echo "<img src=\"images/Male.jpg\" height=300px width=300px align=\"left\"></img>";
		else
			echo "<img src=\"images/Female.jpg\" height=300px width=300px align=\"left\"></img>";
		?>
		<?php 
			//$user = $_GET[['id'];

		?>
	<h2><u color="blue">Share Your Reports</u></h2>
<br><br>

 <form action="mail.php?file=<?php echo $_GET['file']; ?>" method="post" enctype="multipart/form-data" onsubmit="return validate();">
 <!--<input type="file" name="file" /><br><br> -->
 			<font size=4 font-monospace="family" color="#000000">
		To: </font>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="email" name="email" placeholder=" Email " style="width: 375px"><br><br>
			<font size=4 font-monospace="family" color="#000000">

		Subject: </font>
				&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="textfield" name="sub" placeholder=" Subject" style="width: 375px"><br><br>

 <button type="submit" name="btn-upload">Send</button>
 </form>
 	<script>
		function validate()
		{
			var email=document.register.email;
		
		if(email.value == '')
			{
				alert('Please enter email ');
				email.focus();
				return false;
		}	}
  </script>
   <?php
 if(isset($_GET['success']))
 {
  ?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
        <?php
 }
 else
 {
  ?>
        <label>Try to upload any files(PDF, DOC, EXE, MP3, JPEG, OUT, ZIP,etc...)</label>
        <?php
 }
 ?>
</div>
<div id="footer">
</div>
</body>
</html>	

	</body>
	</center>
	</html>
    
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
              <p>&copy; Copyright 2019 <a href="uploadFile.php?id=<?php echo $_GET['id']; ?>">Medilife</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-social">              
                <a href="https://www.facebook.html"><span class="fa fa-facebook"></span></a>
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
              <p>Design & Developed By <a rel="nofollow" href="uploadFile.php?id=<?php echo $_GET['id']; ?>">Medilife</a></p>
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
</html>
