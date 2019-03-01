<?php
// function to calculate converted temperature
function convertTemp($temp,$unit1,$unit2){
	switch ($unit1) {
		case 'celsius':

			if ($unit1 == "celsius" and $unit2 == "farenheit"){
				$F = $_POST['originaltemp'] * 9/5 + 32;
				return $F;
			} // end if

			if ($unit1 == "celsius" and $unit2 == "kelvin"){
				$K = $_POST['originaltemp'] + 273.15;
				return $K;
			} // end if

		case 'farenheit':
			if ($unit1 == "farenheit" and $unit2 == "celsius"){
				$C = ($_POST['originaltemp'] - 32 ) * 5/9;
				return $C;
			} // end if

			if ($unit1 == "farenheit" and $unit2 == "kelvin"){
				$K = ($_POST['originaltemp'] + 459.67) * 5/9;
				return $K;
			} // end if	

		case 'kelvin':
			if ($unit1 == "kelvin" and $unit2 == "celsius"){
				$C = $_POST['originaltemp'] - 273.15;
				return $C;
			} // end if

			if ($unit1 == "kelvin" and $unit2 == "farenheit"){
				$F = $_POST['originaltemp'] * 9/5 - 459.67;
				return $F;
			} // end if

		default:
			if ($unit1 == $unit2){
				return $temp;
			}
	} // end switch

} // end function


#CHECK TO SEE IF FORM WAS SUBMITTED
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$originalTemperature = $_POST['originaltemp'];
	$originalUnit= $_POST['originalunit'];
	$conversionUnit = $_POST['conversionunit'];
	$convertedTemp = convertTemp($originalTemperature,$originalUnit,$conversionUnit);
} // end if

if (isset($_POST['originalunit'])){
	$originalUnit = $_POST['originalunit'];
} else {
	// looks like the form wasn't being posted
	$originalUnit = "";
} // end if

if (isset($_POST['conversionunit'])){
	$conversionUnit = $_POST['conversionunit'];
} else {
  	// looks like the form wasn't being posted
	$conversionUnit = "";
} // end if
?>