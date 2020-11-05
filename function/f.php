<?php

function uniqueRandomsInClusiveRange($min, $max, $quantity)
{
	$numbers = range($min, $max);
	shuffle($numbers);
	return array_slice($numbers, 0, $quantity);
}

function generateTable($height, $width, $correctCells) {
	echo '<div><table>';
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
	$niveles = [];
	$fichero = file(dirname(__DIR__).'/config/config.txt');
	foreach($fichero as $linea) {
		$separados = explode("\r\n", $linea);
		$nivel = explode(";", $linea);
		array_push($niveles, $nivel);
	}
	return $niveles;
}
