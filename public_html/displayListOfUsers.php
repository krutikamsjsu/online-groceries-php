<?php 
#$ch = curl_init("http://shopindia.ga/list_of_users.php");
curl_setopt($ch, CURLOPT_COOKIE, 'curlcall=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  
$data = curl_exec($ch);
curl_close($ch);
$data = explode("\n", $data);
array_pop($data);
//array_slice($data, 0, count($data) - 1)
foreach ($data as $line)
{
	echo "<tr>";
    $row = explode(";", $line);
	foreach ($row as $col)
	{
	 echo "<td>$col</td>";
	}
	echo "</tr>";
}

?>