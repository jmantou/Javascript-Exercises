<?php		
			$area = filter_input(INPUT_POST, "area", FILTER_VALIDATE_FLOAT);
			if ($area === false)
				echo "Submitted area is invalid or left Blank";
			$price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT);
			if ($price === false)
				echo "Submitted price is an invalid number of left blank";
			
			$boxes = (int)($area / 4);
	
			if (fmod($area, 4) != 0)
				$boxes++;
			$bill = $boxes * $price;
			echo "Total Amount = " . "$bill <br/>";
			
			$leftover = $boxes - $area / 4;
			echo "Paint Left Over = " . "$leftover";
?>