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

	} elseif ( $op == "divisao" ) {
		
		if ( $y != 0 ) {

			$z = ($x / $y);

		} else {

			echo "Não é possível dividir um número por 0.";
			return 0;

		}

	} elseif ( $op == "potenciacao" ) {

		$z = pow($x, $y);

	} elseif ( $op == "raizQuadrada" ) {

		$z = sqrt($x);

	} elseif ( $op == "umSobreX" ) {

		$z = (1 / $x);

	} elseif ( $op == "porcentagem" ) {

		$z = ($x / 100 * $y);

	}

	echo "<script>alert('Resultado: $z'); location= './calculadora.html';</script>";

?>