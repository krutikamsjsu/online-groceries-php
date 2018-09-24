<?php
$product = [];
if(isset($_COOKIE['Product_cookie'])){
    $product = unserialize($_COOKIE["Product_cookie"]);
    if(in_array("Milk_products",$product)){
        $index = array_search("Milk_products", $product);
        array_splice($product, $index, 1);
    }else{
        if(sizeof($product)==5){
            array_shift($product);
        }
    }
}
array_push($product, "Milk_products");
setcookie("Product_cookie",serialize($product),time()+60*60*24*5);
$visited = [];
if(isset($_COOKIE['Visited_cookie'])){
    $visited = unserialize($_COOKIE["Visited_cookie"]);
    if(isset($visited["Milk_products"])){
        $visited["Milk_products"] = $visited["Milk_products"]+1;
    }else{
        $visited["Milk_products"] = 1;
    }
}else{
    $visited["Milk_products"] = 1;
}
setcookie("Visited_cookie",serialize($visited),time()+60*60*24*5);
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Milk Products</title>
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
				<h1>Milk Products</h1><br>
				<h2></h2>
				<ul>
				<li>
						<div class="h4-format">
							<img src="images/milkp.jpg" alt="">
							<h2>Milk Products</h2>
							<h4>Ghee</h4>
						    <h4>Butter</h4>
    						<h4>Rabdi</h4>
    						<h4>Shrikhand</h4>
    						<h4>Paneer</h4>
    						</div>
					</li>
					</ul>
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
