<?php
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>POSNIC - Login to Control Panel</title>
	
	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/cmxform.css">
	<link rel="stylesheet" href="js/lib/validationEngine.jquery.css">
	
	<!-- Scripts -->
	<script src="js/lib/jquery.min.js" type="text/javascript"></script>
	<script src="js/lib/jquery.validate.min.js" type="text/javascript"></script>


	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>
<body>

	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
		
			<!--<a href="#" class="round button dark ic-left-arrow image-left ">See shortcuts</a>-->

		</div> <!-- end full-width -->	
	
	</div> 
	<!-- end top-bar -->
	
	
	
	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="login-intro" class="fl">
			
				<h1>Login to Dashboard</h1>
				<h5>Enter your credentials below</h5>
			
			</div> <!-- login-intro -->

			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<a href="http://posnic.com/" id="company-branding" class="fr"  target="blank"><img src="<?php if(isset($_SESSION['logo'])) { echo "upload/".$_SESSION['logo'];}else{ echo "upload/posnic.png"; } ?>" alt="Point of Sale" /></a>
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
	
	<!-- MAIN CONTENT -->

	<div id="content">

		<form action="checklogin.php" method="POST" id="login-form" class="cmxform">
		
			<fieldset>
				<p>
					<label>
						<h1 style="font-family: Georgia; font-weight: bold; font-size:20px; color: green;" align="center">
							POSNIC - Point of Sale
						</h1>
					</label>
				</p>
				<p> 
				</p>
				<p>
                                    <label>Username</label>
                                        <input type="text" id="login-username" class="round full-width-input" placeholder="Enter Username" name="username" autofocus  />
				</p>

				<p>
                                <label>Password</label>
                                        <input type="password" id="login-password" name="password" placeholder="Enter Password" class="round full-width-input"  />
				</p>
				
                                <a href="forget_pass.php" class="button ">Forgot your password?</a>
				
				<!--<a href="dashboard.php" class="button round blue image-right ic-right-arrow">LOG IN</a>-->
				<input type="submit" class="button round blue image-right ic-right-arrow" name="submit" value="LOG IN" />
			</fieldset>

			<br/>
                        
                </form>

	</div> <!-- end content -->


</body>
</html>