<?php
	
	/*
		@ Exercise: 10
		@ Author: Ioannis A. Mantoudis
		Write an algorithm for computing the value of function f(x) = (x - 4) / (x + 1)
		given that x is in interval [5, 5] with step 0,05.
		
	*/
	
	for ($x = -5; $x <= 5; $x += 0.5)
	{
		if ($x <> -1)
		{
			$fx = ($x - 4) / ($x + 1);
			printf("For value = %f --> f(x) = %.2f <br/>", $x, $fx);
		}
		else
			print "For x = -1 function is not set!<br/>";
	}
	
?>
	