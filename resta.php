<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculo de numeros</title>
</head>
<body>
	

	<?php


		echo "<h1>Calculo de numeros</h1> <br><br>";
		//Recogemos las variables introducidas y confirmamos que son numeros

		if(isset($_GET["numero1"],$_GET["numero2"])) {

			if(is_numeric($_GET["numero1"]) and is_numeric($_GET["numero2"])){

				$n1 = floatval($_GET["numero1"]);
				$n2 = floatval($_GET["numero2"]);

				echo "La resta es ".($n1-$n2);

			}else{

				echo "Uno de los valores no es un numero. No se ha realizado la operacion";

		}

		}else{

			echo "ERROR: No se han introducidos dos valores";
		}


	?>
</body>
</html>