<?php
// Creator: Jacob Leonard
// This PHP Script handles querying the database for matches of tags
// But this only previews the total number.

require('db_connect.php');

// Testing SQL counting number of row matches for each tag

// Initializing PHP variables with form POST contents
$tag1 = $_POST["tag1"] =  // tag1
$tag2 = $_POST["tag2"] =  // tag2
$tag3 = $_POST["tag3"] =  // tag3
 
// SQL Query
$sql1 = "SELECT COUNT(*) AS tag_total1 FROM user WHERE tag1 = 'Harry Potter'";
$sql2 = "SELECT COUNT(*) AS tag_total2 FROM user WHERE tag2  = 'Harry Potter'"; 
$sql3 = "SELECT COUNT(*) AS tag_total3 FROM user WHERE tag3 = 'Harry Potter'";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

if($result1 === FALSE){
	die(mysql_error()); 
}

// Testing queries
$count1 = mysqli_fetch_array($result1);
	echo  $count1[0];
	
$count2 = mysqli_fetch_array($result2);
	echo  $count2[0];
	
$count3 = mysqli_fetch_array($result3);
	echo  $count3[0];

//echo mysql_fetch_array($result1)['tag_total1'];
//echo mysql_fetch_array($result2)['tag_total2'];
//echo mysql_fetch_array($result3)['tag_total3'];


?>

