<?php
	
	/*
		@ Exercise: 'Saying Hello World!'
		@ Author: Ioannis A. Mantoudis
		Outputting to the screen the text 'Hello World!'
		in 5 different ways with PHP 
		
	*/
	
	echo "Hello World! 1<br/>";
	print "Hello World! 2" . "<br/>";
	$greeting1 = "Hello World! 3";
	// The printf() function from C is ideal if we also want some formatting of the string 
	printf("%s <br/>\n", $greeting1);
	
	$greeting2 = "Hello World! 4";
	print_r($greeting2);
	
	// The sprintf() function is identical to printf() excepts that
	// it assigns the output to a variable
	echo "<br/> \n";
	$greeting3 = sprintf("%s", "Hello World! 5");
	print($greeting3);
	
	
	
	
	
?>
	