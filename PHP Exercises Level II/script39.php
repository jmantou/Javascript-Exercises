<?php

	function amortizationLoanTable($numberOfPeriods, $presentValue, $ratePerYear, $pmt)
	{
		// Calculate monthly Rate
		$ratePerMonth = $ratePerYear / 12;
		// Calculate Interest per Month
		$interestPerMonth = round(($presentValue * $ratePerMonth), 2);
		// Calculate Principal paid per Month
		$principal = round(($pmt - $interestPerMonth), 2);
		// Calculate remaining Balance
		$balance = round(($presentValue - $principal), 2);
		
		if ($balance < $pmt)
			$balance = 0;
		
		// Printing and Formatting the Amortization Table
		printf("<tr><td>%d</td>", $numberOfPeriods);
		printf("<td>%s</td>", number_format($balance, 2));
		printf("<td>%s</td>", number_format($pmt, 2));
		printf("<td>%s</td>", number_format($principal, 2));
		printf("<td>%s</td></tr>", number_format($interestPerMonth, 2));
		
		// Calling with Recursion amortizationLoanTable function
		if ($balance > 0)
		{
			$numberOfPeriods++;
			amortizationLoanTable($numberOfPeriods, $presentValue, $ratePerYear, $pmt);
		}
		else
		{
			return(0);
		}
		
	}
		
?>