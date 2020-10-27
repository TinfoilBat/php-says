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
				echo "<td class=\"correct\" id=\"{$counter}>CORRECT</td>";
			} else {
				echo "<td class=\"incorrect\" id=\"{$counter}>INCORRECT</td>";
			}
			$counter++;
		}
		echo "</tr>";
	}
	echo '</div></table>';
}