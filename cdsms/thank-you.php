<?php
session_start();
include('includes/dbconnection.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Car driving Apply Now</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Driving School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
<!-- banner -->
	<?php include_once('includes/header.php');?>
	<div class="banner1">
	</div>
<!-- //banner -->
<!-- contact -->		
	<div class="contact"> 
		<div class="container">
			<div class="w3l-heading">
			
<h4 class="w3ls_head">Thank you for applying. Your Reg no is <?php echo $_SESSION['regno'];?> </h4>
		
			</div>
		
		</div> 
	</div>
	<!-- footer -->
	<?php include_once('includes/footer.php');?>
	<!-- //footer -->

</body>
</html>