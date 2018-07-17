<?php
	
	/*
		@ Exercise: 18
		@ Author: Ioannis A. Mantoudis
		Write an algorithm that prints all the integer
		numbers from 100 to 600 that are multiplies of 3 and 
		not 5 and computes the average of this numbers.
		
	*/
	
	$number = 100;
	$sum = 0;
	$count = 0;
	do
	{
		if (($number % 3 == 0) && ($number % 5 <> 0))
		{
			print "$number \t";
			$count++;
			$sum += $number;
		}	
		$number++;
	} while ($number <= 600);
	printf("<h4>Average is %.2f </h4>", ($sum / $count));
	
	
		
	
?>
	