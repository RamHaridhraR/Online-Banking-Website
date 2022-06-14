<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  session_start();
    $_SESSION['firstname'] = $fname;
    $_SESSION['lastname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("refresh:0;url=register2.php");
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
.myalign{
	background-color:#142340;
	color: white;
	font-size: 24px;
}
</style>
<script>
    function validate() {
      var v1 = document.getElementById("password").value;
      var v2 = document.getElementById("password_confirmation").value;
      if(v1 != v2) {
        document.getElementById("msg").innerHTML = "Password do not match";
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
          <li><a href="register.php">New User</a></li>
							<li><a href="logout.php">Log out</a></li>
						</li>
					</ul>  
					<div class="clearfix"> </div>	
				</div>
			</nav>    
		</div>
	</div>
    <center>
    <div style="background-color: #142340; height: 100px; width: 100%; align-items: center; color: white "><br><h1>New User Registration</h1>
  <p>* All Field are Mandatory</p></div>
  <br><br>
  <hr class="colorgraph">
  <form action="" method="POST">
    <table cellspacing="20">
      <col width="400">
      <tr>
        <td><label for="firstname"><span>First Name*</span></label>
          <input type="text" name="firstname" class="question" id="firstname" required autocomplete="off" />
        </td>
        <td><label for="lastname"><span>Last Name*</span></label>
          <input type="text" name="lastname" class="question" id="lastname" required autocomplete="off" />
        </td>
      </tr>

      <tr>
        <td colspan="2"><br><br>
        <label for="email"><span>Email Address*</span></label>
          <input type="text" name="email" class="question" id="email" required autocomplete="off" />
          
        </td>
      </tr>
      <tr>
        <td><br><br>
        <label for="password"><span>Password*</span></label>  
        <input type="password" name="password" class="question" id="password" required autocomplete="off" /> 
        </td>
        <td><br><br><label for="password_confirmation"><span>Confirm Password*</span></label>
          <input type="password" name="password_confirmation" oninput="validate()" class="question" id="password_confirmation" required autocomplete="off" />
          <div style="color: red;" id="msg"></div>
        </td>
      </tr>
    </table>
    <hr class="colorgraph">
    <br>
    <input type="submit" name="submit" value="Submit" style="height: 45px; width: 250px; font-size: 25px; color: white; background-color: #142340">
  </form>
  <br><br><br>
</body>
</html>