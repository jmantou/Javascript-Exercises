<?php
	
	/*
		@ Exercise: 23
		@ Author: Ioannis A. Mantoudis
		Write a simple program that prints in a new page information
		entered in a form by a user. No form sanitization or filtering
		is required. Use http method POST.
		
	*/
			
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>User Data</title>
		<meta name="description" content="">
		
	</head>
	
	<body>
		<h1>Personal Data </h1>
		You may enter your personal data in the form below: <br/><br/>
		<form action="script23.php" method="post">
		<fieldset>
			<legend><strong>Personal Information</strong></legend>
		    <p>
		    	<label>Name:</label> <br/>
			    <input type="text" name="name">
		    </p>
		    <p>
		    	<label>Surname:</label> <br/>
			    <input type="text" name="surname">
		    </p>
		    <p>
		    	<label>Email:</label> <br/>
			    <input type="email" name="email">
		    </p>
		    <p>
		    	<label>Password:</label> <br/>
			    <input type="password" name="password">
		    </p>
		    <p>
		    	<label>Information:</label> <br/>
			    <textarea name = "information" rows="10" cols="40"></textarea>
		    </p>
		    <p> 
			    <label>GDPR Consent:</label><br/>
			    <input type="checkbox" name="consent" value="yes">
			    I Consent
		    </p>
		    </p>
			    <button type="submit">Submit</button>
			    <button type="reset">Reset</button>
		    </p>
		</fieldset>
	
	</body>
</html>
	