<?php
	/*
		@ Exercise: 42
		@ Author: Ioannis A. Mantoudis
		Declare a Public Class named Member with  private properties and the appropriate
		constructor and getter - setter methods. Display in the browser the Member class properties
		with a display method. 
		
	*/
?>



<!DOCTYPE html>
<head>
	<title>Exercise 42 - Object Oriented Programming Classes Definition</title>
</head>
<body>
	<h2>Object Oriented Ex 2 - Class 'Member' Definition with Private Properties and Getters and Setters</h2>
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


		}
		
		$member = new Member();
		$member->setId("A1");
		$member->setName("John");
		$member->setSurname("Mant");
		$member->setPhone("2109649245");

		echo "Member ID: " . $member->getId() . "<br/>";
		echo "Name: " . $member->getName() . " " . $member->getSurname() . "<br/>";
		echo "Phone: " . $member->getPhone() . "<br/>";
	?> 
</body>
</html>