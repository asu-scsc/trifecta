<?php

// The following is the default setting for the database information. 
// These will need to be changed once uploaded to an actual web-host.
// Intended to be tested via XAMPP

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

// Ensure connection is valid

if($conn->connect)error{
	die("Connection has failed. Reason: " . $conn->connect_error);
}

echo "Connection made successfully"; // This line isn't reached if condition above is met.

?>


