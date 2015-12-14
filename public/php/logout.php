<?php
require 'auth.php';
session_start();
Auth::logout();
endSession();
header("Location: /php/login.php");
die();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	<h1>You have been logged out.</h1>


</body>
</html>