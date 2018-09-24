<?php
include("conection.php");
				if (isset($_POST['category']) and isset($_POST['search'])){
                    $selected_val = $_POST['search'];
                    $selected_cat = $_POST['category'];
                    $query = "SELECT * FROM user";
                    $result=mysql_query($query);
                    if(mysql_num_rows($result)){
                    while($row = mysql_fetch_array($result))
 	                {
 	                    
 	                }
                    }
                }
?>