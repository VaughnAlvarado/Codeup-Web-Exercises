<!DOCTYPE html>
<html>
<head>
	<title>Challenge</title>
</head>

<body>
	<h1>GET</h1>
	<?php var_dump($_GET);?>

	<h1>POST</h1>
	<?php var_dump($_POST);?>


<body style="background-color:lightgrey">
	<text style="Font-family:Cursive">

	
	<main>
	 <div id="wrapper">

<h2>Search</h2>
<form method="GET" action="/forms.php">
	<p>
		<label for="Search">Search</label>
		<input id="search" name="search" type="text" autofocus>
		<button id= type="Enter">Enter!</button>
	</p>


<h2>Log In Form</h2>
<form method="POST" action="/forms.php">
			<p>
				<label for="Username">Username</label>
				<input id="username" name="username" type="text" placeholder="Put The Username" autofocus>
			</p>
			</p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Put The Password">
			</p>
			<p>
				<button type="Submit">Log In Now! </button>
			</p>
		</form>

		<h2>Sign Up Form</h2>
		<form method="POST" action="/forms.php">
			<p>
				<label for="First_Name">First Name</label>
				<input type="text" id="first_name" name="first_name" placeholder="First Name">
			</p>
			<p>
				<label for="Last_Name">Last Name</label>
				<input type="text" id="last_name" value="" name="last_name" placeholder="Last Name">
				<p>
					<label for "sign_up_Email_Address">Email Address</label>
					<textarea id="sign_up_email_address" value="" name="sign_up_email_address"></textarea>
				</p>
			</p>
				<label for="sign_up_Username">Username</label>
				<input id="sign_up_username" value="" name="sign_up_username" type="text" placeholder="Put The Username">
			</p>
			<p>
				<label for="sign_up_password">Password</label>
				<input id="sign_up_password" name="sign_up_password" type="sign_up_password" placeholder="Put The Password">
			</p>
			<p>
				<button type="Enter">Enter</button>
			</p>
		</form>

		<h2>Contact Me</h2>
		<form method="POST" action="/forms.php">
			<p>
				<label for="address">Address</label>
				<textarea id="address" name="address" type="text" placeholder="Enter Address"></textarea>
			</p>
			<p>
				<label for="Subject">Subject</label>
				<textarea id="subject" name="subject" type="text"></textarea>
			</p>
			<p>
				<label for="text">Text</label>
				<textarea id="email_body" name="email_body" rows="7" cols="50" placeholder="Enter Here"></textarea>
			</p>
			<p>
				<button type="Send">Send</button>
			</p>
		</form>
		
		<div> 
			<h2>Testing</h2>
		<form action= "forms.php" method="POST">
			<label for="fname">First Name</label>
			<input type="First_name" id="fname" placeholder="Enter You Name">

		<label for="Are_You_Smart?">Are You Smart?</label>
		<select id="Are_You_Smart?" name="Are_You_Smart?">

			<option disabled selected>Select Option</option>
			<option value="1">Yes</option>
			<option value="0">No</option>
		</select>
		<input type="submit">
	</form>
	
	<main>

</body>
</html>