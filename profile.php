<?php
session_start();
$account_no = $_SESSION['account_no'];
$con = mysqli_connect("localhost:3308","root","","bank");
$result = mysqli_query($con, "SELECT * FROM register WHERE account_no = '$account_no'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$phone = $row['phone'];
$father = $row['father'];
$mother = $row['mother'];
$address1 = $row['address1'];
$address2 = $row['address2'];
$city = $row['city'];
$state = $row['state'];
$nationality = $row['nationality'];
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
<link rel="stylesheet" href="css/lightbox.css">
<!-- //Custom Theme files -->  
<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- //web-fonts --> 
<style>
.myalign{
	background-color:#142340;
	color: white;
	font-size: 24px;
}
</style>
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
	<div class="banner inner-banner">
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
                        <li><a href="index.php" >Home</a></li>
						<li><a href="payment.php" data-toggle="dropdown">Payment<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="Transfer_funds.php">Transfer Funds</a></li>
								<li><a href="Statement.php">Statement</a></li>
							</ul>
						</li> 		
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="profile.php" class="active" data-toggle="dropdown">Profile<span class="caret"></span></a>
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
	</div>
<div class = "myalign">
<center><br><br><div style= "color: #fff"><h1><b>My Profile</b></h1></div></center><br>
&emsp;&emsp;&emsp;&emsp;&emsp;<input type="button" name="changepwd" value="CHANGE PASSWORD" onclick="window.location.href='password.php'" style="height: 40px; width: 280px; color: #49c7ed; background-color: #142340">
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="button" name="editprofile" value="EDIT PROFILE" onclick="window.location.href='editprofile.php'" style="height: 40px; width: 250px; color: #49c7ed; background-color: #142340">
  <br><br>
      <b style="color:#ecdb5d">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Name : </b>
      <?php echo $firstname . " " . $lastname ?>
    	<br><br>
    
      <b style="color:#ecdb5d">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Account Number : </b>
      <?php echo $account_no ?>
	  <br><br>
    
      <b style="color:#ecdb5d">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Email ID : </b>
      <?php echo $email ?>
	  <br><br>
    
      <b style="color:#ecdb5d">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Phone Number : </b>
      <?php echo $phone ?>
	  <br><br>
    
      <b style="color:#ecdb5d">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Father's Name : </b>
      <?php echo $father ?>
	  <br><br>
    
      <b style="color:#ecdb5d">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mother's Name : </b>
      <?php echo $mother ?>
	  <br><br>
    
      <b style="color:#ecdb5d">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Address : </b>
      <?php echo $address1 . " " . $address2 ?>
	  <br><br>
    
      <b style="color:#ecdb5d">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;City : </b>
      <?php echo $city ?>
	  <br><br>
    
      <b style="color:#ecdb5d">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;State : </b>
      <?php echo $state ?>
	  <br><br>
    
      <b style="color:#ecdb5d">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nationality : </b>
      <?php echo $nationality ?>
	  <br><br><br>
	
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