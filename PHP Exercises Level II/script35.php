<?php		
			$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
			if ($email === false)
				echo "Submitted Email address is invalid);
			
			
			
			
?>