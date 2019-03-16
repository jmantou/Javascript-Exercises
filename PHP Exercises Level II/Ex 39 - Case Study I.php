<?php
	
	/*
		@ Exercise: 39
		@ Author: Ioannis A. Mantoudis
		Write a PHP program that reads the Amount of Money of a loan, the Number of Periods to 
		be repaid and the Annual Interest Rate and produces an Amortization table.
		
	*/
			
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Calculating a Loan</title>
		<meta name="description" content="">
		
	</head>

	<body>
		<h1>Welcome to the Loan Amortization App</h1>
		
		<form action="script39.php" enctype="multipart/form-data" method="POST">
		<p>
			<b>Loan Amount (Present Value):</b><br/>
			<input type = "text" name = "presentValue">
		</p>
		<p>
			<b>Number of Payments per Month:<b></br>
			<input type = "text" name = "numberOfPayments">
		</p>
		<p>
			<b>Annual Rate:</b></br>
			<input type = "text" name = "ratePerYear">
		</p>
		
			<button type = "submit">Calculate</button>
		</p>
		</form>
	
	</body>
</html>
	
		