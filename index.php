<?php
	require_once('initialize.php');

	if ( isset($_POST['email'])) {
		if( !empty($_POST['phone']) ) {
			header('Location: http://www.fbi.gov/');
			die();
		}
			
		$name = $_POST['name'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$sport = implode(", ", ($_POST['sport']));
		$site_launch = $_POST['site_launch'];
		$site_updates = $_POST['site_updates'];

		new Data($name, $email, $city, $state, $sport, $site_launch, $site_updates);
	}
?>	
<!DOCTYPE html>
<html lang="en">
	 <head>
		<title>utryout.com</title>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="icon" type="image/png" href="http://mac.utryoutform.com/baseball-favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="cover.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    	<!--[if lt IE 9]>
      		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
	 </head>
	 <body>
	 	<div class="site-wrapper">

      		<div class="site-wrapper-inner">

        		<div class="cover-container">

	          		<div class="inner cover">
	            		<?php 
	            			if (isset($_POST['email'])) {
	            				require_once ('thanks.php');
	            			} else {
	            				require_once('form.php');
	            			}
	            		?>
						<p>An AthleTech Software Application &copy;2015</p>
						<p class="courtesy">Photo Courtesy: Mette McConnell</p>
	          		</div>

      			</div>

    		</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	 </body>
</html>