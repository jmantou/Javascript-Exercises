<?php
	
	/*
		@ Exercise: 15
		@ Author: Ioannis A. Mantoudis
		A ball is falling from a 10 meter height. Every time it hits the 
		ground it bounces 1 meter less in height than the previous time. Write an algorithm to compute
		the number of bounces needed to stop.
		
	*/
	
	$height = 10;
	$numberOfBounces = 0;
	while ($height >= 0)
	{
		$height--;
		$numberOfBounces++;
	}
	
	print "Number of Bounces before stopping:# <h4>$numberOfBounces</h4>";
	print "<br/>\n";
	
	
	
	
	
	
	
	
?>
	