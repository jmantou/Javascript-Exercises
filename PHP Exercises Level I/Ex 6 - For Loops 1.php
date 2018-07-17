<?php
	
	/*
		@ Exercise: 6
		@ Author: Ioannis A. Mantoudis
		Using a for loop to print numbers 1 - 50 with 10 numbers per row
		Using a for loop to print odd numbers up to 50
		Using a for loop to print even numbers up to 50
	*/
	
	for ($i = 1;$i <=50;$i++)
	{
		if($i % 10 ==0)
			echo "$i <br/>";
		else
			echo "$i - ";
	}
	echo "<br/>";
	
	for ($i = 1;$i <= 50;$i+=2)
	{
		if(($i == 19) || ($i == 39 || $i == 49)) // For display purposes
			echo "$i <br/>";
		else
			echo "$i - ";
	}
	echo "<br/>";
	
	for ($i = 0;$i <= 50;$i+=2)
	{
		if(($i == 18) || ($i == 38 || $i == 50)) // For display purposes
			echo "$i <br/>";
		else
			echo "$i - ";
	}
	
?>
	