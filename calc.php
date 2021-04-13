<?php
	$x = $_GET["num1"];
	$y = $_GET["num2"];
	$op = $_GET["operacao"];

	if( $op == "soma" ) {
		$z = $x + $y;
	} elseif ( $op == "subtracao" ) {
		$z = $x - $y;
	} elseif ( $op == "multiplicacao" ) {
		$z = $x * $y;
	} else {
		
		if ( $y != 0 ) {
			$z = ($x / $y);
		} else {
			echo "Não é possível dividir um número por 0.";
			return 0;
		}
	} 

	echo "O resultado e: $z";

?>