<?php
include("conection.php");
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Details</title>
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
						<a href="index.php">Home</a>
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
					<li class="selected">
						<a href="users.php">Users</a>
					</li>
					<li>
						<a href="adminList.php">Admin</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="page">
		<form action="#" method="post">
		<div id="body" class="contact">
			<div>
				<h1>Search here to view details</h1><br><br><br>
				<p>Search By</p>
				<p>
				<select style="padding:10px;" name="category">
                  <option value="fname">First Name</option>
                  <option value="lname">Last Name</option>
                  <option value="email">Email</option>
                  <option value="homephone">Home Phone Number</option>
                  <option value="cellphone">Cell Phone Number</option>
                </select>
                </p>
				<input type="text" required name="search"/>
				<p>
				<input type="submit" value="Search"/>
				</p>
				<?php
				if (isset($_POST['category']) and isset($_POST['search'])){
                    $selected_val = $_POST['search'];
                    $selected_cat = $_POST['category'];
                    $query = "SELECT * FROM user WHERE (`".$selected_cat."` LIKE '%".$selected_val."%')";
                    $result=mysql_query($query);
                    if(mysql_num_rows($result)){
                    print("<table style='margin-left:50px;margin-bottom:20px;'>");
                    print("<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th><th>Home Phone</th><th>Cell Phone</th></tr>");
                    while($row = mysql_fetch_array($result))
 	                {
 	                    //print_r($row);
 	                    print("<tr style='color:white;'><td>".$row[1]."</td>\t<td>".$row[2]."</td>\t<td>".$row[3]."</td>\t<td>".$row[4]."</td>\t<td>".$row[5]."</td>\t<td>".$row[6]."</tr>");
 	                    
 	                }
 	                print("</table>");
                    }else{
                        print("<p style='color:red;'>No results to match your query.</p>");
                    }
                }
                ?>
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
	</div>
</body>
</html>