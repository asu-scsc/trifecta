<?php
require('db_connect.php');
// If the values are posted, insert them into the database.
if (isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
	$result = mysqli_query($conn, $query);
	
	if($result){
		$msg = "User Created Successfully.";
		header("location: indexTest.html");
	}
}
?>




<html>
<head>
<link rel="stylesheet" type="type/css" href="styling.css">
<link rel="stylesheet" href="BootStrap/bootstrap-3.3.6/dist/css/bootstrap.css">
<title> Register </title>

<style>
.register-form{
	width: 500px;
	margin: 0 auto;
	text-align: center;
	padding: 10px;
	color: #fff;
	background : #7bc1ed;
	margin-top:150px;			/* Margins are the one that space objects away from other objects, border are inner, margin are outter.*/
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
}
.register-form form input{
	padding: 5px;
}
.register-form .btn{
	background: #c1deff;
	padding: 7px;
	border-radius: 5px;
	text-decoration: none;
	width: 100px;
	display: inline-block;
	color: #FFF;
}
.register-form .register{
	border: 0;
	width: 100px;
	padding: 8px;
}
#navbar-main a:hover {
	background-color: #4CAF50;
	color: #ffd258;
}
.navbar-brand a:hover {
	background-color: #4CAF50;
}
</style>

</head>

<body style="background-color:#c1deff">

<div class="navbar navbar-default navbar-fixed-top" style="background-color:#333">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="indexTest.html" style="color:#cfdde0">FriendFinder</a>
        </div>
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav" style="background-color:#333">
                    <li><a href="indexTest.html" style="color:#cfdde0" class="text">Home</a>
                    </li>
                    <li><a href="AboutUs.html" style="color:#cfdde0" class="text">About Us</a>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" style="background:#cfdde0">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Password" style="background:#cfdde0">
                    </div>
                    <button type="submit" class="btn btn-default" style="background:#68788a">Sign In</button>
                </form>
            </div>
        </center>
    </div>
</div>

<!-- Registration Form for Signing Up -->
<div class="register-form">
    <h1 style="font-family: 'Shift', sans-serif;font-weight: bold; color:#cfdde0">Sign Up</h1>
    <form action="" method="POST">
        <p><label style="color:#cfdde0">User Name : </label>
        	<input id="username" type="text" name="username" placeholder="username" /></p>
        <p><label style="color:#cfdde0">E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
        	<input id="password" type="email" name="email" placeholder="example@example.com"/></p>
        <p><label style="color:#cfdde0">Password&nbsp;&nbsp; : </label>
        	<input id="password" type="password" name="password" placeholder="password" /></p>
        <!--<a class="btn" href="indexTest.html">Login</a>-->
        	<input class="btn register" type="submit" name="submit" value="Register" />
    </form>
</div>
</body>
</html>
