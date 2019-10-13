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
                  	<li><a href="appointments.php">View Appointments</a></li>
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
                    <li class="active"><a href="edit.php?id=<?php echo $row['id'];?>">Update Profile</a></li>
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
          <!--  <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>  -->
          </div>
        </div>
        <!-- End First slide -->
<?php

	//include "database.php";
	
	$id = $_GET['id'];
	
	$editQuery = "select * from userdetails where id = $id";
	
	$db = new database();
	
	
	$result = $db->executeQuery($editQuery);

	$_SESSION['id'] = $id;
	$_SESSION['password'] = $result['password'];
	$_SESSION['address'] = $result['address'];
	$_SESSION['security_question'] = $result['security_question'];
	$_SESSION['security_answer'] = $result['security_answer'];

/*echo $result['firstname'];
echo $result['security_question'];
echo $result['lastname'];
echo $result['email'];
echo $result['password'];
echo $result['contact'];
echo $result['address'];
echo $result['gender'];
echo $result['security_answer'];	*/
	
	?>

        <!-- Start 2nd slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/2.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><font color="#ff0000">An </font><strong>Excellent </strong><font color="#ff0000">
            web-based Application for your Health Related Problems</font></h2>
            <p><strong>Medilife</strong> suitable for any health related problems</p>
           <!-- <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>  -->
          </div>
        </div>
        <!-- End 2nd slide -->
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

	</html>
	<center>
	<head><font size=10 color="#fff"> <center>Update Your Profile</center> </font>
	<div class="line"></div>
		<title> Update Profile </title>
	</head>
	<body background="images/000000.jpg">
	<h4>
		<form name="edit" action="update.php" method="GET" onsubmit="return validate();">
			<font size=4 font-monospace="family" color="#fff">
			First Name: </font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" id="firstname" name="firstname" value="<?php echo $result['firstname'] ?>" 
			autofocus="true" style="width: 375px"><br><br>
			<font size=4 font-monospace="family" color="#fff">
			Last Name: </font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="lastname" value="<?php echo $result['lastname'] ?>"
			style="width: 375px"><br><br>
			<!--<font size=4 font-monospace="family" color="#fff">-->
			<!--Email: </font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="email" name="email" value="<?php echo $result['email'] ?>" style="width: 375px"><br><br>
			<font size=4 font-monospace="family" color="#fff">
			New-Password: </font>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="password" name="password" placeholder="<?php echo '********'; ?>" 
			style="width: 375px"><br><br>-->
			<font size=4 font-monospace="family" color="#fff">
			Contact: </font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="number" min="1111111" max="9999999999" name="contact" 
								value="<?php echo $result['contact'] ?>" style="width: 375px"></font><br><br>
			<font size=4 font-monospace="family" color="#fff">
			Address: </font>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="address" value="<?php echo $result['address'] ?>" style="width: 375px"></font><br><br>
			<font size=4 font-monospace="family" color="#fff">
			Secuirity Question: </font>
			<select name="sQues" style="width: 375px">
			<option>What is Your Nick Name ?</option>
			<option>What is Your Lucky Number ?</option>
			<option>What is Your Lucky Colour ?</option>
			<option>Who is Your Favourite Sports Person ?</option>
			<option>Who is Your Role Model ?</option>
			<option>Which is Your Favourite Destination Place ?</option>
			<option>Which is Your Birth Place ?</option>
			</select><br><br>
			<font size=4 font-monospace="family" color="#fff">
			Security Answer: </font>
			&nbsp;&nbsp;
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
			<input type="text" name="sAns"  value="<?php echo $result['security_answer'] ?>"
			style="width: 375px"></font><br><br>
			<input class="btn log" type="submit" value="Updade" name="">
		</form>
		</h4>
	</body>
	<script>
		function validate()
		{
			var firstname=document.getElementById('firstname');
			var lastname=document.edit.lastname;
			var email=document.edit.email;
			var password=document.edit.password;
			var contact=document.edit.contact;
			var address=document.edit.address;
			var gender=document.edit.gender;
			var sQues=document.edit.sQues.value;
			var sAns=document.edit.sAns;
			//echo "inside validate<br><br>";
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
			else 
			if(contact.value == '')
			{
				alert('Please enter contact ');
				contact.focus();
				return false;
			}	
			else
			if(address.value == '')
			{
				alert('Please enter address ');
				address.focus();
				return false;
			}
			else if(sAns.value == '')
			{
				alert('Please enter security answer ');
				sAns.focus();
				return false;
			}
			return true;
		}
	</script>
	</center>
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
                 <!--   <div class="media-body">
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
              <p>&copy; Copyright 2019 <a href="edit.php?id=<?php echo $_GET['id']; ?> ">Medilife</a></p>
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
              <p>Design & Developed By <a rel="nofollow" href="edit.php?id=<?php echo $_GET['id']; ?> ">Medilife</a></p>
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
