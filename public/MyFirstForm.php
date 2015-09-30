<!DOCTYPE html>
	
<html>
<head>
	<title>Form</title>
</head>
<body>
	
	<main>
	<h1>GET</h1>
	<?php var_dump($_GET);?>
 	<h1>POST</h1>
 	<?php var_dump($_POST);?>
	

<section class="forms">
<h1>My First Form</h1>
<form method="POST" action="/MyFirstForm.php">
			<p>
				<label for="Username">Username</label>
				<input id="username" value="username" name="username" type="text" placeholder="Put The Username" autofocus>
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Put The Password">
			</p>
			<p>
				<button type="Submit">Log In Now! </button>
			</p>
		</form>

		<h1>Compose An email</h1>
	<form method="POST" action="/MyFirstForm.php">
 			<p>
				<label for="to">To</label>
				<input id="to" value="" name="to" type="text">
			</p>
			<p>
				<label for="from">From</label>
				<input id="from" value="" name="from" type="text">
			</p>
			<p>
				<label for="subject">Subject</label>
				<input id="subject" value="" name="subject" type="text">
			</p>
			<label for="body">Body</label>
	<br>
			<textarea id="email_body" value="email_body" rows="7" cols="50" placeholder="Enter Here"></textarea>
		</p>
		<p>
			<p>	
				<p>
			<input type="checkbox" id="save?" name="save?" value="yes" checked>
			<label for="save?">Save Draft?</label>
		</p>
			</p>
			<button type="send">SEND!</button>
		</p>
	</form>
	
	<h1>Multiple Choice Test</h1>
	<form method="POST" action="/MyFirstForm.php">
		<p>
		<p>What is the capital of New York?</p>
			<label>
			    <input type="radio" name="q1" value="New York">
			    New York
			</label>
			<label>
			    <input type="radio" name="q1" value="Brooklyn">
			    Brooklyn
			</label>
			<label>
			    <input type="radio" name="q1" value="compton">
			    Compton
			</label>
			<label>
			    <input type="radio" name="q1" value="Bronx">
			    Bronx
			</label>
		</p>
		
		<p>How Fast Does a Donkey Run?</p>
		<p>
			<label>
			    <input type="radio" name="q2" value="43mph">
			    43 MPH
			</label>
			<label>
			    <input type="radio" name="q2" value="15mph">
			    15 MPH
			</label>
			<label>
			    <input type="radio" name="q2" value="20mph">
			    20 MPH
			</label>
			<label>
			    <input type="radio" name="q2" value="25mph">
			    25 MPH
			</label>
		</p>

	<p>How Many Types Of Bananas Are There?</p>
	<p>
		<label>
		    <input type="checkbox" id="answer" name="q3" value="1000">
		    1000
		</label>
		<label>
		    <input type="checkbox" id="answer" name="q3" value="500">
		    500
		</label>
		<label>
		    <input type="checkbox" id="answer" name="q3" value="550">
		    550
		</label>
		<label>
		    <input type="checkbox" id="answer" name="q3" value="200">
		    200
		</label>
	</p>
		<p>
			<input type="checkbox" id="save?" name="save?" value="yes" checked>
			<label for="save?">Save Draft?</label>
		</p>
	
	<p>Optional Questions</p>
			
	<p>
		<label for="Are_You_Smart?">Are You Smart?</label>
		<select id="Are_You_Smart?" name="Are_You_Smart?">

			<option disabled selected>Select Option</option>
			<option value="1">Yes</option>
			<option value="0">No</option>
		</select>
	</p>
		
	<p>
		<label for="os">What operating systems have you used?</label>
		<select id="os" name="os">
    		<option disabled selected>Select All That Apply</option>
    		<option value="linus+osx+Windows">A and B and C</option>
    		<option value="linus+osx">A and B</option>
    		<option value="linus+windows">A and C</option>
    		<option value="osx+windows">B and C</option>
    		<option value="linus">A: Linux</option>
    		<option value="osx">B: OS X</option>
    		<option value="windows">C: Windows</option>

		</select>
	</p>
		<p>
			<button type="Submit">Submit</button>
		</p>
	</form>
</section>


		<main>
</body>
</html>
