<?php
	/*
		@ Exercise: 45
		@ Author: Ioannis A. Mantoudis
		Declare a Public Class named 'Product' with  private properties and the appropriate
		constructor and getter - setter methods. Subclass the 'Product' class with classes 'Monitor' and 'PC'.
		Define different attributes and methods for the subclasses. Display in the browser the properties of the subclasses
		with the appropriate display methods. Use also the 'instanceof' keyword to verify the created classes. 
		
	*/
?>



<!DOCTYPE html>
<head>
	<title>Exercise 45 - Object Oriented Programming Classes Definition and Subclassing</title>
</head>
<body>
	<h2>Object Oriented Ex 5 - Subclassing the Class 'Product'</h2>
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
		
		class Monitor extends Product
		{
			private $monitorSize = 0;
			
			function __construct($id, $title, $manufacturer, $price, $discount, $monitorSize)
			{
				parent::__construct($id, $title, $manufacturer, $price, $discount);
				$this->monitorSize = $monitorSize;
			}
			
			public function getMonitorSize()
			{
				return $this->monitorSize;
			}
			
			public function displayProductSummary()
			{
				$base = parent::displayProductSummary();
				$base .= "Monitor Size: " . ($this->monitorSize) . " '' </br>";
				return $base;
			}
		}

		class Laptop extends Product
		{
			private $memory = 0;
			private $cpu = "";

			function __construct($id, $title, $manufacturer, $price, $discount, $memory, $cpu)
			{
				parent::__construct($id, $price, $manufacturer, $price, $discount);
				$this->memory = $memory;
				$this->cpu = $cpu;	
			}

			public function getLaptopMemory()
			{
				return $this->memory;
			}

			public function getLaptopCpu()
			{
				return $this->cpu;
			}

			public function displayProductSummary()
			{
				$base = parent::displayProductSummary();
				$base .= "CPU: " . ($this->cpu) . "</br>";
				$base .= "Memory: " . ($this->memory) . "</br>";
				return $base;
			}
		}
		
		$product1 = new Product("A1", "Monitor 14'", "Sony", "199€", 0);
		$product2 = new Monitor("A2", "Monitor 21'", "LG", "275€", 10, "21");
		$product3 = new Laptop("L28", "Laptop 14'", "Dell", "399€", 5, "4GB", "Intel i3");
		$product4 = new Laptop("L29", "Laptop 15.1'", "Dell", "499€", 5, "8GB", "Intel i5");		
		
		echo "{$product1->displayProductSummary()}\n" . "</br>";
		echo "Instance of Class Product: ";
		if ($product1 instanceof Product)
			echo "Yes </br>";
		
		echo "</br><hr>";
		echo "{$product2->displayProductSummary()}\n" . "</br>";
		echo "Instance of Class Product: ";
		if ($product2 instanceof Product)
			echo "Yes </br>";
		echo "Instance of Subclass Monitor: ";
		if ($product2 instanceof Monitor)
			echo "Yes </br>";
		echo "</br><hr>";

		echo "{$product3->displayProductSummary()}\n" . "</br>";
		echo "</br><hr>";

		echo "{$product4->displayProductSummary()}\n" . "</br>";
		echo "</br><hr>";
		
		
	?> 
</body>
</html>