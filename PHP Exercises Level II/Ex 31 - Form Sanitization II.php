<?php
	
	/*
		@ Exercise: 31
		@ Author: Ioannis A. Mantoudis
		This is the same problem as in exercise 21, but the input from the form
		must be filtered in order to except valid decimal numbers
		
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
	