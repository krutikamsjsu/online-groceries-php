<?php
$con = mysql_connect("localhost","id5062861_krutika","krutika");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("id5062861_cmpeesp", $con);
?>
