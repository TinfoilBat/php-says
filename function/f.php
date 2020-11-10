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
// Devulve un array de arrays, cada array que esta dentro del array grande tiene en una posicion el usuario y en la otra los puntos
function readFileRanking() {
	$file = file(dirname(__DIR__).'/config/ranking.txt');
	$alluser = [];
	foreach($file as $linea) {
		$userPoints = explode("\r\n", $linea);
		$up = explode(";", $linea);
		array_push($alluser, $up);
	}
	return $alluser;
}
// Genera la tabla a traves del fichero de configuracion (funcion readFileRanking())
function generateRanking() {
	for ($i = 0; $i < sizeof(readFileRanking()); $i++) {
		echo '<tr>';
		echo '<td class="rankingtd">' . readFileRanking()[$i][0] . '</td>';
		echo '<td class="rankingtd">' . readFileRanking()[$i][1] . '</td>';
		echo '</tr>';
	}
}