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
     <title>Medilife : Home</title>

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
	include 'services_header.php';
	//include 'back_button.php';

	//disable_back();
	$db = new database();
	
    session_start();
	$username = $_SESSION['username'];

   /* if(!isset($_SESSION['username']))
    {
    ?>
    <script>
      alert('Please Login First');
        window.location.href="login.php";
    </script>
	<?php
	}*/
	$sqlUserDetails = "select * from userdetails where email = '$username';";
	
	$row = $db->executeQuery($sqlUserDetails);
	
	$i = $_SESSION['id'];
	?>
<?php
	$adminname= $username;
	
/*	if(!$row)

	{

		echo 'User does not exist, please login again';

		exit;

	}*/
	
	$query = "select * from userdetails where email = '".$_SESSION['username']."'";
	$result = $db->fetchResult($query);
	
	$row1 = pg_fetch_array($result);
	
	
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
  			<?php 
            	session_start();
				if(!isset($_SESSION['username']))
				{
					?>
						<a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat"></i>Medilife</a>	
					<?php
				}
				else
            	if($row1[0] == 10)
				{
            	?>
              		<a class="navbar-brand" href="adminHome.php"><i class="fa fa-heartbeat"></i>Medilife</a>
            	<?php
            	}
            	else
            	{
            		?>
					<a class="navbar-brand" href="userHome.php"><i class="fa fa-heartbeat"></i>Medilife</span></a>
            	<?php
            	}
            	?>

              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                   
                                     <?php
  
	  		session_start();
			$db = new database();
	
			$username = $_SESSION['username'];

			$sqlUserDetails = "select * from userdetails where email = '$username';";
	
			$row = $db->executeQuery($sqlUserDetails);
            
              
              service_header();
                    
				?>
           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->   


    <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <h2>Contact</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <!--<li>You are here</li>
                  <li><a href="#">Home</a></li>                  
                  <li class="active">Contact</li>-->
                </ol>
              </div>
            </div>
          </div>
        </div>        
      </div>      
    </section>    
    <!--=========== BEGIN Google Map SECTION ================-->
    <!--<section id="googleMap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.297314036103!2d-86.74954699999999!3d34.672444999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88626565a94cdb25%3A0x74c206053b6a97c9!2s305+Intergraph+Way%2C+Madison%2C+AL+35758%2C+USA!5e0!3m2!1sen!2sbd!4v1431591462160" width="100%" height="500" frameborder="0" style="border:0"></iframe>
    </section>
    <!--=========== END Google Map SECTION ================-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-6">
            <div class="contact-form">
              <div class="section-heading">
                <h2>Contact Us</h2>
                <div class="line"></div>
              </div>
              <p>Fill out all required Field to send a Message. Please don't spam,Thank you!</p>
              <form class="submitphoto_form">
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name">
                <input type="mail" class="wp-form-control wpcf7-email" placeholder="Email address">          
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject">
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
               <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-envelope"></i><span>Send Message</span></button>                
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-6">
            <div class="contact-address">
              <div class="section-heading">
                <h2>Contact Information</h2>
                <div class="line"></div>
              </div>
               <p></p>
				<address class="contact-info">
                <p><span class="fa fa-home"></span>305 Kasba Peth,
                Pune - 411002, Maharashtra, INDIA</p>
                <p><span class="fa fa-phone"></span>9149154996</p>
                <p><span class="fa fa-envelope"></span>bhaktimergu11@gmail.com</p>
              </address>              <h3>Follow us On</h3>
              <div class="social-share">               
               <ul>
                 <li><a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a></li>
                 <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
               </ul>
             </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--=========== Start Footer SECTION ================-->
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
                  <li><a href="#">Dental</a></li>
                  <li><a href="#">Surgery</a></li>
                  <li><a href="#">Pediatric</a></li>
                  <li><a href="#">Cardiac</a></li>
                  <li><a href="#">Ophthalmology</a></li>
                  <li><a href="#">Diabetes</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Contact Info</h2>
                <div class="line"></div>
              </div>
              <p>You can contact to us with these addresses</p>
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
 	   <?php 
            	if($row1[0] == 10)
				{
            	?>
              		<p>&copy; Copyright 2019 <a href="contact.php">Medilife</a></p>
            	<?php
            	}
            	else
            	{
            		?>
            		<p>&copy; Copyright 2019 <a href="contact.php">Medilife</a></p>
            	<?php
            	}
            	?>
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
       			<?php 
            	if($row1[0] == 10)
				{
            	?>
              		<p>Design & Developed By <a rel="nofollow" href="adminHome.php">Medilife</a></p>
            	<?php
            	}
            	else
            	{
            		?>
            		<p>Design & Developed By <a rel="nofollow" href="userHome.php">Medilife</a></p>
            	<?php
            	}
            	?>
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
    
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
     
  </body>
</html>
