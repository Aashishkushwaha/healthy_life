<?php

	include 'database.php';
	//include 'back_button.php';
//	session_start();
//	if(!isset($_SESSION['username']))
//	    header('location: login.php');
	
//	disable_back();
	$db = new database();
	
	$username = $_SESSION['username'];

	$sqlUserDetails = "select * from userdetails where email = '$username';";
	
	$row = $db->executeQuery($sqlUserDetails);

//	var_dump($row);
//	exit;
		function service_header()
		{
			global $row;	
              	if(isset($_SESSION['username']))
				{
	    			
	    			if($row['id'] == 10)
	    			{
					?>
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
                		<img align="center" src="images/admin.ico" height=50px width=50px><br><font size=2 color="#fff">
                	<?php
                	}
                	else
                	{
                		?>
                		<img align="center" src="images/admin_female1.gif" height=50px width=50px><br><font size=2 color="#fff">
                	<?php
                	}
                	?>
                <?php echo $row['firstname'];?>&nbsp;&nbsp;<?php echo $row['lastname'];?> (Admin)
                </font></img></li>
              </ul>
              <?php
		    		}
		    		else
		    		{
		    			?>
	    			<li><a href="userHome.php">Home</a></li>
        			</li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="fa fa-angle-down"></span></a>
                  	<ul class="dropdown-menu" role="menu">
                    <li class="active"><a href="medical-stores.php">Medical Stores</a></li>
                    <li><a href="blood-bank.php">Blood Bank</a></li>
                    <li><a href="hospital.php">Nearby Hospitals & Clinics</a></li>
                    <li><a href="emergency.php">Emergency Ambulance</a></li>
		  			<li><a href="videos.php">Videos</a></li>
                  </ul>
                </li>
                </li>
        		<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accessories <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Doctors</a></li>
                    <li><a href="#">Patients</a></li>
                  </ul>
                </li>
                </li>
                <li><a href="consultant.php">Consultant</a></li>
<!--                <li><a href="gallery.html">Gallery</a></li>-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="active"><a href="view.php">View Reports</a></li>
                    <li><a href="uploadForm.php?id=<?php echo $row['id'];?>">Upload Reports</a></li>
                  </ul>
                </li>
                <li><a href="about-us.php">About Us</a></li>
               <!-- <li><a href="contact.html">Contact</a></li>-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="edit.php?id=<?php echo $row['id'];?>">Update Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
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
       			<?php
    			}
    		}
			else
				{
			?>
            		<li><a href="index.php">Home</a></li>
					<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="fa fa-angle-down"></span></a>
                  	<ul class="dropdown-menu" role="menu">
                    <li class="active"><a href="medical-stores.php">Medical Stores</a></li>
                    <li><a href="blood-bank.php">Blood Bank</a></li>
                    <li><a href="hospital.php">Nearby Hospitals & Clinics</a></li>
                    <li><a href="emergency.php">Emergency Ambulance</a></li>
		  			<li><a href="videos.php">Videos</a></li>
                  </ul>
                </li>
                </li>
				                </li>
				<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accessories <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Doctors</a></li>
                    <li><a href="#">Patients</a></li>
                  </ul>
                <li><a href="consultant.php">Consultant</a></li>	
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>

				<?php
				}
		}
?>
