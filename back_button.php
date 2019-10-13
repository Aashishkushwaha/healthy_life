<?php

	function disable_back()
	{
		session_start();
		if(!isset($_SESSION['username']))
		{
		?>
			<script>
				//alert('Please Login First');
				window.location.href="login.php";
			</script>
		<?php
		}
	}

?>
