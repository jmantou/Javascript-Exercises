<?php
	
	/*
		@ Exercise: 21
		@ Author: Ioannis A. Mantoudis
		In order to paint 4m2 of a wall we need 1 Kg of color paint. Write an app that
		reads from the user the area she wants to paint and the price of 1 Kg 
		of paint, and computes the money she has to pay. The app must also compute
		the amount of any left overs of paint color.
		
	*/
			
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>The Paint Calculator</title>
		<meta name="description" content="">
		
	</head>

	<body>
		<h1>Welcome to the Paint Calculator</h1>
		
		<form action="script21.php" method="POST">
		<p>
			Please enter the Wall Area <br/>
			<b>Wall Area:</b></br>
			<input type = "text" name = "area">
		</p>
		<p>
			Please enter the price of 1 Kg of paint <br/>
			<b>Price:</b><br/>
			<input type = "text" name = "price">
		<p>	
			<button type = "submit">Enter</button>
		</p>
		</form>
	
	</body>
</html>
	