<?php

// The following is the default setting for the database information. 
// These will need to be changed once uploaded to an actual web-host.
// Intended to be tested via XAMPP

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trifecta";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Ensure connection is valid

if(mysqli_connect_errno()){
	printf("Connection has failed. Reason: ",  mysqli_connect_error());
	exit();
}

//echo "Connection to database made successfully" . "<br/><br/>"; // This line isn't reached if condition above is met.


?>


