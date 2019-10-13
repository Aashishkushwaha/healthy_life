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
     <title>Medilife : Videos</title>

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
	
	
	$db = new database();
	
	$username = $_SESSION['username'];

	$sqlUserDetails = "select * from userdetails where email = '$username';";
	
	$row = $db->executeQuery($sqlUserDetails);

?>    


<?php
	$db = new database();
	
    session_start();
	$username = $_SESSION['username'];

	$sqlUserDetails = "select * from userdetails where email = '$username';";
	
	$row = $db->executeQuery($sqlUserDetails);
	
	$i = $_SESSION['id'];
	?>
<?php
	$adminname= $username;
	
	
	$query = "select * from userdetails where email = '".$_SESSION['username']."'";
	$result = $db->fetchResult($query);
	
	$row1 = pg_fetch_array($result);
	
	
?>


<?php
   // include 'services_header.php';
//	include 'database.php';
/*	
	session_start();
	if(!isset($_SESSION['username']))
	{
	    ?>
        <script>
              alert('Please Login First');
              window.location.href="login.php";
        </script>	   
        <?php
    }
*/
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
              	<?php
              	session_start();
				if(!isset($_SESSION['username']))
				{
					?>
						<a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat"></i>Medilife</span></a>	
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
					<a class="navbar-brand" href="userHome.php"><i class="fa fa-heartbeat"></i>Medilife</a>
            	<?php
            	}
            ?>
              
<!--              <a class="navbar-brand" href="uploadFile.php"><i class="fa fa-heartbeat"></i>Caring <span>For Life</span></a>    -->
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="uploadFile.php"><img src="images/logo.png" alt="logo"></a>   -->                    
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
            <?php
          		session_start();
          		if(!isset($_SESSION['username']))
          		{
          ?>
          <div class="readmore_area">
              <a data-hover="LOGIN" href="login.php"><span>Log In</span></a>
            </div>
            <?php
            }
            ?>
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
            <?php
          		session_start();
          		if(!isset($_SESSION['username']))
          		{
          ?>
          <div class="readmore_area">
              <a data-hover="LOGIN" href="login.php"><span>Log In</span></a>
            </div>
            <?php
            }
            ?>
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
            <?php
          		session_start();
          		if(!isset($_SESSION['username']))
          		{
          ?>
          <div class="readmore_area">
              <a data-hover="LOGIN" href="login.php"><span>Log In</span></a>
            </div>
            <?php
            }
            ?>
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
            <?php
          		session_start();
          		if(!isset($_SESSION['username']))
          		{
          ?>
          <div class="readmore_area">
              <a data-hover="LOGIN" href="login.php"><span>Log In</span></a>
            </div>
            <?php
            }
            ?>
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
            <?php
          		session_start();
          		if(!isset($_SESSION['username']))
          		{
          ?>
          <div class="readmore_area">
              <a data-hover="LOGIN" href="login.php"><span>Log In</span></a>
            </div>
            <?php
            }
            ?>
          </div>
        </div>
        <!-- End Fifth slide -->
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== START VIDEOS SECTION ================-->
<section id="whychooseSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Videos Section</h2>
                <div class="line"></div>
              </div>              
            </div>
          </div>
              <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-hospital-o"></span>
                      </a>
                    </div> 
                   <div class="media-body">
                     <h4 class="media-heading">Allergy</h4>
                     <p>Allergy symptoms occur when your immune system overreacts to an allergen—something that usually is harmless, such as plant pollen, dust mites, molds, insect stings or food.Allergies exist in many different forms.<br><br> Find out about the symptoms of and how to manage and treat the allergy you suffer from.</p><br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/KVmsdbcRDYA" frameborder="0" allowfullscreen></iframe>  
		<iframe width="560" height="315" src="https://www.youtube.com/embed/XytMvo1b4po" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/tASI4UrS2T0" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/MwqVPstqcOE" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/76b7icmEoOA" frameborder="0" allowfullscreen></iframe>	
		           </div> 
                  </div>
                  </div>
                </div>
              </div>
                              <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-hospital-o"></span>
                      </a>
                    </div> 
                   <div class="media-body">
                     <h4 class="media-heading">Fitness Videos</h4>
                     <p>With a focus on fitness, surf, dance, and run, FP Movement is about comfortable pieces for the free spirit.</p><br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/PQF2jzZwlC8" frameborder="0" allowfullscreen></iframe>
	        <iframe width="560" height="315" src="https://www.youtube.com/embed/rYmDnmUs-cc" frameborder="0" allowfullscreen></iframe>
	        <iframe width="560" height="315" src="https://www.youtube.com/embed/BJsI_42rfkU" frameborder="0" allowfullscreen></iframe>
	        <iframe width="560" height="315" src="https://www.youtube.com/embed/-OKcq-AQmeY" frameborder="0" allowfullscreen></iframe>
	        <iframe width="560" height="315" src="https://www.youtube.com/embed/OC9VbwyEG8U" frameborder="0" allowfullscreen></iframe>
	        	<iframe width="560" height="315" src="https://www.youtube.com/embed/VkBxPdqczzo" frameborder="0" allowfullscreen></iframe>
	               </div> 
                  </div>
                  </div>
                </div>
                
                
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-hospital-o"></span>
                      </a>
                    </div> 
                   <div class="media-body">
                     <h4 class="media-heading">Yoga</h4>
                     <p>Harmonize your body, mind and inner self.</p><br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/8uAz-0ADqd4" frameborder="0" allowfullscreen></iframe>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/l-OaibCr0Pk" frameborder="0" allowfullscreen></iframe>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/yir1PJLG37k" frameborder="0" allowfullscreen></iframe>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/9Gw5QJPR52k" frameborder="0" allowfullscreen></iframe>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/0fA-ibsLmZc" frameborder="0" allowfullscreen></iframe>	
						<iframe width="560" height="315" src="https://www.youtube.com/embed/gs-x4tNIGbw" frameborder="0" allowfullscreen></iframe>
		           </div> 
                  </div>
                  </div>
                </div>
                
                                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-hospital-o"></span>
                      </a>
                    </div> 
                   <div class="media-body">
                     <h4 class="media-heading">Surgery</h4>
                     <p>Here are some videos to helping you in surgery problems.</p><br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/VzSq-88Ibak" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/p3z9FLYijrQ" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/mgGxY78a9OI" frameborder="0" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/cTD03LHC8ew" frameborder="0" allowfullscreen></iframe>
		<br> <!--<a data-hover="See More" href="more.html"><span>See More</span></a>-->
                   </div> 
                  </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
    <!--=========== END VIDEOS SECTION ================-->
    

            </div>
          </div>          
        </div>
      </div>
    </section>
    <!--=========== START VIDEOS SECTION ================-->
    
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
              <p>&copy; Copyright 2019 <a href="videos.php">Medilife</a></p>
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
              <p>Design & Developed By <a rel="nofollow" href="videos.php">Medilife</a></p>
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
