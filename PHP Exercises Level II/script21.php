<?php
			
			if(isset($_POST['area']) && isset($_POST['price']))
			{
				$area = $_POST['area'];
				$price = $_POST['price'];
			}
						
			$boxes = (int)($area / 4);
	
			if (fmod($area, 4) != 0)
				$boxes++;
			$bill = $boxes * $price;
			echo "Total Amount = " . "$bill <br/>";
			
			$leftover = $boxes - $area / 4;
			echo "Paint Left Over = " . "$leftover";
?>