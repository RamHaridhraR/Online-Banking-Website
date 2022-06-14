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
$address1 = $row['address1'];
$address2 = $row['address2'];
$city = $row['city'];
$state = $row['state'];
$country = $row['country'];
$father = $row['father'];
$mother = $row['mother'];
$nationality = $row['nationality'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $father = $_POST['father'];
  $mother = $_POST['mother'];
  $nationality = $_POST['nationality'];
  $c = mysqli_multi_query($con, "update register set firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', address1 = '$address1', address2 = '$address2', city = '$city', state = '$state', country = '$country', father = '$father', mother = '$mother', nationality = '$nationality' where account_no = '$account_no'; update login set id = '$email' where account_no = '$account_no';");
  if($c) {header("refresh:0;url=profile.php"); } else { echo "no";}
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
    <center><br><br><div style= "color: #000"><h1><b>Edit Profile</b></h1></div><br>
  <form action="" method="POST">
    <table width="80%">
      <tr>
        <td>
        <label for="firstname"><span>First Name*</span></label>
          <input type="text" name="firstname" class="question" id="firstname" value="<?php echo $firstname ?>" required autocomplete="off" />
        </td>
        <td>
        <label for="lastname"><span>Last Name*</span></label>
          <input type="text" name="lastname" class="question" id="lastname" value="<?php echo $lastname ?>" required autocomplete="off" />
          
        </td>
      </tr>
    </table>
    <br>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
        <label for="email"><span>Email*</span></label>
          <input type="text" name="email" class="question" id="email" value="<?php echo $email ?>" required autocomplete="off" />
        </td>
        <td>
        <label for="phone"><span>Mobile Number*</span></label>
          <input type="text" name="phone" class="question" id="phone" value="<?php echo $phone ?>" required autocomplete="off" />
          
        </td>
      </tr>
    </table>
    <br>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
        <label for="address1"><span>Address Line 1*</span></label>
          <input type="text" name="address1" class="question" id="address1" value="<?php echo $address1 ?>" required autocomplete="off" />
          
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
        <label for="address2"><span>Address Line 2*</span></label>
          <input type="text" name="address2" class="question" id="address2" value="<?php echo $address2 ?>" required autocomplete="off" />
          
        </td>
      </tr>
    </table>
    <br>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
        <label for="city"><span>City*</span></label>
          <input type="text" name="city" class="question" id="city" value="<?php echo $city ?>" required autocomplete="off" />
          
        </td>
        <td>
        <label for="state"><span>State*</span></label>
          <input type="text" name="state" class="question" id="state" value="<?php echo $state ?>" required autocomplete="off" />
          
        </td>
        <td>
        <label for="country"><span>Country*</span></label>
          <input type="text" name="country" class="question" id="country" value="<?php echo $country ?>" required autocomplete="off" />
          
        </td>
      </tr>
    </table>
    <br>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
        <label for="father"><span>Father's Name*</span></label>
          <input type="text" name="father" class="question" id="father" value="<?php echo $father ?>" required autocomplete="off" />
          
        </td>
        <td>
        <label for="mother"><span>Mother's Name*</span></label>
          <input type="text" name="mother" class="question" id="mother" value="<?php echo $mother ?>" required autocomplete="off" />
          
        </td>
        <td>
        <label for="nationality"><span>Nationality*</span></label>
          <input type="text" name="nationality" class="question" id="nationality" value="<?php echo $nationality ?>" required autocomplete="off" />
          
        </td>
      </tr>
    </table>
    <br>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td colspan="2" align="right" style="border-top: 1px solid white;"><input type="submit" name="submit" value="SUBMIT" style="height: 40px; width: 150px; color: #49c7ed; background-color: #142340"></td>
      </tr>
    </table>
  </form>
  </div>
  <br><br>
</center>