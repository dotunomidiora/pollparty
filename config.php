				<?php
           // By Adedotun Omidiora - dotun@dmoinspire.com
				$hostname="localhost";
				$username= "ruksons3_scripts";
				$password= "Scripts";
				$database="ruksons3_scripts";

				// UserInput Test
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					
					  return $data;
					}	

								

?>