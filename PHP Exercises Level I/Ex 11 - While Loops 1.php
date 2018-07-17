<?php
	
	/*
		@ Exercise: 11
		@ Author: Ioannis A. Mantoudis
		Using a while loop to print numbers 1 - 50 with 10 numbers per row
		Using a while loop to print odd numbers up to 50 with 10 numbers per row
		Using a while loop to print even numbers up to 50 with 10 numbers per row
		
	*/
	
	$i = 1;
	while ($i <= 50)
	{
		if($i % 10 ==0)
			echo "$i <br/>";
		else
			echo "$i - ";
		$i++;
	}
	echo "<br/>";
	
	$i = 1;
	while ($i <= 50)
	{
		if(($i == 19) || ($i == 39 || $i == 49)) // For display purposes
			echo "$i <br/>";
		else
			echo "$i - ";
		$i += 2;
	}
	echo "<br/>";
	
	$i = 0;
	while ($i <= 50)
	{
		if(($i == 18) || ($i == 38 || $i == 50)) // For display purposes
			echo "$i <br/>";
		else
			echo "$i - ";
		$i += 2;
	}
	
?>
	