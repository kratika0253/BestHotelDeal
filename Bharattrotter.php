<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<title>भारतtrotter</title>
	<link rel="icon" type="image/ico" href="images/logo.jpg" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/icomoon.css">

	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/style.css">

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
								<li class="active"><a href="Bharattrotter.php">Home</a></li>
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
									};
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
			   	<li style="background-image: url(images/Mussoorie.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Incredible India</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/indore.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>From Kashmir to Kanyakumari</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/forest.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1> With The Best Hotel Deals</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/hotelroom.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Experience The Best Trip Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
					<div class="search-wrap">
	
						<div class="tab-content">
							<div id="hotel">
								<form method="post" method="post" class="colorlib-form" action="extract1.php" id="form1">
				              	<div class="row">
				              	 <div class="col-md-3">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" name="location" class="form-control" placeholder="Search Location">
				                    </div>
				             
								</div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#" style="background-color:rgba(0,0,0,0.8)">1</option>
				                        <option value="#" style="background-color:rgba(0,0,0,0.8)">2</option>
				                        <option value="#" style="background-color:rgba(0,0,0,0.8)">3</option>
				                        <option value="#" style="background-color:rgba(0,0,0,0.8)">4</option>
				                        <option value="#" style="background-color:rgba(0,0,0,0.8)">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <button value="Find Hotels" class="btn-primary btn btn-block" type="submit" form="form1">
				                  	Find hotels
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

		<div class="colorlib-tour">
			<div class="container" >
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Popular Destinations</h2>
						<p>Inspiring Destinations within your reach.<br>Beautiful oneday, perfect the next.</p>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
				<a class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/cover-img-1.jpg);">
					</div>
				</a>
				<a class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/blog-4.jpg);">
					</div>
				</a>
				<a class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/cover-img-4.jpg);">
					</div>
				</a>
				<a class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/img_bg_2.jpg);">
					</div>
				</a>
				<a class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/cover-img-3.jpg);">
					</div>
				</a>
				<a class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/img_bg_4.jpg);">
					</div>
				</a>
				<a class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tajmahal.jpg);">
					</div>
				</a>
				<a class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-5.jpg);">
					</div>
				</a>
			</div>
		</div>


		<!-- <div id="colorlib-hotel"> -->
			<div id="colorlib-hotel" class="container" style="padding-top: 0px">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Luxurious Hotels</h2>
						<p>Discover a Hotel that defines a new dimension of luxury.<br>Best hosts from Mountains to Coasts</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-1.jpg);">
										<p class="price"><span>&#8377 45000</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">Four Seasons Hotel</a></h3>
										<span class="place">Mumbai,India</span>
										<p>Set in the business and commercial hub of Worli, Four Seasons Hotel Mumbai brings unparalleled service and hospitality to one of the cities' most desirable neighborhoods.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-7.jpg);">
										<p class="price"><span>&#8377 31,000</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#"></a>Radisson Blu, Cavelossim Beach</h3>
										<span class="place">Goa,India</span>
										<p>The Radisson Blu Resort Goa Cavelossim Beach, features brightly colored architecture and lush gardens to create an atmosphere that invites relaxation. Its your home away from home. </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-6.jpg);">
										<p class="price"><span>&#8377 25,000</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">Oberoi Palace</a></h3>
										<span class="place">Mumbai, India</span>
										<p>The Oberoi, Mumbai enjoys an unrivalled position on the exclusive Marine Drive, with unparalled views of the ocean and the Queen's Necklace. A golden crescent of lights that adorns the shoreline after dark.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-9.jpg);">
										<p class="price"><span>&#8377 39,000</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">Umaid Bhavan</a></h3>
										<span class="place">Jodhpur, India</span>
										<p>Run by a family of Rathores, Hotel Umaid Bhawan is one of the finest of Jaipur hotels. Built in traditional style, with beautifully carved balconies, attractive courtyards, open terraces, lovely garden and comfortable rooms.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	

		<div id="colorlib-subscribe" style="background-image: url(images/footer_1.jpg);" data-stellar-background-ratio="0.2">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe" method="post" action="subscribe.php">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
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
		
	<script src="js/jquery.min.js"></script>
	
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/owl.carousel.min.js"></script>

	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>