
<?php
		function loggedin()
		{
			?>
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
		<?php
         }
?>

