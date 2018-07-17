<?php
	
	/*
		@ Exercise: 8
		@ Author: Ioannis A. Mantoudis
		Print the positive 3 - digit integers that are a multiplication of 7
		and their count.
		
	*/
	
	$count = 0;
	
	for ($i = 105;$i <= 999;$i+= 7) // 105 is the 1st multiple of 7 over 100
	{
		$count++;
		echo "$i  ";
	}
	echo "<br/>";
	echo "The count is: {$count} <br/>\n";
	
?>
	