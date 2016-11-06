
<?php

   $amount = $_POST["convertAmt"];
   $unit = $_POST["convertTo"];

   $convertedAmt = 0;
   $baseUnit;
   $convertedUnit;
   
   if (strcmp($unit, "liters") == 0){
		$baseUnit = "Gallon";
		$convertedUnit = "Litre";
   }
	else{
		$baseUnit = "Litre";
		$convertedUnit = "Gallon";
	}

   if ( empty($amount) || empty($unit) ){
	   echo "Plesae ensure you supply both a liquid amount and which measurement to convert to.";
	   exit();
   }
   else
	   $convertedAmt = ConvertLiquid($amount, $unit);
   
   if ( $amount > 1 )
	   $baseUnit = $baseUnit."s";
   
   if ( $convertedAmt > 1 )
	   $convertedUnit = $convertedUnit."s";
   
   
   
   echo $amount." ".$baseUnit." is ".$convertedAmt." ".$convertedUnit;
   
   function ConvertLiquid($liquidAmt, $convert) {
	   if ( strcmp($convert, "liters") == 0 )
		   return $liquidAmt * 3.78541;
	   else if ( strcmp($convert, "gallons") == 0 )
		   return $liquidAmt * 0.264172;
    
	}
   
?>
	