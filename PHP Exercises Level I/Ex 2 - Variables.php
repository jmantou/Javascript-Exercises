<?php
	
	/*
		@ Exercise: 2
		@ Author: Ioannis A. Mantoudis
		Creating and using different kinds of variables.
		Outputting variables in different ways and values
	*/
	
	$name = "John";
	$myColor = "blue";
	$price = 12.25;
	$age = 40;
	$sum = 15 + "52";
	
	echo "My name is {$name} <br/>";
	print "My favorite color is " . " {$myColor} <br/>"; // Concatenation operator
	printf("Your age is %d and you paid %.2f \$ dollars", $age, $price);
	echo " <br/>The sum is {$sum} after converting '15' from string to number";
		
?>
	