<?php
$product = [];
if(isset($_COOKIE['Product_cookie'])){
    $product = unserialize($_COOKIE["Product_cookie"]);
    if(in_array("Fruits",$product)){
        $index = array_search("Fruits", $product);
        array_splice($product, $index, 1);
    }else{
        if(sizeof($product)==5){
            array_shift($product);
        }
    }
}
array_push($product, "Fruits");
setcookie("Product_cookie",serialize($product),time()+60*60*24*5);
$visited = [];
if(isset($_COOKIE['Visited_cookie'])){
    $visited = unserialize($_COOKIE["Visited_cookie"]);
    if(isset($visited["Fruits"])){
        $visited["Fruits"] = $visited["Fruits"]+1;
    }else{
        $visited["Fruits"] = 1;
    }
}else{
    $visited["Fruits"] = 1;
}
setcookie("Visited_cookie",serialize($visited),time()+60*60*24*5);
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fruits</title>
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
				<h1>Fruits</h1><br>
				<h2></h2>
				<ul>
				<li>
						<div class="h4-format">
							<img src="images/blog-image1.png" alt="">
							<h2>Fruits</h2>
							<h4>Mangoes</h4>
						    <h4>Oranges</h4>
    						<h4>Grapes</h4>
    						<h4>Banana</h4>
    						<h4>Grape Fruit</h4>
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
