<?php
	/*
		@ Exercise: 48
		@ Author: Ioannis A. Mantoudis
		Create the interface 'Metrics' and define two methods to be implemented in different classes and can be
		used for finding the area and the perimeter of those classes of shapes. 
	*/
?>



<!DOCTYPE html>
<head>
	<title>Exercise 48 - Creating the interface Metrics</title>
</head>
<body>
	<h2>Object Oriented Ex 8 - Interface 'Metrics' with methods 'area' and 'perimeter' </h2>
	<?php
		
		/* when declaring an interface it's common practice to preface the name with an 'I'
			to make them more easy to recognize
		*/
		interface IMetrics
		{
			// Class properties must not be defined in the interface only class methods
			function perimeter();
			function area();
			
		}

		
	?> 
</body>
</html>