<?php
session_start();
$account_no = $_SESSION['account_no'];
$con = mysqli_connect("localhost:3308","root","","bank");
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $old_password = $_POST['old_password'];
  $new_password = $_POST['new_password'];
  $result = mysqli_query($con, "SELECT * FROM login WHERE account_no = '$account_no'");
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $password = $row['pwd'];
  if($password == $old_password) {
    $c = mysqli_query($con, "update login set pwd = '$new_password' where account_no = '$account_no';");
    header("refresh:0;url=success.html");
  }
  else {
    header("refresh:0;url=passwordWrong.php");
  }
}
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
.myform{
	background-color: #fff;
	color: #000;
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
    <div class="myform">
    <center><br><br><div style= "color: #000"><b><h1>Change Password</h1></b></div> </center><br><br>
  <form action="" method="POST">
    <table width="40%">
      <tr>
        <td>
        <label for="old_password">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>Old Password</span></label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="password" name="old_password" class="question" id="old_password" required autocomplete="off" />
        </td>
      </tr>
    </table><br>
    <table width="40%">
      <tr>
        <td>
        <label for="new_password">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span>New Password</span></label>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="password" name="new_password" class="question" id="new_password" required autocomplete="off" />
          
        </td>
      </tr>
    </table>
   
    <br><br>
    <table width="80%">
      <tr>
        <td align="right"><input type="submit" name="submit" value="CHANGE PASSWORD" style="height: 40px; width: 250px; font-size: 20px; color: #49c7ed; background-color: #142340"></td>
      </tr>
    </table>
  </form>
  <br><br>
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