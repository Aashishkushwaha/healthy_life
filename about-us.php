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
     <title>Medilife : About Us</title>

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

	<script>
		//alert('<?php echo "Session id: ".$_SESSION[username]; ?>');
	</script>	 

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
					<a class="navbar-brand" href="userHome.php"><i class="fa fa-heartbeat"></i>Medilife</a>
            	<?php
            	}
            ?>


             <!-- <a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat"></i>Caring <span>For Life</span></a> -->
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
       <!--         <li><a href="index.php">Home</a></li>
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
                <li><a href="consultant.html">Consultant</a></li>
                <li class="active" ><a href="about-us.html">About Us</a></li>          
                <li><a href="contact.html">Contact</a></li>
              </ul>           -->
              
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

<!--=========== BEGAIN Why Choose Us SECTION ================-->
    <section id="whychooseSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <br><br><h2>Why Choose Us</h2>
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
                        <span class="fa fa-user-md"></span>
                      </a>
                    </div>
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
    <!--=========== BEGAIN Home Blog SECTION ================-->
    <section id="homeBLog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="homBlog-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>News From Blog</h2>
                <div class="line"></div>
              </div> 
              <!-- Start Home Blog Content -->
              <div class="homeBlog-content">
                <div class="row">
                  <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>July <h2>09</h2>2014</li>
                          <li><span class="fa fa-eye"></span>1197</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                        <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/malpani.jpeg" height="250" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Dr. Malpani</a></li>
                            <li>In <a href="#">IVF</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>Why do patients settle for second best IVF doctors ?</h2>
                          <p>I often see patients who've been to poor quality IVF clinics. Now I can understand that they may go to a bad clinic for their first cycle because they don't know any better, but by the time they've done a second and third cycle they should be able to start realizing that the quality of care they're getting is very poor. When there's no transparency; no documentation; no counselling; and  they don't get any photos of their embryos, these are clear fed flags that the quality of care is poor. However, they continue going to the same clinic even though they are not happy with the doctor.</p>
                        <!--  <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                        --></div>
                      </div>
                    </div>
                  </div>
                   <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>Sep <h2>13</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1200</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/Dr-Jagdish-Hiremath.png" height="250" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Dr.J.Hiremath</a></li>
                            <li>In <a href="#">Heart </a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>Stress And Heart </h2>
                          <p>Heart is the “romantic” aspect of human life and appears in every poem and love story. From the bottom of my heart means from deep within my mind!
The connection between the heart and the mind is known to us from childhood. A fear would induce feeling of awareness of heart beat (palpitation). Teenage romance would make heart beat faster than ever before. All these experiences start connecting the heart and the mind and one feels heart is the mind! Unfortunately or fortunately, medical science is away from poetic imagination and romanticism. Heart is an important organ which can get affected by stress of the mind.</p>
                     <!--     <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                    -->    </div>
                      </div>
                    </div>
                  </div>
                   <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1500</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/p_k_grant.jpg" height="250" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Dr. P.K.Grant</a></li>
                            <li>In <a href="#">Cardiologist</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>Cardiologist</h2>
                          <p>DR. P. K. GRANT is the Chief Cardiologist, and Chairman of Cardiovascular services & Managing Trustee of the Ruby Hall Clinic, Pune.
The Ruby Hall Cardiac Centre was established 20 years ago and today it is one of the pioneer Cardiac Institutions in India.
The Institution has done over 1,00,000 angiographies, 50,000 angioplasties and 50,000 Open Heart Surgeries including coronary bypass surgery. The Ruby Hall Cardiac Centre does more coronary interventional procedures like angioplasty & stenting than any other institution in India, an achievement of which Pune City is proud of. Over 45 International Cardiology meetings have been held at Ruby Hall Clinic organized by Dr. P. K. GRANT. Dr. Grant organized two-world congress in Mumbai one in 1999 and the second in Feb 2005.</p>
            <!--              <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div> -->
                        </div>
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

    <!--=========== End Home Blog SECTION ================-->
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
              		<p>&copy; Copyright 2019 <a href="adminHome.php">Medilife</a></p>
            	<?php
            	}
            	else
            	{
            		?>
            		<p>&copy; Copyright 2019 <a href="userHome.php">Medilife</a></p>
            	<?php
            	}
            	?>
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
            <?php 
            	if($row1[0] == 10)
				{
            	?>
              		<p>Design & Developed By <a rel="nofollow" href="about-us.php">Medilife</a></p>
            	<?php
            	}
            	else
            	{
            		?>
            		<p>Design & Developed By <a rel="nofollow" href="about-us.php">Medilife</a></p>
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
