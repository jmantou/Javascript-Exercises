<?php
	/*
		@ Exercise: 44
		@ Author: Ioannis A. Mantoudis
		Declare a Public Class named 'Product' with  private properties and the appropriate
		constructor and getter - setter methods. The class 'Product' will be subclassed in later versions.
		Display in the browser the Member class properties with an appropriate display method. 
		
	*/
?>



<!DOCTYPE html>
<head>
	<title>Exercise 44 - Object Oriented Programming Classes Definition and Subclassing</title>
</head>
<body>
	<h2>Object Oriented Ex 4 - Class 'Product' Definition with Protected Properties for subclassing, Constructor and Getters and Setters</h2>
	<?php
		
		// Normally we declare each class in a separate file with name 'classname.php'
		// Here for testing purposes we have all scripts in one file
		class Product
		{
			// properties Definition as protected for subclassing
			protected $id;
			protected $title;
			protected $manufacturer;
			protected $price;
			protected $discount = 0;
			
			function __construct($id, $title, $manufacturer, $price, $discount)
			{
				$this->id = $id;
				$this->title = $title;
				$this->manufacturer = $manufacturer;
				$this->price = $price;
				$this->discount = $discount;
			}
			
			public function setId($id)
			{
				$this->id = $id;
			}

			public function getId()
			{
				return ($this->id);
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
				$base .= "Discount: " . ($this->price * $this->discount / 100) . "€ </br>";
				return $base;
			}


		}
		
		$product1 = new Product("A1", "Monitor 14'", "Sony", "199€", 0);
		$product2 = new Product("A2", "Monitor 21'", "LG", "275€", 10);
		
		
		echo "{$product1->displayProductSummary()}\n" . "</br>";
		echo "{$product2->displayProductSummary()}\n" . "</br>";
		
	?> 
</body>
</html>