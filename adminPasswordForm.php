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
     <title>Medilife : Change Your Password</title>

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

	disable_back();	

	$db = new database();
	
	$username = $_SESSION['username'];

	$sqlUserDetails = "select * from userdetails where email = '$username';";
	
	$row = $db->executeQuery($sqlUserDetails);

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
              <a class="navbar-brand" href="adminHome.php"><i class="fa fa-heartbeat"></i>Medilife</span></a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="adminHome.php">Home</a></li>
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
                </li>
                <li><a href="about-us.php">About Us</a></li>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="medical-counseling.html">Medical Counseling</a></li>
                    <li><a href="medical-research.html">Medical Research</a></li>
                    <li><a href="blood-bank.html">Blood Bank</a></li>
                  </ul>
                </li>-->
<!--                <li><a href="gallery.html">Gallery</a></li>-->
                
                <li class="dropdown">
<!--                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Page <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="#">Link Two</a></li>
                    <li><a href="#">Link Three</a></li>               
                  </ul>-->
                </li>
                <!--<li><a href="contact.html">Contact</a></li>-->
             	<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="adminProfile.php?username=<?php echo $row['email']; ?>">Update Profile</a></li>
	
                    <li><a href="adminPasswordForm.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>
                                <li align="center">
                <?php
                	if($row['gender'] == 'M')
                	{
                		?>
                		<img src="images/admin.ico" height=50px width=50px><br><font size=2 color="#fff">
                	<?php
                	}
                	else
                	{
                		?>
                		<img src="images/admin_female1.gif" height=50px width=50px><br><font size=2 color="#fff">
                	<?php
                	}
                	?>
                <?php echo $row['firstname'];?>&nbsp;&nbsp;<?php echo $row['lastname'];?> (Admin)
                </font></img></li>
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
      <div class="top-slider">
        <!-- Start First slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/1.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><font color="#ff0000">An </font><strong>Excellent </strong><font color="#ff0000">
            web-based Application for your Health Related Problems</font></h2>
            <p><strong>Medilife</strong> suitable for any health related problems</p>
       <!--     <div class="readmore_area">
              <a data-hover="Log In" href="login.php"><span>Log In</span></a>
            </div> -->
          </div>
        </div>
        <!-- End First slide -->

        <!-- Start 2nd slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/2.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><font color="#ff0000">An </font><strong>Excellent </strong><font color="#ff0000">
            web-based Application for your Health Related Problems</font></h2>
            <p><strong>Medilife</strong> suitable for any health related problems</p>
          <!--  <div class="readmore_area">
              <a data-hover="Log In" href="login.php"><span>Log In</span></a>                
            </div> -->
          </div>
        </div>
        <!-- End 2nd slide -->

        <!-- Start Third slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/3.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><font color="#ff0000">An </font><strong>Excellent </strong><font color="#ff0000">
            web-based Application for your Health Related Problems</font></h2>
            <p><strong>Medilife</strong> suitable for any health related problems</p>
        <!--    <div class="readmore_area">
				<a data-hover="Log In" href="login.php"><span>Log In</span></a>
            </div>-->
          </div>
        </div>
        <!-- End Third slide -->

        <!-- Start Fourth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/4.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><font color="#ff0000">An </font><strong>Excellent </strong><font color="#ff0000">
            web-based Application for your Health Related Problems</font></h2>
            <p><strong>Medilife</strong> suitable for any health related problems</p>
           <!-- <div class="readmore_area">
              <a data-hover="Log In" href="login.php"><span>Log In</span></a>
            </div> -->
          </div>
        </div>
        <!-- End Fourth slide -->

        <!-- Start Fifth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/5.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><font color="#ff0000">An </font><strong>Excellent </strong><font color="#ff0000">
            web-based Application for your Health Related Problems</font></h2>
            <p><strong>Medilife</strong> suitable for any health related problems</p>
           <!-- <div class="readmore_area">
              <a data-hover="Log In" href="login.php"><span>Log In</span></a>
            </div>  -->
          </div>
        </div>
        <!-- End Fifth slide -->
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

<!--=========== BEGAIN Form SECTION ================-->
<html>
	<head><font size=10 color="#fff"><center>Change Password</center></font>
		<div class="line"></div>
		<title>Change Password</title>
	</head>
	<style>
			.btn {
					border-color: #ccc;
					color: white;
					padding: 14px 28px;
					font-size: 16px;
					/*cursor: pointer;*/
				}
				
			.log {background-color: #017bb5;} /* Red */ 
			.log:hover {background: #ccc;
			color : #777;
			border-color: #017bb5;}
		</style>
	<center>
	<body background="images/000000.jpg">
		<form name="adminPassword" action = "adminPassword.php" method = "POST" onsubmit="return validate();">
			<font size=5 color="#fff">
			Old - Password : </font><font size=5>
			&nbsp; <input type = "password" name = "old"></font><br><br>
			<font size=5 color="#fff">
			New - Password : </font><font size=5>
			<input type = "password" name = "newPassword"><font><br><br>
			<input class="btn log" type = "submit" value="Update Password">
		</form>
	</font>
	</body>
	</center>
		<script>
		function validate()
		{
			var password=document.adminPassword.old;
			var newpassword=document.adminPassword.newPassword;
			
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
			else if(newpassword.value == '')
			{
				alert('Please enter New password ');
				newpassword.focus();
				return false;
			}
			else if(newpassword.value.length < 8)
			{
				alert('New password should be of minimum 8 length');
				newpassword.focus();
				return false;
			}
			return true;
		}
	</script>
</html>
	<!--=========== End Form SECTION ================-->

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
              <p>&copy; Copyright 2019 <a href="adminPasswordForm.php">Medilife</a></p>
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
              <p>Design & Developed By <a rel="nofollow" href="adminPasswordForm.php">Medilife</a></p>
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
