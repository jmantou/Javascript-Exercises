<?php
	/*
		@ Exercise: 46
		@ Author: Ioannis A. Mantoudis
		Declare a Public Class named 'Product' with  private properties and the appropriate
		constructor and getter - setter methods. Create an object of class product and define some attributes.
		Then clone tyhis object and change an attribute of the new object. 
		
	*/
?>



<!DOCTYPE html>
<head>
	<title>Exercise 46 - Object Oriented Programming Cloning Objects</title>
</head>
<body>
	<h2>Object Oriented Ex 6 - Class 'Product' Definition and Object Cloning</h2>
	<?php
		
		class Product
		{
			// Class attributes definition as private
			private $title;
			private $manufacturer;
			private $price;
			
			function __construct($title, $manufacturer, $price)
			{
				$this->title = $title;
				$this->manufacturer = $manufacturer;
				$this->price = $price;
			}

			public function setTitle($title)
			{
				$this->title = $title;
			}

			public function getTitle()
			{
				return ($this->title);
			}

			public function setManufacturer($manufacturer)
			{
				$this->manufacturer = $manufacturer;
			}

			public function getManufacturer()
			{
				return ($this->manufacturer);
			}

			public function setPrice($price)
			{
				$this->price = $price;
			}

			public function getPrice()
			{
				return ($this->price);
			}
			
			public function displayProductSummary()
			{
				$base = "Item: {$this->title} ({$this->manufacturer})" . "</br>";
				$base .= "Price: {$this->price}" . "</br>";
				return $base;
			}

		}
		
		$product1 = new Product("Monitor 14", "HP", "199€");
		
		echo "Object Product1 </br>";
		echo "{$product1->displayProductSummary()}\n" . "</br>";
		echo "Instance of Class Product: ";
		if ($product1 instanceof Product)
			echo "Yes </br>";
		else
			echo "No </br>";
		echo "</br>Now we present the cloned object! </br>";
		echo "</br>";

		echo "Object Product2 </br>";
		$product2 = clone $product1;
		echo "{$product2->displayProductSummary()}\n" . "</br>";
		echo "Instance of Class Product: ";
		if ($product1 instanceof Product)
			echo "Yes </br>";
		else
			echo "No </br>";
		
	?> 
</body>
</html>