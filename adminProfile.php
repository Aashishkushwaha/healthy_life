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
     <title>Medilife : Update Your Profile</title>

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

//	echo "Admin Profile<br>";
	$user = $_GET['username'];
	
	
//	echo"user: $user<br><br>";
	$query = "select * from userdetails where email='$user';";
//	echo $query;
	$db = new database();
	
	$result = $db->executeQuery($query);
	
//	var_dump($result);
//	exit;

	
//	$result = $db->fetchResult();
?>

<?php
//	include_once 'database.php';
//	include 'back_button.php';
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
              <a class="navbar-brand" href="adminHome.php"><i class="fa fa-heartbeat"></i>Medilife</span></a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="adminHome.php">Home</a></li>
           <!--     <li><a href="features.html">Features</a></li>-->
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
                <li class="dropdown">
                  <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
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
                    <li><a href="adminProfile.php?username=<?php echo $result['email']; ?>">Update Profile</a></li>
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
          </div>
        </div>
        <!-- End First slide -->




<!-- Here prev -->



        <!-- Start 2nd slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/2.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><font color="#ff0000">An </font><strong>Excellent </strong><font color="#ff0000ff0000">
            web-based Application for your Health Related Problems</font></h2>
            <p><strong>Medilife</strong> suitable for any health related problems</p>
          </div>
        </div>
        <!-- End 2nd slide -->

      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

<html>
	<head><font size=10 color="#fff"><center>Admin Profile</center></font>
			<div class="line"></div>	
		<title>Edit Profile</title>
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
			<h3><form name="admin" action="AdminProfileUpdated.php" method="POST" onsubmit="return validate();">
			<font size=5 color="#fff">
			First Name: </font><font size=5>
			<input id="firstname" type="text" name="firstname" value="<?php echo $result['firstname'];?>" style="width:300px"></font><br><br>
			<font size=5 color="#fff">
			Last Name: </font><font size=5>
			<input type="text" name="lastname" value="<?php echo $result['lastname'];?>" style="width:300px"></font><br><br>
			<font size=5 color="#fff">
			Email: </font><font size=5>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="email" name="email" value="<?php echo $result['email'];?>" style="width:300px"></font><br><br>
			<font size=5 color="#fff">
			Contact: </font><font size=5>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="number" name="contact" min="7777777" max="9999999999" value="<?php echo $result['contact'];?>"
			 style="width:300px"></font><br><br>
			<font size=5 color="#fff">
			Address: </font><font size=5>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="address" value="<?php echo $result['address'];?>" style="width:300px"></font><br><br>
			<!--Gender: <input type="radio" name="gender" value="M">Male
						   <input type="radio" name="gender" value="F">Female<br><br>-->
			<input class="btn log" type="submit" value="Update"><br><br>
		</h3></form>
	</body>
	</center>
		<script>
		function validate()
		{
			var firstname=document.getElementById('firstname');
			var lastname=document.getElementsByName('lastname')[0];
			var email=document.admin.email;
			var contact=document.admin.contact;
			var password=document.admin.password;
			var address=document.admin.address;
			if(firstname.value == '')
			{
				alert('Please enter first name ');
				firstname.focus();
				return false;
			}
			else
			if(!(/^[a-zA-Z ]+$/.test(firstname.value)))
			{
				alert('Please characters only');
				firstname.focus();
				return false;
			}
			else
			if(firstname.value.length > 30)
			{
				alert('Max 30 characters only');
				firstname.focus();
				return false;
			}
			else if(lastname.value == '' )
			{
				alert('Please enter last name ');
				lastname.focus();
				return false;
			}	
			else
			if(!(/^[a-zA-Z]+$/.test(lastname.value)))
			{
				alert('Please characters only');
				lastname.focus();
				return false;
			}
			else
			if(lastname.value.length > 30)
			{
				alert('Max 30 characters only');
				lastname.focus();
				return false;
			}
			else if(email.value == '')
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
			else if(contact.value == '')
			{
				alert('Please enter contact ');
				contact.focus();
				return false;
			}	
			else if(address.value == '')
			{
				alert('Please enter address ');
				address.focus();
				return false;
			}
			else
			{
				return true;
			}
		}
	</script>
</html>


    <!--=========== BEGIN Top Feature SECTION ================-->
   
    <!--=========== BEGAIN Why Choose Us SECTION ================-->
    <section id="whychooseSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Why Choose Us</h2>
                <div class="line"></div>
              </div>              
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-left">
                  <div class="whychoose-slider">
                    <div class="whychoose-singleslide">
                      <img src="images/choose-us-img1.jpg" alt="img">
                    </div>
                    <div class="whychoose-singleslide">
                      <img src="images/choose-us-img2.jpg" alt="img">
                    </div>
                    <div class="whychoose-singleslide">
                      <img src="images/choose-us-img3.jpg" alt="img">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-left">
                      <a href="doctor.php" class="media-icon">
                        <span class="fa fa-hospital-o"></span>
                      </a>
                    </div>
                   <!-- <div class="media-body">
                      <h4 class="media-heading">Great Infrastructure</h4>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>  
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-user-md"></span>
                      </a>
                    </div>-->
                    <div class="media-body">
                      <h4 class="media-heading">Qualified Doctors</h4>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>  
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="emergency.php" class="media-icon">
                        <span class="fa fa-ambulance"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Emergency Support</h4>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
    <!--=========== END Why Choose Us SECTION ================-->

    <!--=========== BEGAIN Counter SECTION ================-->
   
   

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
              <p>&copy; Copyright 2019 <a href="adminProfile.php?username=<?php echo $_GET['username'] ;?> ">Medilife</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-social">              
                <a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a>
                <!--<a href="#"><span class="fa fa-twitter"></span></a>-->
                <a href="#"><span class="fa fa-google-plus"></span></a>
                <!--<a href="#"><span class="fa fa-linkedin"></span></a>-->
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
              <p>Design & Developed By <a rel="nofollow" href="adminProfile.php?username=<?php echo $_GET['username'] ;?> ">Medilife</a></p>
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
