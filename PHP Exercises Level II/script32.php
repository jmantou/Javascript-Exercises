<?php		
	
	/* We will be using filter Validation for the
		email address and the 'I Consent' checkbox.
		The FILTER_VALIDATE_EMAIL filter checks if the
		email address is syntactically correct. More robust and
		secure methods for email validation will be implemented
		in future exercises in more advanced levels.
	*/
	
	// Validating the email address
	$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
	if ($email === false)
		echo "Submitted email is syntactically invalid!";
	// Validating the checkbox
	$consent = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
	$value = "yes";
	if (filter_has_var(INPUT_POST, "consent"))
	{
		if ($_POST["consent"] == $value)
		{
			$consented = true;
			echo "You consented for GDPR rules. Processing the form";
		}
	}
	else
	{
		$consented = false;
		echo "You did not consent. Cannot process your form ...";
	}
	
	
	
		
	
	
