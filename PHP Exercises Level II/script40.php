<?php

		$fileDirectory = "PHP Exercises II/";

		print "<h2>File Upload results</h2>";
		foreach ($_FILES as $fileName => $fileArray)
		{
			echo "<p>";
			echo "Path: " . $fileArray['tmp_name'] . "<br/>";
			echo "Name: " . $fileArray['name'] . "<br/>";
			echo "Type: " . $fileArray['type'] . "<br/>";
			echo "Size: " . $fileArray['size'] . "<br/>";
			echo "</p> <hr>";
		}

		if (is_uploaded_file($fileArray['tmp_name']))
		{
			move_uploaded_file($fileArray['tmp_name'], $fileArray['name']) 
				or die ("Could not Upload the file!");
			echo "File Uploaded Succesfully! <br/>";
		}

		$grades = fopen("grades.txt", "r");
		// Reading the file line by line
		print "<h2>Grade Book Statistics</h2>";
		while ($line = fgets($grades, 4096))
		{
			// separating data with explode and creating the array
			list($name, $surname, $class, $it, $networks, $programming, $gameDesign) = explode(",", $line);
			
			// Formatting and outputing Data
			printf("Name: %s <br />", $name);
			printf("Surname: %s <br />", $surname);
			printf("Class: %s <br />", $class);
			printf("IT: %s <br />", $it);
			printf("Networks: %s <br />", $networks);
			printf("Java Programming: %s <br />", $programming);
			printf("Game Design: %s <br />", $gameDesign);
			
			$average = ($it + $networks + $programming + $gameDesign) / 4;
			echo "<h3>Average for {$name} {$surname}: " . " <b>$average</b></h3>";
			
			
		}
		
?>