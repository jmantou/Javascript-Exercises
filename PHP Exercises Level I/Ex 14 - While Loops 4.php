<?php
	
	/*
		@ Exercise: 14
		@ Author: Ioannis A. Mantoudis
		Write an algorithm that computes and prints all the integer numbers
		that from 100 to 600 that are multiples of 3 and not 5. The algorithm must also
		print the count and average of this numbers.
		
	*/
	
	$number = 100;
	$sum = 0;
	$count = 0;
	while ($number <= 600)
	{
		if (($number % 3 == 0) && ($number % 5 != 0))
		{
			print "\t$number";
			$sum += $number;
			$count++;
		}
		$number++;
	}
	$average = $sum / $count;
	print "|<br/>\n";
	echo "<h4>";
		print "Count = $count <br/>\n";
		printf("Average = %.2f\n", $average);
	echo "</h4>"; // For better clarity
	
	
	
	
	
?>
	