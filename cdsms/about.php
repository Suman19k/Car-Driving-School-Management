<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Driving School </title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>
<body>

	<?php include_once('includes/header.php');?>
	<div class="banner1">
	</div>
<!-- //banner -->	
<!-- about -->
	<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	<div class="about-top">
		<div class="container">
			<div class="w3l-heading">


				<h2 class="w3ls_head">About Us </h2>
			</div>
			<div class="wthree-services-bottom-grids">
				<div class="col-md-6 wthree-services-left">
					<img src="images/5.jpg" Class="img-responsive" alt="">
				</div>
				<div class="col-md-6 wthree-services-right">
					<div class="wthree-services-right-top">
						
						<p>This Driving School has been a pioneer in the field of driving training. Driven by world-class technology & training curriculum,Driving School has elevated and redefined the standards of driving training in the country.

<br><br>Here's what you can come to expect as a student of this Driving School:<br><br>Proficient Training Experts<br>Practical Learning through State-Of-The-Art Technology<br>Educative Theoretical Sessions</p>

					</div>
	
					
				
					
							<?php } ?>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-top -->


	<!-- footer -->
	<?php include_once('includes/footer.php');?>
	
</body>
</html>