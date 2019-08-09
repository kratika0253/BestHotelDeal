<!DOCTYPE html>
<!-- <html lang="en"> -->
<head>
	<title>भारतtrotter</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<!--===============================================================================================-->	
	<link rel="icon" type="image/ico" href="images/logo.jpg" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login-vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login-fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login-fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login-vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login-vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login-vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login-vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login-vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login-css/util.css">
	<link rel="stylesheet" type="text/css" href="Login-css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	<?php 
		if (isset($_GET['registered'])) {
			echo "<script>alert('successfully signed up!!')</script>";
		}
	 ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="check.php" id="form1">
					<span class="login100-form-title p-b-43" style="padding-top:10px">
						Login to continue
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Must contain 8 to 20 characters with an uppercase, a lowercase alphabet, a digit and a special character.">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div style="margin-left: auto; padding-bottom:0px">
							<a href="forgetpassword.html" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" form="form1">
							Login
						</button>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							OR
							<hr>
							</span>
						</div>
						<input type="button" value="Sign Up" class="signup" onclick="register()">
					</div>

				</form>

				<div class="login100-more" style="background-image: url('Login-images/hii.jpg');">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="bharattrotter.php">भारतtrotter</a></div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	function register()
     {
        window.open("Register.php","_self");
     }
 	</script>
	
	

	
	
<!--===============================================================================================-->
	<script src="Login-vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login-vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login-vendor/bootstrap/js/popper.js"></script>
	<script src="Login-vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login-vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login-vendor/daterangepicker/moment.min.js"></script>
	<script src="Login-vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login-vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login-js/main.js"></script>

</body>
</html>