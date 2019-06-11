<?php
	/*
		@ Exercise: 43
		@ Author: Ioannis A. Mantoudis
		Declare a Public Class named 'Member' with  private properties and the appropriate
		constructor and getter - setter methods. Create also a constructor for the 'Member' class.
		Display in the browser the Member class properties with an appropriate display method. 
		
	*/
?>



<!DOCTYPE html>
<head>
	<title>Exercise 43 - Object Oriented Programming Classes Definition</title>
</head>
<body>
	<h2>Object Oriented Ex 3 - Class 'Product' Definition with Private Properties, Constructor and Getters and Setters</h2>
	<?php
		
		// Normally we declare each class in a separate file with name 'classname.php'
		// Here for testing purposes we have all scripts in one file
		class Member
		{
			// properties Definition as private
			private $id;
			private $name;
			private $surname;
			private $phone;
			
			function __construct($id, $name, $surname, $phone)
			{
				$this->id = $id;
				$this->name = $name;
				$this->surname = $surname;
				$this->phone = $phone;
			}

			
			public function setId($id)
			{
				$this->id = $id;
			}

			public function getId()
			{
				return ($this->id);
			}

			public function setName($name)
			{
				$this->name = $name;
			}

			public function getName()
			{
				return ($this->name);
			}

			public function setSurname($surname)
			{
				$this->surname = $surname;
			}

			public function getSurname()
			{
				return ($this->surname);
			}

			public function setPhone($phone)
			{
				$this->phone = $phone;
			}

			public function getPhone()
			{
				return ($this->phone);
			}
			
			public function displayLine()
			{
				$base = "({$this->id}) {$this->name} {$this->surname} (Tel): {$this->phone}";
				return $base;
			}


		}
		
		$member1 = new Member("A1", "Alex", "Mauro", "6948 554433");
		$member2 = new Member("A2", "Tim", "Ripper", "6977 332118");
		
		echo "{$member1->displayLine()}\n" . "</br>";
		echo "{$member2->displayLine()}\n" . "</br>";
		
	?> 
</body>
</html>