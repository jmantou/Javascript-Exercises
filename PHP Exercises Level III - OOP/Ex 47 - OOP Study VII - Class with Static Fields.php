<?php
	/*
		@ Exercise: 47
		@ Author: Ioannis A. Mantoudis
		Declare a Public Class named Member with 4 private properties and the appropriate
		getter and setter methods. Display in the browser the Member class properties. 
		
	*/
?>



<!DOCTYPE html>
<head>
	<title>Exercise 47 - Classes with Static Fields</title>
</head>
<body>
	<h2>Object Oriented Ex 7 - Class 'Circle' with a static field for computing Area and Circumference </h2>
	<?php
		
		class Circle
		{
			// We could also use the built in M_PI constant
			const PI = 3.14159;
			private $radius;

			function __construct($radius)
			{
				$this->radius = $radius;
			}

			public function circumference()
			{
				return 2 * self::PI * $this->radius;
			}

			public function area()
			{
				return self::PI * pow($this->radius, 2);
			}
		}

		$c = new Circle(4);
		echo "Circumference of circle (R = 4) = " . "{$c->circumference()} </br>";
		echo "Area of circle (R = 4) = " . "{$c->area()} </br>";
	?> 
</body>
</html>