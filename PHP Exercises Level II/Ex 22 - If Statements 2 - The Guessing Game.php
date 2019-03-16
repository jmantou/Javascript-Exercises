<?php
	
	/*
		@ Exercise: 22
		@ Author: Ioannis A. Mantoudis
		Write a simple game app that the computer sets a number and the user 
		tries to find him in 5 guess. The app will guide the user in each try
		by telling him if his guess is greater or lower than the number we try to find.
		
	*/
			
?>

<?php
			define('NUMBER_TO_GUESS', 55); // Hard coded but we'll use a random number generator in the future
			$message = "";
			$numberOfTries = 5;
			if(isset($_POST['submit']))
			{
				$number = $_POST['guess'];
			

				if(!isset($number))
				{
					$message = "Welcome to our Guessing Game";
				}
				else if ($number > NUMBER_TO_GUESS)
				{
					$message = "Your guess number {$number} is too big! Try a smaller number";
					$numberOfTries--;
				}
				else if ($number < NUMBER_TO_GUESS)
				{
					$message = "Your guess number {$number} is too small! Try a bigger number";
					$numberOfTries--;
				}
				else
				{
					$message = "Bravo! You find it! {$number} is the secret number";
				}
			
			}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>The Guessing Game for Kids</title>
		<meta name="description" content="">
		
	</head>
	

	<body>
		<h1> <?php echo $message; ?> </h1>
		<form action="" method="post"> <!-- <?php echo $_POST['PHP_SELF'] ?> -->
		<p>
			<strong>Type your guess here: </strong> <br/>
			<input type = "text" name = "guess">
		</p>
		</p>
			<button type = "submit">Submit</button>
		</p>
		
	
	</body>
</html>
	