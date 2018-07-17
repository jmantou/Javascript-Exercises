<?php
	
	/*
		@ Exercise: 19
		@ Author: Ioannis A. Mantoudis
		Studies showed us that the yearly decrease in numbers of a rare 
		insect species is 8.75%, while we estimate on the same time that
		their population is 35000 the present day. For the species to be 
		characterized as close to extinction, the population be under 6000.
		Write an algorithm that computes and prints the number of years it takes
		to characterize the species as close to extinction.
		
	*/
	
	define ("RATE_OF_REDUCTION", 0.0875);
	
	
	$currentPopulation = 35000;
	$years =0;
	do
	{
		$currentPopulation = $currentPopulation - intval($currentPopulation * RATE_OF_REDUCTION);
		$years++;
	} while ($currentPopulation > 6000);
	printf("<h4>Number of years is %d </h4>", $years);
	
	
		
	
?>
	