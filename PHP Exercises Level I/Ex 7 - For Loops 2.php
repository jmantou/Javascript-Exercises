<?php
	
	/*
		@ Exercise: 7
		@ Author: Ioannis A. Mantoudis
		Using a for loop to compute the factorial of a given number.
		
	*/
	
	$number = 8;
	$factorial = 1;
	
	// Checking for negative numbers
	if($number < 0)
		echo "Cannot compute the Factorial of a negative number <br/>";
	for ($i = 1;$i <= $number;$i++)
	{
		$factorial *= ($i + 1);
	}
	echo "Factorial of number {$number} = {$factorial} <br/>\n";
	
?>
	