
<?php
   
   $fName = trim($_GET["fName"]);
   $mName = trim($_GET["mName"]);
   $lName = trim($_GET["lName"]);
   
   if( empty ($fName) && empty($lName) && empty($mName))
      echo "You did not supply any names.";
   
   else if( empty($lName) && empty($mName))
	   echo "Hello ".$fName."! Welcome to php.";

   else if( empty($mName)) 
		echo "Hello ".$fName." ".$lName."! It is a pleasure to meet you.";

   else if( !empty($fName) && !empty($lName) && !empty($mName)) 
	   echo "Hello ".$fName." ".$mName." ".$lName."! Your middle name is very unique.";
   
   else      
		echo "Hello World"; 

?>
	