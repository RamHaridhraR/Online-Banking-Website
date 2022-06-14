<?php
session_start();
$account_nom = $_SESSION['account_no'];
$con = mysqli_connect("localhost:3308","root","","bank");
$connection = mysqli_connect("localhost:3308","root","","transactions");
$resultm = mysqli_query($con, "SELECT * FROM balance WHERE account_no = '$account_nom'");
$rowm = mysqli_fetch_array($resultm,MYSQLI_ASSOC);
$my_balance = $rowm['balance'];
$online_limit = $rowm['online_limit'];
$online_no = $rowm['online_no'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$account_noo = $_POST['account_noo'];
	$amount = $_POST['amount'];
	$resulto = mysqli_query($con, "SELECT * FROM balance WHERE account_no = '$account_noo'");
	$count = mysqli_num_rows($resulto);
	if($count==1)
	{
		if($amount<$my_balance){
			$rowo = mysqli_fetch_array($resulto,MYSQLI_ASSOC);
			$other_balance = $rowo['balance'];
			$my_balance = $my_balance - $amount;
			$other_balance = $other_balance + $amount;
			$online_limit = $online_limit - $amount;
			$online_no = $online_no - 1;
			$date = date("Y-m-d");
			$remarkm = "transfer to ".$account_noo;
			$remarko = "from ".$account_nom;
			$c = mysqli_multi_query($con, "update balance set balance = '$my_balance', online_limit = '$online_limit', online_no = '$online_no' where account_no = '$account_nom'; update balance set balance = $other_balance where account_no = '$account_noo';");
			$s = mysqli_multi_query($connection, "INSERT INTO `$account_nom` (date, remark, debit, credit, balance) VALUES('$date', '$remarkm', '$amount', '', '$my_balance'); INSERT INTO `$account_noo` (date, remark, debit, credit, balance) VALUES('$date', '$remarko', '', '$amount', '$other_balance');");
			if($c && $s) {header("refresh:0;url=success.html"); } else {echo "no";}
		}else{
			header("refresh:0;url=transferFundsBal.php");
		}
	}else{
		header("refresh:0;url=transfer_fundsWrong.php");
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
input[type=text]{
	background-color: #142340;
	color: white;
}
</style>
<script>
	function validate() {
      var v = document.getElementById("amount").value;
      if(isNaN(v)) {
        document.getElementById("msg").innerHTML = "Should be a Number";
      }
      else {
        document.getElementById("msg").innerHTML = "";
      }
    }
</script>
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
							<li><a href="mailto:info@siet.ac.in"><i class="fa fa-envelope-o"></i> <span>info@siet.ac.in</span></a></li>
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
                        <li><a href="index.php">Home</a></li>
						<li><a href="payment.php" class="active" data-toggle="dropdown">Payment<span class="caret"></span></a>
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
		
	</div>
	<div class = "myalign">
    <center><br><br><div style= "color: #fff"><h1><b>Transfer Funds</b></h1></div></center><br><br>
    <p style="color: red; font-size: 24">Amount Limit Exceeded</p><br>
  <form action="" method="POST">
    <table width="80%">
      <tr>
        <td>
		<label for="account_noo"><span style="color:#ecdb5d">&emsp;&emsp;&emsp;Account Number</span></label>
		&emsp;&emsp;<input type="text" name="account_noo" class="question" id="account_noo" required autocomplete="off"/>
        </td>
      </tr>
    </table>
	<br><br>
    <table width="80%">
      <tr>
        <td>
		  <label for="amount"><span style="color:#ecdb5d">&emsp;&emsp;&emsp;Amount(in Rs.)</span></label>
          &emsp;&emsp;<input type="text" name="amount" class="question" id="amount" required autocomplete="off" oninput="validate()" />
		  <div style="color: red;" id="msg"></div>
		</td>
      </tr>
    </table>
    <br><br>
    <table width="80%">
      <tr>
        <td align="right"><input type="submit" name="submit" value="TRANSFER NOW" style="height: 40px; width: 250px; font-size: 20px; color: #49c7ed; background-color: #142340"></td>
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