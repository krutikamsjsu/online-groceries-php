<!--?php
	$db = mysqli_connect('localhost','id3265575_admindb','PasswordDB','id3265575_schooldb')	or die('Error connecting to Database!');
	$query = "SELECT * FROM UserDetails";
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)) 
		{
		echo($row['fname'].";".$row['lname'].";".$row['email'].";".$row['address'].";".$row['hphone'].";".$row['cphone']."\n");
		}
	mysqli_close($db);
?-->
<?php
$con = mysql_connect("localhost","id5062861_krutika","krutika");
mysql_select_db("id5062861_cmpeesp", $con);


$query = "SELECT * FROM UserDetails";
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

	mysql_close($db);
?>