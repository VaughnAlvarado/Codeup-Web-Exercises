<?php
require '../../auth.php';
require '../../input.php';
session_start();
$sessionId = session_id();

if (Auth::check()) {
	header("Location: /php/authorized.php");
	die();
} 
$loginFail = false;
$username = Input::get('username');
$password = Input::get('password');

if (Auth::attempt($username,$password)) {
	header("Location: /php/authorized.php");
	die();
} else if ($username !== null && $password !== null) {
	$loginFail = false;
}
$_SESSION['IS_LOGGED_IN'] = false;
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
	<?php if ($loginFail === false): ?>
		<h3>Input Info:</h3>
	<?php else: ?>
		<h1>Login Failed...Try Again</h1>
	<?php endif; ?>
	<form method="POST">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
   
</body>
</html>