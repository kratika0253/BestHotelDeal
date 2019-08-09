<?php
session_start();
$host="127.0.0.1";
$dbusername="root";
$dbpassword="";
$dbname="hotel_deals";
$conn= new MySQLi($host, $dbusername, $dbpassword, $dbname);
$results_per_page = 6; // number of results per page

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>भारतtrotter</title>
	
	<link rel="icon" type="image/ico" href="images/logo.jpg" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
		<script src="js/jquery.min.js"></script>

	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css"> 
	#last_page {
		pointer-events: none;
		cursor: not-allowed;
	}
	</style>
	</head>
	<body>
	<?php
		if(isset($_GET['data']))
		{
			echo "<script>alert('No Data Found :(');</script>";
		}
	 ?>
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
					<?php 
					$query3 = "SELECT imgcity FROM city WHERE city='".$_SESSION["City"]."'";
					$resultset3 = mysqli_query($conn, $query3);
					$row3 = mysqli_fetch_array($resultset3);
					 if (mysqli_num_rows($resultset3) > 0) 
				    {
				   	echo "<li style='background-image: url(images1/".$row3['imgcity'].");'>";
			   		}
			   		else
			   		{
			   			echo "error	!!";
			   		};
			   	?>
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1><?php
										// Echo session variables that were set on previous page
										echo  $_SESSION["City"];
									?></h1>
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
							<div class="wrap-division">
							<?php 
								$city= ucfirst($_SESSION["City"]);
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
								// echo $_GET["page"];
								$start_from = ($page-1) * $results_per_page;

								//code for filter and if area is given then includes results with area
								if (isset($_GET["filter"])) 
								{ 
									if(isset($_GET['area']))
										{
											if ($_GET["area"]!="")
											{
												$query = "SELECT hotelname,ROUND(rating) as rating,price,image,location FROM `hotel` natural join features WHERE location='".$_GET['area']."' AND city='".$city."' AND price BETWEEN ".$_GET['price_from']." AND ".$_GET['price_to'];
												$query2 = "SELECT COUNT(hotel_id) AS total FROM hotel natural join features WHERE location='".$_GET['area']."' AND city='".$city."' AND price BETWEEN ".$_GET['price_from']." AND ".$_GET['price_to'];
											}
										}
									else 
									{
										$query = "SELECT hotelname,ROUND(rating) as rating,price,image,location FROM `hotel` natural join features WHERE city='".$city."' AND price BETWEEN ".$_GET['price_from']." AND ".$_GET['price_to'];
										$query2 = "SELECT COUNT(hotel_id) AS total FROM hotel natural join features WHERE city='".$city."' AND price BETWEEN ".$_GET['price_from']." AND ".$_GET['price_to'];
									};
									if(isset($_GET['rating'])) { 
										if($_GET['rating']==5)
										{
											$query=$query." AND ROUND(rating)=5";
											$query2=$query2." AND ROUND(rating)=5";
										}
										else
										{
											$query=$query." AND ROUND(rating)=".$_GET['rating'];
											$query2=$query2." AND ROUND(rating)=".$_GET['rating'];
										}
									}
									if(isset($_GET['wifi'])) { 
										$query=$query." AND wifi='Y'";
										$query2=$query2." AND wifi='Y'";
									}
									if(isset($_GET['spa'])) { 
										$query=$query." AND spa='Y'";
										$query2=$query2." AND spa='Y'";
									}
									if(isset($_GET['pool'])) { 
										$query=$query." AND pool='Y'";
										$query2=$query2." AND pool='Y'";
									}
									if(isset($_GET['ac'])) { 
										$query=$query." AND ac='Y'";
										$query2=$query2." AND ac='Y'";
									}
									$query = $query." LIMIT ".$start_from.",".$results_per_page;
								}

								//code when filter is not given and if area is given create query for that else the base query is applied
								else 
								{ 
									$query = "SELECT hotelname,ROUND(rating) as rating,price,image,location FROM hotel WHERE  city='".$city."' LIMIT ".$start_from.",".$results_per_page;
									if (isset($_GET['area'])) 
									{
										if ($_GET["area"]!="")
										{
											$query = "SELECT hotelname,ROUND(rating) as rating,price,image,location FROM hotel WHERE location='".$_GET['area']."' AND city='".$city."' LIMIT ".$start_from.",".$results_per_page;
											$query2 = "SELECT COUNT(hotel_id) AS total FROM hotel natural join features WHERE location='".$_GET['area']."' AND city='".$city."' LIMIT ".$start_from.",".$results_per_page;
										}
									}
									
								};
															//counting pages
									$resultset = $conn->query($query);
									$sql = "SELECT COUNT(hotel_id) AS total FROM hotel WHERE city='".$city."'";
									

									if (isset($_GET['area'])) 
									{
										// echo "Hello";
										$sql = $query2;
									}

									if (isset($_GET['filter'])) 
									{
										// echo "Hello";
										$sql = $query2;
									}
									

									$result2 = $conn->query($sql);
									$row = $result2->fetch_assoc();
									// echo $row["total"];
									$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
							    if (mysqli_num_rows($resultset) > 0) 
							    {
							    	while($row = mysqli_fetch_array($resultset))
									{

									echo "<div class='col-md-6 col-sm-6 animate-box'>
										<div class='hotel-entry'>";
										            echo "<a href='#' class='hotel-img' style='background-image: url(images/".$_SESSION['City']."/".$row['image'].");'>";
													echo "<p class='price' id='hotel_price'><span>₹".$row['price']."</span><small> /night</small></p>";
													echo "</a>";
													echo "<div class='desc'>";
													echo "<p class='star'>

															<span>";
																if($row['rating']>=1 && $row['rating']<2)
																{
																	echo "<i class='icon-star-full'></i>";
																} 
																if($row['rating']>=2 && $row['rating']<3)
																{
																	echo "<i class='icon-star-full'></i><i class='icon-star-full'></i>";
																}
																if($row['rating']>=3 && $row['rating']<4)
																{
																	echo "<i class='icon-star-full'></i><i class='icon-star-full'></i><i class='icon-star-full'></i>";
																}
																if($row['rating']>=4 && $row['rating']<5)
																{
																	echo "<i class='icon-star-full'></i><i class='icon-star-full'></i><i class='icon-star-full'></i><i class='icon-star-full'></i>";
																}
																if($row['rating']>=5)
																{
																	echo "<i class='icon-star-full'></i><i class='icon-star-full'></i><i class='icon-star-full'></i><i class='icon-star-full'></i><i class='icon-star-full'></i>";
																};
																
															echo "</span>";
																echo(rand(200,600)); echo" Reviews</p>
														<h3><a href='#' class='hotel_name'>".$row['hotelname']."</a></h3>
														<span class='place'>".$row['location']."</span>
												</div>";
								   echo "</div>
								</div>";
									}
								}
									else
									{
										echo "No Data Found!!";
									}
							?>
								<script type="text/javascript">
									$('.hotel_name').click(function() {
									    var content = $(this).text();
									    window.location = 'hotel-room.php?hotel=' + content;
									} );
								</script>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<?php 
									for ($i=1; $i<=$total_pages; $i++) {
									            if($i==$total_pages)
									            {	
									            	if(isset($_GET['filter']))
									            	{
									            		$url = "&filter=true";

									            		if(isset($_GET['price_to'])) 
									            		{
								            				$url=$url."&price_to=".$_GET['price_to'];
									            		}
									            		if (isset($_GET['price_from'])) 
									            		{
								            				$url=$url."&price_from=".$_GET['price_from'];
									            		}
									            		if (isset($_GET['rating'])) 
									            		{
								            				$url=$url."&rating=".$_GET['rating'];
									            		}
									            		if (isset($_GET['wifi'])) 
									            		{
								            				$url=$url."&wifi='Y'";
									            		}
									            		if (isset($_GET['spa'])) 
									            		{
								            				$url=$url."&spa='Y'";
									            		}
									            		if (isset($_GET['pool'])) 
									            		{
								            				$url=$url."&pool='Y'";
									            		}
									            		if (isset($_GET['ac'])) 
									            		{
								            				$url=$url."&ac='Y'";
									            		}
									            		echo "<li><a href='hotels.php?page=".$i.$url."'";
									            	}
									            	else
									            	{
										            	echo "<li><a href='hotels.php?page=".$i."'";
									            	};
									            	if ($i==$page)  echo " id='last_page' class='current_page active'";
									            	echo ">".$i."</a></li> ";
									            }
									            else
									            { 
									            	echo "<li><a href='hotels.php?page=".$i."'";
										            if ($i==$page)  echo " class='current_page active'";
										            echo ">".$i."</a></li> ";
									        	}

									};
									            // if($page==($total_pages+1)) { echo "<script>window.location.href ='hotels.php?page=1' }</script"; } 
									            echo "<li><a id='last_page_btn' href='hotels.php?page=".($page+1)."'>&raquo;</a></li>";
									 ?>

									 <script>
									 	if($('.current_page').attr('id')=='last_page'){
										 	$('#last_page_btn').attr('href','hotels.php');
										 	$('#last_page_btn').css('pointer-events','none');}
									 </script>
								</ul>
							</div>
						</div>
					</div>
					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Find your hotel</h3>
								<form method="post" class="colorlib-form" action="extract.php" id="form2">
				              	<div class="row">
				              	<div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">City:</label>
				                    <div class="form-field">
				                      <?php 
					                      echo "<input required type='text' id='location' name='location' value='".$_SESSION['City']."' class='form-control' placeholder='SearchLocation'>";
				                      ?>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                     <input type="text" placeholder="Search Location" id="area" name="area" class="form-control" value=<?php if(isset($_GET['area'])) {echo "'".$_GET['area']."'";} ?> >
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" name="date"class="form-control date" placeholder="Check-in date">
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
							<!-- Filter Form -->
							<form method="get" action="filter.php" id="form3">
								<div class="side animate-box">
									<div class="row">
										<div class="col-md-12">
											<h3 class="sidebar-heading">Price Range</h3>
											<div class="colorlib-form-2">
								              	<div class="row">
									                <div class="col-md-6">
									                  <div class="form-group">
									                    <label for="guests">Price from:</label>
									                    <div class="form-field">
									                      <i class="icon icon-arrow-down3"></i>
									                      <select name="price_from" id="people" class="form-control">
									                        <option <?php if(isset($_GET['price_from'])){if($_GET['price_from']==1){echo "selected";}} ?>  value="1">1</option>
									                        <option <?php if(isset($_GET['price_from'])){if($_GET['price_from']==200){echo "selected";}} ?>  value="200">200</option>
									                        <option <?php if(isset($_GET['price_from'])){if($_GET['price_from']==300){echo "selected";}} ?>  value="300">300</option>
									                        <option <?php if(isset($_GET['price_from'])){if($_GET['price_from']==400){echo "selected";}} ?>  value="400">400</option>
									                        <option <?php if(isset($_GET['price_from'])){if($_GET['price_from']==1000){echo "selected";}} ?>  value="1000">1000</option>
									                      </select>
									                    </div>
									                  </div>
									                </div>
									                <div class="col-md-6">
									                  <div class="form-group">
									                    <label for="guests">Price to:</label>
									                    <div class="form-field">
									                      <i class="icon icon-arrow-down3"></i>
									                      <select name="price_to" id="people" class="form-control">
									                        <option <?php if(isset($_GET['price_to'])){if($_GET['price_to']==2000){echo "selected";}} ?> value="2000">2000</option>
									                        <option <?php if(isset($_GET['price_to'])){if($_GET['price_to']==4000){echo "selected";}} ?> value="4000">4000</option>
									                        <option <?php if(isset($_GET['price_to'])){if($_GET['price_to']==6000){echo "selected";}} ?> value="6000">6000</option>
									                        <option <?php if(isset($_GET['price_to'])){if($_GET['price_to']==8000){echo "selected";}} ?> value="8000">8000</option>
									                        <option <?php if(isset($_GET['price_to'])){if($_GET['price_to']==10000){echo "selected";}} else{ echo "selected";} ?>  value="10000">10000</option>
									                      </select>
									                    </div>
									                  </div>
									                </div>
								                </div>
								            </div>
							            </div>
									</div>
								</div>
								<div class="side animate-box">
									<div class="row">
										<div class="col-md-12">
											<h3 class="sidebar-heading">Review Rating</h3>
											<div class="colorlib-form-2">
											   <div class="form-check">
													<input type="checkbox" <?php if(isset($_GET['rating'])){if($_GET['rating']==5){echo "checked";}} ?> value="5" name="star[]"  class="form-check-input" id="exampleCheck1">
													<label class="form-check-label" for="exampleCheck1">
														<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" <?php if(isset($_GET['rating'])){if($_GET['rating']==4){echo "checked";}} ?> value="4" name="star[]" class="form-check-input" id="exampleCheck1">
											      <label class="form-check-label" for="exampleCheck1">
											    	   <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
											      </label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" <?php if(isset($_GET['rating'])){if($_GET['rating']==3){echo "checked";}} ?> value="3" name="star[]" class="form-check-input" id="exampleCheck1">
											      <label class="form-check-label" for="exampleCheck1">
											      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
											     </label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" <?php if(isset($_GET['rating'])){if($_GET['rating']==2){echo "checked";}} ?> value="2" name="star[]" class="form-check-input" id="exampleCheck1">
											      <label class="form-check-label" for="exampleCheck1">
											      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
											     </label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" <?php if(isset($_GET['rating'])){if($_GET['rating']==1){echo "checked";}} ?> value="1" name="star[]" class="form-check-input" id="exampleCheck1">
											      <label class="form-check-label" for="exampleCheck1">
											      	<p class="rate"><span><i class="icon-star-full"></i></span></p>
											     </label>
											   </div>
											</div>
										</div>
									</div>
								</div>
								<div class="side animate-box">
									<div class="row">
										<div class="col-md-12">
											<h3 class="sidebar-heading">Facilities</h3>
											<form method="get" class="colorlib-form-2">
											   <div class="form-check">
													<input type="checkbox" <?php if(isset($_GET['wifi'])){if($_GET['wifi']=='Y'){echo "checked";}} ?> name="facility[]" class="form-check-input" id="exampleCheck1" value="wifi">
													<label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Wifi</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" <?php if(isset($_GET['spa'])){if($_GET['spa']=='Y'){echo "checked";}} ?> name="facility[]" class="form-check-input" id="exampleCheck1" value="spa">
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Spa</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" <?php if(isset($_GET['pool'])){if($_GET['pool']=='Y'){echo "checked";}} ?> name="facility[]" class="form-check-input" id="exampleCheck1"  value="pool">
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Swimming Pool</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" <?php if(isset($_GET['ac'])){if($_GET['ac']=='Y'){echo "checked";}} ?>  name="facility[]" class="form-check-input" id="exampleCheck1" value="ac">
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Air Conditioning</h4>
													</label>
											   </div>
									<!-- <input type="text" id="area_check" name="area_check" value=<?php if(isset($_GET['area'])){echo "'".$_GET['area']."'";} ?>> -->
											</form>
											<!-- here we have to see ki aage kya pass kr rhe hai array work kr rha hai? dekhna hai okay  -->

										</div>
									</div>
								</div>
								<div class="col-md-12">
					                  <button value="Find Hotel" class="btn btn-primary btn-block" type="submit"form="form3" >
					                  	Apply Filters
					                  </button>
					            </div>
					        </form>
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

