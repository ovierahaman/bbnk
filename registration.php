<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Page</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('reg.php'); ?>
<!DOCTYPE html>
 <div class="h_bg">
<div class="wrap">
<div class="header">
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
	<?php require('header.php');?>
	

	<center>
		<h1><b>Storing Form data in Database</h1></b><br><br>
		<form action="reg.php" method="post">
			
<p>
			<label for="name">Name:</label>
			<input type="text" name="name" id="firstName">
			</p><br>

			

			
<p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p><br>

<p>
			<label for="bloodGroup">BloodGroup:</label>
			<input type="text" name="bloodgroup" id="bloodGroup">
			</p><br>

<p>
			<label for="phone">Phone:</label>
			<input type="text" name="phone" id="phone">
			</p><br>

			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p><br>

			
<p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p><br>

<p>
			<label for="password">Password:</label>
			<input type="text" name="password" id="password">
			</p><br>








			<input type="submit" value="Submit">
		</form>
	</center>




          
<div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li><a href="index.php">Home</a></li>			
			<li class="active"><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved By United International University </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>