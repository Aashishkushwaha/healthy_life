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
     <title>Medilife : Login</title>

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
		<head><font size=20 font-monospace="family" color="#fff">&nbsp;&nbsp;<br>Login</font>
			    <div class="loginline"></div><br>
            <title> Login Page </title>
		</head>
		<body>
		<h4>
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
		<form name="login" action="authenticate.php" method="POST" onsubmit="return validate();">
			<B><font size=4 font-monospace="family" color="#fff">
			Email: </font><font size=5 color="#ff0000">*</font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="username" placeholder="Email"><br><br>
			<font size=4 font-monospace="family" color="#fff">
			Password: </font><font size=5 color="#ff0000">*</font>
			<input type="password" name="password" placeholder="Password"><br><br></B>
			<input class="btn log" type = "submit" value="Log in">
		</form>
		<br><a href="registerForm.php"><font size=4 font-monospace="family" color="#fff"><u>New User! Register Yourself</u></font></a><br><br>
		<a href="forgot.php"><font size=4 font-monospace="family" color="#fff"><u>Forgot Password</u></font></a>
	</h3>
	</body>
		<script>
			function validate()
			{
				var email=document.login.username;
				var password=document.login.password;
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
				else if(password.value == '')
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
				return true;
			}
		</script>
</html>


  



        <!-- End Single Top Feature -->
         
  
  
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

  
    <!--=========== BEGIN Top Feature SECTION ================--
    <section id="topFeature">
      <div class="row">
        

        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature-login">
<!--              <span class="fa fa-flask"></span>--

	<html>
		<head><font size=20 font-monospace="family" color="#fff">&nbsp;&nbsp;<br><u>Login</u></font>
			    <div class="loginline"></div><br>
            <title> Login Page </title>
		</head>
		<body>
		<h4>
		<form name="login" action="authenticate.php" method="POST" onsubmit="return validate();">
			<B><font size=4 font-monospace="family" color="#fff">
			<!--Email:-- </font>
			<input type="text" name="username" placeholder="Email"><br><br>
			<font size=4 font-monospace="family" color="#fff">
			<!--Password:-- </font>
			<input type="password" name="password" placeholder="Password"><br><br></B>
			<input type = "submit" value="Log in">
		</form>
		<br><a href="registerForm.php"><font size=4 font-monospace="family" color="#fff"><u>New User! Register Yourself</u></font></a><br><br>
		<a href=""><font size=4 font-monospace="family" color="#fff"><u>Forgot Password</u></font></a>
	</h3>
	</body>
		<script>
			function validate()
			{
				var email=document.login.username;
				var password=document.login.password;
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
				else if(password.value == '')
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
				return true;
			}
		</script>
</html>


            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
<!--              <span class="fa fa-flask"></span>--

            </div>
          </div>
        </div>



        <!-- End Single Top Feature -->
         
        <!-- Start Single Top Feature 
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-hospital-o"></span>
              <h3>Appointment</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              <div class="readmore_area">
                <a data-toggle="modal" data-target="#myModal" href="#" data-hover="Appoinment"><span>Appoinment</span></a>    
              </div>
              <!-- start modal window 
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Appoinment Details</h4>
                    </div>
                    <div class="modal-body">
                      <div class="appointment-area">
                        <form class="appointment-form">
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your name <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your Email <span class="required">*</span>
                              </label>
                              <input type="mail" class="wp-form-control wpcf7-email" placeholder="Email address">  
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your Birth <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your Phone <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="Phone No">  
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Appointment Date <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Select Department <span class="required">*</span>
                              </label>
                              <select class="wp-form-control wpcf7-select">
                                <option val="1">Dental</option>
                                <option val="2">cardiology</option>
                                <option val="3">neurology</option>
                                <option val="4">Drugstore</option>
                                <option val="5">x-ray</option>
                                <option val="6">birth</option>
                                <option val="7">general</option>
                                <option val="8">testing</option>
                                <option val="9">first-aid</option>
                                <option val="10">immunizations</option><option val="11">pulmonary</option>
                              </select> 
                            </div>
                          </div>         
                          <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject">
                          <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
                         <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Book Appointment</span></button>  
                        </form>
                      </div>
                    </div>                    
                  </div><!-- /.modal-content 
                </div><!-- /.modal-dialog 
              </div><!-- /.modal 
            </div>
          </div>
        </div>
        <!-- End Single Top Feature 	
      </div>
    </section>
    <!--=========== END Top Feature SECTION ================-->


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
              <p>&copy; Copyright 2019 <a href="login.php">Medilife</a></p>
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
              <p>Design & Developed By <a rel="nofollow" href="login.php">Medilife</a></p>
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
