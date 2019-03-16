
<?php
	
	/*
		@ Exercise: 32
		@ Author: Ioannis A. Mantoudis
		Build a form for entering name, Surname, email and GDPR consent checkbox
		and apply the proper filters for form validation
		
	*/
			
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>The Email Form</title>
		<meta name="description" content="">
		
	</head>

	<body>
		<h1>Sign In Credentials</h1>
		
		<form action="script32.php" method="POST">
		<p>
			<b>Name:</b></br>
			<input type = "text" name = "name">
		</p>
		<p> 
			<b>Surname:</b><br/>
			<input type = "text" name = "surname">
		<p>
		<p> 
			<b>Email:</b><br/>
			<input type = "text" name = "email">
		</p>
		<p> 
			<b>GDPR Consent:</b><br/>
			<input type = "checkbox" name = "consent" value="yes">
			I Consent
		</p>
		<p>
			<button type = "submit">Submit</button>
		</p>
		</form>
	
	</body>
</html>
	