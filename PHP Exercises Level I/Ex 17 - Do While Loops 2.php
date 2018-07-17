<?php
	
	/*
		@ Exercise: 17
		@ Author: Ioannis A. Mantoudis
		Write an algorithm that prints the sum of 
		positive 2-digit integer numbers.
		
	*/
	
	$number = 10;
	$sum = 0;
	do
	{
		$sum += $number;
		$number += 2;
	} while ($number < 100);
	print "The sum of 2-digit integers is $sum <br/>\n";
		
	
?>
	