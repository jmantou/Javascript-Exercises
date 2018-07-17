<?php
	
	/*
		@ Exercise: 12
		@ Author: Ioannis A. Mantoudis
		Write an algorithm that computes and prints the minimum sum:
		S = 2 * 1 + 3 * 2 + 4 * 3 + ..., where S > 10 ^ 6
		
	*/
	
	$i = 1;
	$s = 0;
	while ($s <= pow(10, 6))
	{
		$s =+ ($i + 1) * $i;
		$i++;
	}
	print "The minimum sum over 10^6 is S = $s";
	
?>
	