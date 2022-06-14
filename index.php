<?php
session_start();
$account_no = $_SESSION['account_no'];
$con = mysqli_connect("localhost:3308","root","","bank");
$resultb = mysqli_query($con, "SELECT * FROM balance WHERE account_no = '$account_no'");
$resultr = mysqli_query($con, "SELECT * FROM register WHERE account_no = '$account_no'");
$rowb = mysqli_fetch_array($resultb,MYSQLI_ASSOC);
$rowr = mysqli_fetch_array($resultr,MYSQLI_ASSOC);
$balance = $rowb['balance'];
$online_limit = $rowb['online_limit'];
$card_limit = $rowb['card_limit'];
$firstname = $rowr['firstname'];
$lastname = $rowr['lastname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>E-Banking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="E-Banking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
<!-- //Custom Theme files -->  
<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body> 
	<!-- header -->
	<div class="headerw3-agile"> 
		<div class="header-w3mdl"><!-- header-two --> 
			<div class="container"> 
				<div class="agileits-logo navbar-left">
					<h1><a href="index.html"><img src="images/e.png" alt="logo"/>Banking</a></h1> 
				</div> 
				<div class="agileits-hdright nav navbar-nav">
					<div class="header-w3top"><!-- header-top --> 
						<ul class="w3l-nav-top">
							<li><i class="fa fa-phone"></i><span> +91-422-2369900 </span></li> 
							<li><a href="mailto:info@siet.ac.in"><i class="fa fa-envelope-o"></i><span>info@siet.ac.in</span></a></li>
						</ul>
						<div class="clearfix"> </div> 	 
					</div>
				</div>
				<div class="clearfix"> </div> 
			</div>	
		</div>	
	</div>	
	<!-- //header -->  
	<!-- banner -->
	<div class="banner">
		<div class="header-nav"><!-- header-three --> 	
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						Menu 
					</button> 
				</div>
				<!-- top-nav -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
                        <li><a href="index.php" class="active">Home</a></li>
						<li><a href="payment.php" data-toggle="dropdown">Payment<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="Transfer_funds.php">Transfer Funds</a></li>
								<li><a href="Statement.php">Statement</a></li>
							</ul>
						</li> 		
                        <li><a href="contact.php">Contact Us</a></li>
                        
                            <li><a href="profile.php" data-toggle="dropdown">Profile<span class="caret"></span></a>
							<ul class="dropdown-menu">
							<li><a href="profile.php">Profile</a></li>
								<li><a href="logout.php">Log out</a></li>
							</ul>
							</li>
                        
					</ul>  
					<div class="clearfix"> </div>	
				</div>
			</nav>    
		</div>
		<!-- banner-text -->
		<!-- banner -->
		<div class="container">
			<div class="banner-text agileits-w3layouts">
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-textagileinfo">
								<h6>Welcome To E-Banking</h6>	 
								<h3>Safe,secure and convenient banking</h3>	 
								<p>We need to keep investing in economic and homeland security. We need to bank on the right kind of economic development. We need to embrace opportunities, but with the right kind of safeguards</p>
								<div class="agileits-banner-bot">
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>01</h5>
										<h4>convenient</h4>	 
										<p>Banking technology has made it simple and efficient to invest in good causes.</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>02</h5>
										<h4>secure</h4>	 
										
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>03</h5>
										<h4>reliable</h4>
										
									</div>
									<div class="clearfix"></div>
								</div>	
							</div>	
						</li>
						<li>
							<div class="banner-textagileinfo"> 
								<h6>Welcome To E-Banking</h6>	
								<h3>Safe,secure and convenient banking</h3>	 
								<p>We need to keep investing in economic and homeland security. We need to bank on the right kind of economic development. We need to embrace opportunities, but with the right kind of safeguards</p>
								<div class="agileits-banner-bot">
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>01</h5>
										<h4>convenient</h4>	 									
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>02</h5>
										<h4>secure</h4>	 
										<p>The good we secure for ourselves is precarious and uncertain until it is secured for all of us.</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>03</h5>
										<h4>reliable</h4>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>	
						</li>
						<li>
							<div class="banner-textagileinfo">
								<h6>Welcome To E-Banking</h6>	
								<h3>Safe,secure and convenient banking</h3>
								<p>We need to keep investing in economic and homeland security. We need to bank on the right kind of economic development. We need to embrace opportunities, but with the right kind of safeguards.</p>
								<div class="agileits-banner-bot">
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>01</h5>
										<h4>convenient</h4>		
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>02</h5>
										<h4>secure</h4>	 
										
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>03</h5>
										<h4>reliable</h4>
										<p>Cultivate reliability and you will always have responsibility to save and invest more.</p>
									</div>
									<div class="clearfix"></div>
								</div>	
							</div>	
						</li> 
					</ul>
				</div>
			</div>
		 </div>
	</div>
	<!-- dashboard -->
	<div class="w3ls-section services">
		<div class="container">
			<h2 class="h3-w3l">Credentials</h2> 
			<div class="services-left">
				<h4 class="title">Online Banking</h4>
				<h5>Anytime, Anywhere On Your Hand..!</h5>
				<p class="data"> Pay Bills and Transfer Funds Super Fast!!<br>
				And be on the Automated Track of your Account..!</p>
			</div>
			<div class="services-right">
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-lock" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
						<h5>Account Number</h5>
						<p><?php echo $account_no ?></p>
					</div>	
					<div class="clearfix"></div>
				</div>
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-clock-o" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
						<h5>Account Balance</h5>
						<p><?php echo $balance ?></p>
					</div>	
					<div class="clearfix"></div>
				</div>
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-gg" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">	
						<h5>Transaction Limit</h5>
						<p><?php echo $online_limit?></p>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-credit-card-alt" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">	
						<h5>Card Payment</h5>
						<p>Use Your Card Anywhere</p>
					</div>	
					<div class="clearfix"> </div>
				</div>
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-shopping-cart" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
						<h5>Shop Online</h5>
						<p>Get Exciting Rewards</p>
					</div>	
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>



	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 3
		  $("#slider3").responsiveSlides({
			auto:true,
			pager:false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	
		});
	</script>
	<script src="js/SmoothScroll.min.js"></script>
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

</body>
</html>