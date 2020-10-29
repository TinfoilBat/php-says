<?php

function uniqueRandomsInClusiveRange($min, $max, $quantity)
{
	$numbers = range($min, $max);
	shuffle($numbers);
	return array_slice($numbers, 0, $quantity);
}

function generateTable($height, $width, $correctCells)
{
	echo '<div class="centro tabla"><table class="letra tablaJuego">';
	$counter = 0;
	for ($i = 0; $i < $height; $i++) {
		echo "<tr>";
		for ($x = 0; $x < $width; $x++) {
			if (in_array($counter, $correctCells)) {
				echo "<td class=\"correct\" id=\"{$counter}\" onclick=\"toggle({$counter})\"></td>";
			} else {
				echo "<td class=\"incorrect\" id=\"{$counter}\" onclick=\"toggle({$counter})	\"></td>";
			}
			$counter++;
		}
		echo "</tr>";
	}
	echo '</div></table>';
}

// Devuelve una lista de listas, en la que cada lista tiene su nivel
function readFileConfig() {
	$Niveles = array();
	$Fichero = file('config.txt');
	foreach($Fichero as $linea) {
		$separados = explode("\r\n", $linea);
		$nivel = explode(";", $linea);
		array_push($Niveles, $nivel);
/*
		echo "nivel: ";
		print_r($nivel[0]);
		echo "celdas: ";
		print_r($nivel[2]);
		echo '<br>';
*/
	}
	return $x = $Niveles;
}


