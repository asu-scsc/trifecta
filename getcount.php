<?php

require ('db_connect.php');

$q = $_REQUEST["q"]; // Query from onChange

//echo $q;

if ($q !== ""){

	$sql = "SELECT COUNT(*) AS tag_total1 FROM user WHERE tag1 = '$q' OR tag2 = '$q' OR tag3='$q'";
	
	$result1 = mysqli_query($conn, $sql);
	//if($result1 === FALSE){
	//	die(mysql_error()); 
	//}

	$count = mysqli_fetch_array($result1);

	
}

	echo $count[0] === "0" ? "None" : $count[0];


?>