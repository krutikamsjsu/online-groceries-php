<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Last Visited</title>
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
					<li class="selected">
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
		<div id="body">
			<div>
				<h1>Last Five Visited Products</h1><br>
				<h2></h2>
				<?php
				if(isset($_COOKIE['Product_cookie'])){
                            $products = unserialize($_COOKIE['Product_cookie']);
                            $lastVisited = array_reverse($products);
                        foreach($lastVisited as $key=> $value ){
                                if($value=="Fruits"){
                                    print("<a href='fruits.php'>");
                                    print("<img src='images/blog-image1.png' alt=''><h2>Fruits</h2></a>");
                                }else if($value=="Vegetables"){
                                    print("<a href='vegetables.php'>");
                                    print("<img src='images/blog-image2.png' alt=''><h2>Vegetables</h2></a>");
                                }else if($value=="Spices"){
                                    print("<a href='spices.php'>");
                                    print("<img src='images/blog-image3.png' alt=''><h2>Spices</h2></a>");
                                }else if($value=="Sweets"){
                                    print("<a href='sweets.php'>");
                                    print("<img src='images/blog-image4.png' alt=''><h2>Indian Sweets</h2></a>");
                                }else if($value=="Frozen_food"){
                                    print("<a href='frozen.php'>");
                                    print("<img src='images/blog-image5.png' alt=''><h2>Frozen Food</h2></a>");
                                }else if($value=="Pulses"){
                                    print("<a href='pulses.php'>");
                                    print("<img src='images/pulses.jpg' alt=''><h2>Pulses</h2></a>");
                                }else if($value=="Grains"){
                                    print("<a href='grains.php'>");
                                    print("<img src='images/grains.jpg' alt=''><h2>Grains</h2></a>");
                                }else if($value=="Pooja_samagri"){
                                    print("<a href='poojasamagri.php'>");
                                    print("<img src='images/poojas.jpg' alt=''><h2>Pooja Samagri</h2></a>");
                                }else if($value=="Milk_products"){
                                    print("<a href='milkproducts.php'>");
                                    print("<img src='images/milkp.jpg' alt=''><h2>Milk Products</h2></a>");
                                }else if($value=="Flour"){
                                    print("<a href='flour.php'>");
                                    print("<img src='images/flour.jpg' alt=''><h2>Flour</h2></a>");
                                }
                            }
                            
                        }
                        else{
                                print("<p>No Products visited yet.</p>");
                            }
                    ?>
			</div>
		</div>
		<div id="footer">
			<div>
				<p>&copy; 2023 by shopindia.com. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
