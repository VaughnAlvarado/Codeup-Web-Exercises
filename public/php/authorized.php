<?php
require '../../auth.php'; 
session_start();
var_dump($_SESSION['username']);
if (!Auth::check()) {
	header("Location: /php/login.php");
	die();
} else {
	$username = Auth::user();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>authorized</title>
</head>
<body>
	<!-- <h3>Users Logged in:</h3> -->
	<h1>Authorized</h1>
	<h2>Welcome <?=$username ?> !!!!</h2>
<a href="/php/logout.php">Logout</a>
</body>
</html>