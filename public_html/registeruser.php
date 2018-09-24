<?php
include("conection.php");
if (isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['homeaddr']) and isset($_POST['homephone']) and isset($_POST['cellphone']) and isset($_POST['email']) and isset($_POST['password'])){
    $user_type = 'user';
    $sql="INSERT INTO user (user_type, fname, lname, homeaddr, homephone, cellphone, email, password)
VALUES
('$user_type','$_POST[fname]','$_POST[lname]','$_POST[homeaddr]','$_POST[homephone]','$_POST[cellphone]','$_POST[email]','$_POST[password]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  print("<p style='text-align:center;background-color:green;padding:20px;color:white'>User Registered Successfully</p>");
  }
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register User</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="navigation">
				<span id="mobile-navigation">&nbsp;</span>
				<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="menu">
					<li>
						<a href="home.php">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="news.html">News</a>
					</li>
					<li>
						<a href="products.html">Products</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
					<li>
						<a href="users.php">Users</a>
					</li>
					<li>
						<a href="adminList.php">Admin</a>
					</li>
				</ul>
			</div>
		</div>
		<div>
		<form action="registeruser.php" method="post">
		<div id="body" class="contact">
			<div>
				<h1>Register</h1><br><br><br>
				<p>First Name</p>
				<input type="text" required name="fname"/>
				<p>Last Name</p>
				<input type="text" required name="lname"/>
				<p>Home Address</p>
				<input type="text" required name="homeaddr"/>
				<p>Home Phone</p>
				<input type="tel" required name="homephone"/>
				<p>Cell Phone</p>
				<input type="tel" required name="cellphone"/>
				<p>Email</p>
				<input type="text" required name="email"/>
				<p>Password</p>
				<input type="password" required name="password"/>
				<p>
				<input type="submit" value="Register"/>
				</p>			
			</div>
		</div>
		</form>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
					<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
				</div>
				<p>&copy; ShopIndia.com. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>