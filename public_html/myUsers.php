<?php
include("conection.php");
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List of users</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
	<style>.section{display:none;}</style>
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
		<div id="body">
		    <div>
		        <h1>shopindia.com Users List</h1><br>
		    </div>
		</div>
		</div>
		</body></html>
<?php
                    $query = "SELECT * FROM user";
                    $result=mysql_query($query);
                    if(mysql_num_rows($result)){
                    print("<table style='margin-left:220px;margin-bottom:20px;background-color:black;'>");
                    print("<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th><th>Home Phone</th><th>Cell Phone</th></tr>");
                    while($row = mysql_fetch_array($result))
 	                {
 	                    //print_r($row);
 	                    print("<tr style='color:white;'><td>".$row[1]."</td>\t<td>".$row[2]."</td>\t<td>".$row[3]."</td>\t<td>".$row[4]."</td>\t<td>".$row[5]."</td>\t<td>".$row[6]."</tr>");
 	                    
 	                }
 	                print("</table>");
                    }
                ?>