<?php
	
	include("includes/pmt.inc.php");
	include("includes/CompoundInterest.inc.php");
	// TODO In future time we must validate properly the above fields and what the user enters
	$price = $_POST['price'];
	$advance = $_POST['advance'];
	$numberOfPayments = $_POST['numberOfPayments'];
	// annualRate must not be zero
	$annualRate = $_POST['annualRate'];
	
	$pv = $price - $advance;
	echo "{$pv}" . "</br>";
	
	$pmtLoan = new Pmt($pv, $numberOfPayments, $annualRate);
	
	$finalPmt = $pmtLoan->computePMT();
	$finalPmt = round($finalPmt, 2);
	$interest = $finalPmt* $numberOfPayments - $pv;
	print "You received a loan of: " . "{$pv} € </br>";
	print "The monthly payment for your loan is: " . "{$finalPmt} € </br>";
	print "You will pay for Interest: " . "{$interest} € </br>";
	
	$value = CompoundInterest::fv($pv, $annualRate, $numberOfPayments);
	print "<h1>{$value}</h1>";
	
	// The calculation must be replaced by the static compoundInterest Class
	
?>	
