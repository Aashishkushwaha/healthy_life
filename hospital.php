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
     <title>Care for life : Hospital</title>

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
//	include_once 'database.php';
	
	session_start();

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

<!--              <a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat"></i>Medilife</a>  -->
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
		<?php
          		session_start();
          		if(!isset($_SESSION['username']))
          		{
          ?>
          		<div class="readmore_area">
              		<a data-hover="LOGIN" href="login.php"><span>Log In</span></a>
            	</div>
            	<br><br>
            	<center><h2 style="margin-top:30px; margin-bottom: -15px;">Near-By Hospitals & Clinics</h2></center>
                <div class="line" style="margin: 0 auto;" ></div>
            <?php
            }
            else
            {
            ?>

   				<br><br>
   				<center><h2 style="margin-top:30px; margin-bottom: -15px;">Near-By Hospitals & Clinics</h2></center>
                <div class="line"></div>
        	<?php
        	}
        	?>
        </div>
    <!--=========== END SLIDER SECTION ================-->

<!--=========== BEGAIN MAP SECTION ================-->
    <section id="whychooseSection">
      <div class="container">
        <div class="row">

    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 700px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
      var infowindow;

      function initMap() {

		if (navigator.geolocation)
      	{
      		navigator.geolocation.getCurrentPosition(location);
      	}

		function location(position)
 		{
//			var pyrmont = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		
		var lat = position.coords.latitude;
		var lng = position.coords.longitude;
//        var pyrmont = {lat: 18.509560, lng: 73.857270};
        var pyrmont = {lat , lng};

//		alert(pyrmont.lat);

		console.log(pyrmont);
        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 15
        });

        infowindow = new google.maps.InfoWindow();

         var request = {
    location: pyrmont,
    radius: '500',
    query: 'hospital and clinics'
  };

	
	console.log(request);

  service = new google.maps.places.PlacesService(map);
  service.textSearch(request, callback);
}
}


      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
//            console.log(results[i]);
          }
        }
      }

      function createMarker(place) {

        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          //infowindow.setContent(place['name']);
          infowindow.setContent('<div> <strong><h2> ' + place.name + '</strong> '
          					+ '<br><h3>' + place.formatted_address + '</div>' + '<img src = \"' + place.icon + '\"' + '</div>');
          infowindow.open(map, this);
        });
      }
    </script>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLke0X1dWvkBqWFzGlqeMuG-f88b-A9yQ&libraries=places&callback=initMap" async defer></script>

        </div>
      </div>
    </section>
    <!--=========== END MAP SECTION ================-->


    <!--=========== BEGAIN Home Blog SECTION ================-->
    <section id="homeBLog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="homBlog-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Search for Nearby hospitals</h2>
                <div class="line"></div>
   	       <center> <h4><p>
                <form action="map.php" method="GET">
	<!--	Text:<input type="text" name="hospital">
	       <input type="submit" name="submit">
        -->    
                Location :<input type="text" name="hospital" placeholder="Near You"></br></br>
				<input type="submit" value="Search" >
		</form></center></h4></p>
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
 	      <p>&copy; Copyright 2019 <a href="hospital.php">Medilife</a></p>
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
              <p>Design & Developed By <a rel="nofollow" href="hospital.php">Medilife</a></p>
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
