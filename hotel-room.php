<?php
session_start();
$host="127.0.0.1";
$dbusername="root";
$dbpassword="";
$dbname="hotel_deals";
$conn= new MySQLi($host, $dbusername, $dbpassword, $dbname);


?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>भारतtrotter</title>
	<link rel="icon" type="image/ico" href="images/logo.jpg" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="css/icomoon.css">

	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		
#colorlib-hero .flexslider .flex-control-nav li a{	background: rgb(237, 228, 228) !important;}
#colorlib-hero .flexslider .flex-control-nav li a.flex-active { background: #FFDD00 !important }
	</style>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="Bharattrotter.php">भारतtrotter</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="Bharattrotter.php">Home</a></li>
								<li class="active"><a href="hotels.html">Hotels</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<?php 
									if(isset($_SESSION['user']))
									{
										echo "<li><a href='logout.php'>Logout</a></li>";
									}
									else
									{
										echo "<li><a href='login.php'>Login/Register</a></li>";
									}
								 ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Hotel Overview</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap-division">
									<div class="col-md-12 col-md-offset-0 heading2 animate-box">
										<h2><?php
										echo  $_GET["hotel"];
										?></h2>
									</div>
									<div class="row">

										<?php 
										$query = "SELECT hotel_id,wifi,spa,pool,ac,websitelink,img1,img2,deal1,deal2,deal3,about,hotelname FROM features NATURAL JOIN hotel WHERE hotelname='".$_GET["hotel"]."'";
										  
								    	$resultset = mysqli_query($conn, $query);
								    	if (mysqli_num_rows($resultset) > 0) 
								    	{
								    		while($row = mysqli_fetch_array($resultset))
											{

												echo "<div class='col-md-12 animate-box'>
											<div class='room-wrap'>
												<div class='row'>
													<div class='col-md-6 col-sm-6'>  
													<br>
														<div class='room-img' style='background-image: url(Images1/".$row['img1'].");'></div>
													</div>
													<div class='col-md-6 col-sm-6'>
														<div align='justify' class='desc'>"
																.$row['about']."									
															
															<br><br></div>
													</div>
												</div>
											</div>
										</div>

										<div class='col-md-12 animate-box'>
											<div class='room-wrap'>
												<div class='row'>
													<div class='col-md-6 col-sm-6'>
														<div class='room-img' style='background-image: url(Images1/".$row['img2'].");'></div>
													</div>
													<div class='col-md-6 col-sm-6'>
														<div class='desc'>
															<p class='hotel_facilities' >
																<ul type='none' style='font-size: 16px;'>";
																if($row['wifi']=='Y')
																{
																	echo "<li><i class='fa fa-wifi' aria-hidden='true' style='margin-right:10px'></i>wifi</li><br>";
																}else{};
																if($row['spa']=='Y')
																{
																	echo "<li><i class='fa fa-bed' aria-hidden='true' style='margin-right:10px'></i>spa</li><br>";
																}else{};
																if($row['ac']=='Y')
																{
																	echo "<li><i class='fa fa-snowflake-o' aria-hidden='true' style='margin-right:10px'></i>AC</li><br>";
																}else{};
																if($row['pool']=='Y')
																{
																	echo "<li><i class='fa fa-life-ring' aria-hidden='true' style='margin-right:10px'></i>Pool</li><br>";

																}else{}; 
																
															echo "</ul>
															</p>
															<div>
															<p style='text-align:  center; position: relative;' >"; 
																if(isset($_SESSION['user']))
																{
																	echo "<a href='".$row['websitelink']."' class='btn btn-primary'>Book Now</a>"; 
																}
																else
																{	
																	echo "<a onclick='popup()' href='login.php' class='btn btn-primary'>Book Now</a>"; 
																}
																echo "<script>
																	function popup()
																	{
																		alert('You are not Logged in yet. Please Login to continue!!');
																	}
																</script>";
																 
															echo "</p></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class='col-md-12 animate-box'>
											<div class='room-wrap'>
												<div class='row'>
													<div class='col-md-12 col-sm-12'>
														<aside id='colorlib-hero' style='background: none;height: 300px'>
															<div class='flexslider'>
																<ul class='slides' style='border:1px solid black'>
															   	<li style='background-image: url(Images1/".$row['deal1'].");height: 300px;background-size: contain;'>
															   	</li>
															   	<li style='background-image: url(Images1/".$row['deal2'].");height: 300px;background-size: contain;'>
															   	</li>
															   	<li style='background-image: url(Images1/".$row['deal3'].");height: 300px;background-size: contain;'>
															   		</li>   	
															  	</ul>
														  	</div>
														</aside>
													</div>
												</div>
											</div>
										</div>";
										
											}
										}
										else
										{
											echo "error!!";
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
					<br>
					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Find your hotel</h3>
								<form method="post" class="colorlib-form" action="extract.php" id="form2">
				              	<div class="row">
				              	<div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" name="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <button value="Find Hotel" class="btn btn-primary btn-block" type="submit" form="form2">
				                  	Find Hotel
				                  </button>
				                </div>
				              </div>
				             </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
		<div id="colorlib-subscribe" style="background-image: url(images/footer_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>

		<img src="images/Capture.png" width="100%" height="75%"></img>
	</div>
		

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

