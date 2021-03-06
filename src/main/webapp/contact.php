<?php


$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "365bootstrap - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "365bootstrap.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes designed by 365bootstrap.com" />
    <meta name="author" content="www.365bootstrap.com" />
	<title>Red Restaurant</title>
	
	
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/contact-buttons.css" rel="stylesheet">
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	
	<!---pop-up-box---->
	<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->
	<script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
			
			});
	</script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>	
	
	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" class="hidden-xs" alt="">
					<h3 class="visible-xs">RedRestaurant</h3>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="index.html#intro">Home</a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.html#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#menu">Menu</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#staff">Staff</a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.html#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#booking">Booking</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contact Us</a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
	
	<header id="intro">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="images/1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>Welcome to Red-Restaurant</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>
                            <div class="">
                                <a class="btn btn-1 btn-sm" href="#about">About us</a><a class="btn btn-1 btn-sm" href="#works">Our works</a>
							</div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="images/2.jpg" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>The World's 50 Best Restaurants</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>
                            <div class="">
                                 <a class="btn btn-1 btn-sm" href="#about">About us</a><a class="btn btn-1 btn-sm" href="#works">Our works</a>
							</div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="images/3.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>National Restaurant Association</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>
                            <div class="">
                                <a class="btn btn-1 btn-sm" href="#about">About us</a><a class="btn btn-1 btn-sm" href="#works">Our works</a>
							</div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
	</header>
	<!-- Header -->
	
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="archives-page">
		<div class="container">
			<div class="row">
				<div id="main-content" class="col-md-8">
					<article class="contact">
						<div class="art-header">
							<h2 class="center">Contact</h2>
						</div>
						<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						<div class="art-content">
							<div id="contact_form">
								<form name="form1" id="ff" method="post" action="contact.php">
									<label>
									<span>Enter your name:</span>
									<input type="text"  name="name" id="name" required>
									</label>
									<label>
									<span>Enter your email:</span>
									<input type="email"  name="email" id="email" required>
									</label>
									<label>
									<span>Your message here:</span>
									<textarea name="message" id="message"></textarea>
									</label>
									<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
								</form>
							</div>
						</div>
					</article>
				</div>
				<div id="sidebar" class="col-md-4">
					<div class="widget wid-about">
						<div class="heading"><h4>About Us</h4></div>
						<div class="content">
							<img src="images/about.jpg" />
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
						</div>
					</div>
					<div class="widget wid-tags">
						<div class="heading"><h4>Tag</h4></div>
						<div class="content">
							<ul class="list-inline">
								<li><a href="#">animals</a></li>
								<li><a href="#">cooking</a></li>
								<li><a href="#">countries</a></li>
								<li><a href="#">home</a></li>
								<li><a href="#">likes</a></li>
								<li><a href="#">photo</a></li>
								<li><a href="#">travel</a></li>
								<li><a href="#">video</a></li>
							</ul>
						</div>
					</div>
					<div class="widget wid-posts">
						<div class="heading"><h4>Popular Posts</h4></div>
						<div class="content">
							<ul class="list-inline">
								<div class="post">
									<a href="#"><img src="images/1.jpg"/></a>
									<div class="wrapper">
									  <h5><a href="#">A Blue Morning</a></h5>
									  <p>March 1, 2015</p>
									</div>
								</div>
								<div class="post">
									<a href="#"><img src="images/2.jpg"/></a>
									<div class="wrapper">
									  <h5><a href="#">A Blue Morning</a></h5>
									  <p>March 1, 2015</p>
									</div>
								</div>
								<div class="post">
									<a href="#"><img src="images/3.jpg"/></a>
									<div class="wrapper">
									  <h5><a href="#">A Blue Morning</a></h5>
									  <p>March 1, 2015</p>
									</div>
								</div>
							</ul>
						</div>
					</div>
					<div class="widget wid-archive">
						<div class="heading"><h4>Archive</h4></div>
						<div class="content">
							<select>
							    <option value="audi" selected>Select Month</option>
								<option value="volvo">March 2015</option>
								<option value="saab">Febuary 2015</option>
							</select>
						</div>
					</div>
					<div class="widget wid-gallery">
						<div class="heading"><h4>Gallery</h4></div>
						<div class="content">
							<div class="row">
								<div class="col-xs-4">
									<a href="#"><img src="images/7.jpg"></a>
									<a href="#"><img src="images/8.jpg"></a>
									<a href="#"><img src="images/9.jpg"></a>
								</div>
								<div class="col-xs-4">
									<a href="#"><img src="images/6.jpg"></a>
									<a href="#"><img src="images/7.jpg"></a>
									<a href="#"><img src="images/8.jpg"></a>
								</div>
								<div class="col-xs-4">
									<a href="#"><img src="images/7.jpg"></a>
									<a href="#"><img src="images/9.jpg"></a>
									<a href="#"><img src="images/6.jpg"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="widget wid-links">
						<div class="heading"><h4>Categories</h4></div>
						<div class="content">
							<ul>
								<li><a href="#">> Lorem ipsum dolor sit </a></li>
								<li><a href="#">> Nullam venenatis lacus a </a></li>
								<li><a href="#">> Morbi ut sapien nec nisl</a></li>
								<li><a href="#">> Integer a enim ac ex.</a></li>
								<li><a href="#">> Sed in nunc non eleifend  </a></li>
								<li><a href="#">> Integer a enim ac ex.</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-footer footer-1">
						<div class="footer-heading"><h4>Partners</h4></div>
						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/15.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/16.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/17.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/18.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/19.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/20.jpg" /></a>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-4 col-footer footer-2">
						<div class="footer-heading"><h4>About Us</h4></div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
						</div>
					</div>
					<div class="col-md-4 col-footer footer-3">
						<div class="footer-heading"><h4>Labels</h4></div>
						<div class="content">
							<ul>
								<li><a href="#">Foods</a></li>
								<li><a href="#">Restaurant</a></li>
								<li><a href="#">Chefs</a></li>
								<li><a href="#">Menus</a></li>
								<li><a href="#">New Food</a></li>
								<li><a href="#">Consectetuer</a></li>
								<li><a href="#">Tincidunt</a></li>
								<li><a href="#">Laoreet</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<div class="coppy-right">
		<div class="wrap-footer">
			<div class="clearfix">
				<div class="col-md-6 col-md-offset-3">
					<p>Copyright 2015 - <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Bootstrap Themes</a> Designed by 365Bootstrap.com</p>
				</div>
			</div>	
		</div>
	</div>
	<!-- Footer -->
	
	<!-- Core JavaScript Files -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'red',
			});
		});
	</script>
	<script src="js/jquery.contact-buttons.js"></script>
	<script src="js/helloDemo.js"></script>
</body>
</html>
	
