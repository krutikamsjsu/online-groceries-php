<?php
    foreach($_COOKIE as $key => $value){
        print($key."   ".$value);
    }
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Users</title>
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
					<li class="selected">
						<a href="adminList.php">Admin</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body" class="contact">
			<div>
				<h1>Users</h1><br>
				<h2>List of Users</h2>
				<p>
				<?php
					$items=file("./users.txt");
					$i = 0;
					foreach ($items as $line)
					{
						$line = str_replace("\n", "", $line);
						echo "<br>";
						echo ($line);
						echo "<br>";
					}
						echo "<br>";
					   // do something with $line array
				?></p>			
			</div>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
					<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2023 by RNRNR. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
