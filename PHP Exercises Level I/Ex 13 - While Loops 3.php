<?php
	
	/*
		@ Exercise: 13
		@ Author: Ioannis A. Mantoudis
		Write an algorithm that computes and prints the sum:
		S = 5^2 + 10^2 + 15^2 + ..., till the sum is bigger than 100^4.
		Print also the number of the terms of the sum series.
		
	*/
	
	$i = 5;
	$sum = 0;
	$count = 0;
	while ($sum <= pow(100, 4))
	{
		$sum = $sum + pow($i, 2);
		$i += 5;
		$count++;
	}
	print "The sum up to 100^4 is $sum <br/>\n";
	print "Number of terms for the sum: #$count <br/>\n";
	
	
	
	
?>
	