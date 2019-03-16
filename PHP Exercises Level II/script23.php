<?php		
    
    echo "<h1>Personal Information</h1>";
    echo "Name: " . $_POST['name'] . "<br/>";
    echo "Surname: " . $_POST['surname'] . "<br/>";
    echo "Email: " . $_POST['email'] . "<br/>";
    echo "Password: " . $_POST['password'] . "<br/>";
    echo "Information: " . $_POST['information'] . "<br/>";

    if (isset($_POST['consent']))
    {
    	echo "You consented for GDPR";
    }
    else
    {
    	echo "No consention for GDPR";
    }
    