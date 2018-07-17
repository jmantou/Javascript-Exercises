<?php
	
	/*
		@ Exercise: 20
		@ Author: Ioannis A. Mantoudis
		How many terms do we have to add to the above series of numbers:
		S1 = 5 + 11 + 17 + 23 + ...
		S2 = 2 + 16 + 30 + 44 + ...
		for the second sum to be greater than the first doubled.
		
		
	*/
	
	$terms = 0;
	$s1 = 0;
	$s2 = 0;
	$a = 5;
	$b = 2;
	
	do
	{
		$s1 += $a;
		$s2 += $b;
		$terms++;
		$a += 6;
		$b += 14;
		echo "$s1 -- ";
		echo "$s2\t";
		echo "<br/>";
	} while ($s2 < (2 * $s1));
	
	printf("<h4>Number of terms is %d </h4>", $terms);
	
	
		
	
?>
	