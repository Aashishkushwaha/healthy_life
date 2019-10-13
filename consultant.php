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
     <title>Medilife : Consultant</title>

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


<!--              <a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat"></i>Caring <span>For Life</span></a>   -->
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

<!--            <div class="readmore_area">
              <a data-hover="LOGIN" href="login.php"><span>Log In</span></a>                
            </div>            -->
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

<!--            <div class="readmore_area">
	   			<a data-hover="LOGIN" href="login.php"><span>Log In</span></a>
            </div>-->
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
        
        <!--    <div class="readmore_area">
			   <a data-hover="LOGIN" href="login.php"><span>Log In</span></a>
            </div>  -->
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
            
            <!--<div class="readmore_area">
			   <a data-hover="LOGIN" href="login.php"><span>Log In</span></a>
            </div>-->
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
            <!--<div class="readmore_area">
	   			<a data-hover="LOGIN" href="login.php"><span>Log In</span></a>
            </div>-->
          </div>
        </div>
        <!-- End Fifth slide -->
      </div><!-- /top-slider -->
    </section><br><br>
    <!--=========== END SLIDER SECTION ================-->
   
   
   
		    <!--===========For Patient and DOC=================---->
	<div class="row"></div>
    <br> <center> <h4><p>
     	<form name="Search" action="consultant.php" method="GET"> <!--action="newMap.php" method="POST" >-->

        	Search Department :
		<select name="doctor">
			<option>Gynecologist</option>
			<option>Cancer</option>
			<option>Cardiologist</option>
			<option>Dermatologist</option>
			<option>Neurologist</option>
			<option>Pediatrician</option>
			<option>Psychiatrist</option>
			<option>Surgeon</option>
			</select></br></br>
			
			<!--
			<select name="doctor">
			<option>Taj Mahal</option>
			<option>Hotels</option>
			<option>Doctors</option>
			<option>Pubs</option>
			<option>Petrol Pump</option>
			<option>theater</option>
			<option>colleges</option>
			<option>Railway Station</option>
			<option>Air Port</option>
			<option>Museum</option>
			<option>Space Computer Education	</option></select></br></br>-->

	
<!--        Location :<input type="text" placeholder="Near You"></br></br>-->
				<input type="submit" value="Search" >

		</center>
	</form>
       <?php
	$db = new database();
	
    session_start();
	$username = $_SESSION['username'];
	
		
	$type = $_GET['doctor'];
	
	$sqlUserDetails = "select * from consultant where type = '$type';";
	
	
	$result = pg_query($sqlUserDetails);
			
	$i = $_SESSION['id'];
	?>

<?php

	if($type==null)
	{
?>
    <!--=========== BEGAIN Home Blog SECTION ================-->
<section id="homeBLog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="homBlog-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Our Doctors</h2>
                <div class="line"></div>
              </div> 
              <!-- Start Home Blog Content -->
              <div class="homeBlog-content">
                <div class="row">
                  <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <!--<ul class="blog-comments-box">
                          <li>July <h2>09</h2>2014</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>-->
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
                        <!--<ul class="blog-comments-box">
                          <li>Sep <h2>13</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>-->
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
                        <!--<ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>-->
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
 <?php
 }
 else
 {
 	$arr = array();
 	$i = 0;
 	while($row=pg_fetch_array($result))
	{
		//echo"In While LOOp";
		$arr[$i++] = $row[0]; 
		$arr[$i++] = $row[2];
		$arr[$i++] = $row[3];
		$arr[$i++] = $row[4];
		?>
		<!--<?php echo $row[0]; ?>
        <?php echo $row[1]; ?>
        <?php echo $row[2]; ?>-->
        <?php
	}
	
 ?>
 
 <section id="homeBLog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="homBlog-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Our Doctors</h2>
                <div class="line"></div>
              </div> 
              <!-- Start Home Blog Content -->
              <div class="homeBlog-content">
                <div class="row">
                  <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <!--<ul class="blog-comments-box">
                          <li>July <h2>09</h2>2014</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>-->
                      </div>
                      <div class="single-blog-right">
                        <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="doctors/<?php echo $arr[1];?>" height="250" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#"><?php echo $arr[0];?></a></li>
                            <h5>Address: <?php echo $arr[2];?> </h5>
                            <!--li>In <a href="#">IVF</a></li>-->
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2><?php echo $arr[3];?></p>
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
                        <!--<ul class="blog-comments-box">
                          <li>Sep <h2>13</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>-->
                      </div>
                      <div class="single-blog-right">
                         <div class="blog-img">
                           <figure class="blog-figure">
                           <a href="#"><img src="doctors/<?php echo $arr[5];?>" height="250" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#"><?php echo $arr[4];?></a></li>
                            <h5>Address: <?php echo $arr[6];?> </h5>
                            <!--li>In <a href="#">IVF</a></li>-->
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2><?php echo $arr[7];?></p>
                        <!--  <div class="readmore_area">
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
                        <!--<ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>-->
                      </div>
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="doctors/<?php echo $arr[9];?>" height="250" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#"><?php echo $arr[8];?></a></li>
                            <h5>Address: <?php echo $arr[10];?> </h5>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <p><h2><?php echo $arr[11];?></p>
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

 <?php
 }
 ?>   
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
                  <li><a href="http://www.mercola.com/diabetes.aspx">Diabetes</a></li>         </ul>
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
 	      <p>&copy; Copyright 2019 <a href="consultant.php">Medilife</a></p>
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
          <div class="row">
        <div class="container">
     	   <div class="col-md-12">
              <p>Design & Developed By <a rel="nofollow" href="consultant.php">Medilife</a></p>
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
