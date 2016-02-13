<?php
// Creator: Jacob Leonard
// This PHP Script handles queurying the database for matches of tags
// But this only previews the total number.


require('db_connect.php');

// Testing SQL counting number of row matches for each tag

$tag1 = $_POST["tag1"] =  // tag1
$tag2 = $_POST["tag2"] =  // tag2
$tag3 = $_POST["tag3"] =  // tag3

$sql1 = "SELECT COUNT(*) AS tag_total1 FROM users WHERE tag1";
$sql2 = "SELECT COUNT(*) AS tag_total2 FROM users WHERE tag2"; 
$sql3 = "SELECT COUNT(*) AS tag_total3 FROM users WHERE tag3";

$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);
$result3 = mysql_query($sql3);

echo mysql_fetch_array(result1)['tag_total1'];
echo mysql_fetch_array($result2)['tag_total2'];
echo mysql_fetch_array($result3)['tag_total3'];


?>

