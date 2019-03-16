<?php
	
	/*
		@ Exercise: 35
		@ Author: Ioannis A. Mantoudis
		Write a PHP program that reads Names, Surnames, Class and grades from
		a txt file (comma delimited) that the user uploads and prints the Average grade and Standard Deviation
		for every lesson of this dataset and in a Web format.
		
	*/
			
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Class Statistics</title>
		<meta name="description" content="">
		
	</head>

	<body>
		<h1>Welcome to the Class Statistics App</h1>
		
		<form action="script40.php" enctype="multipart/form-data" method="POST">
		<p>
			Upload file <br/>
			<input type = "hidden" name = "MAX_FILE_SIZE" value="102400">
			<input type="file" name="fileupload">
		</p>
		
			<button type = "submit">Upload</button>
		</p>
		</form>
		<h2>File Upload results</h2>
	
	</body>
</html>
	