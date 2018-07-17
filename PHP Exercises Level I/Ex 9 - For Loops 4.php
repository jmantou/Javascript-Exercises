<?php
	
	/*
		@ Exercise: 9
		@ Author: Ioannis A. Mantoudis
		Print all the 3 - digit positive integers that have their digit as odd
		numbers. Print also their count and their percentage to the total of the
		3 - digit integers.
		
	*/
	
	$integerOddDigits = 0;
	for ($i = 100; $i < 999; $i++)
	{
		// splitting the digits
		$hundreds = intdiv($i, 100);
		$helper = $i % 100;
		$tenths = intdiv($helper, 10);
		$monads = $helper % 10;
		
		if (($hundreds % 2 == 1) && ($tenths % 2 == 1) && ($monads % 2 == 1))
		{
			$integerOddDigits++;
			echo "<br/>$i";
		}
	}
	$percentage = ($integerOddDigits / 900) * 100;
	echo "<br/>\n";
	echo "<h4>Number of Odd - Digit integers = {$integerOddDigits}</h4><br/>";
	printf("<h4>Percentage = %.2f", $percentage);
	echo "%</h4>";
	
?>
	