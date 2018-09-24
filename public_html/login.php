<?php
include("conection.php");
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$result = mysql_query("SELECT * FROM user WHERE email='".$username."'");



if ($result !== false) {
    $pwd = "";
while($row = mysql_fetch_array($result))
  {
$pwd = $row["password"];
  }

if($password==$pwd)
{
	//["userid"] = $_POST["uid"];
	//$_SESSION["type"]="admin";
	header("Location: users.php");
}
else
{
print("<p style='text-align:center;background-color:red;padding:20px;color:white'>Incorrect Credentials. Please try again.</p>");
}
    
} else {
    // an error has occured
    echo mysql_error();
    die;    // note : echoing the error message and dying 
            // is OK while developping, but not in production !
}
/*$items=file("./usrpwd.txt");
					$i = 0;
					foreach ($items as $line)
					{
						$line = str_replace("\n", "", $line);
						$line = explode("\t", $line);
						//print($line[1]);
						if($username == $line[0] and $password==$line[1])
							{
								header("Location: users.php");
							}
					}
					print("<p style='text-align:center;background-color:red;padding:20px;'>Incorrect Credentials. Please try again.</p>");
					}*/
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
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
						<a href="#body" class="fs26">Please Login to continue ...</a>
					</li>
				</ul>
			</div>
		</div>
		<div>
		<form action="login.php" method="post">
		<div id="body" class="contact">
			<div>
				<h1>Login</h1><br><br><br>
				<p>UserName</p>
				<input type="text" name="username"/>
				<p>Password</p>
				<input type="password" name="password"/>
				<p>
				<input type="submit" value="Login"/>
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
				<p>&copy; 2023 by RNRNR. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>