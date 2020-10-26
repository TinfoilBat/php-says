<?php
function uniqueRandomsInClusiveRange($min, $max, $quantity)
{
	$numbers = range($min, $max);
	shuffle($numbers);
	return array_slice($numbers, 0, $quantity);
}

function generateTable($height, $width, $correctCells)
{
	$counter = 0;
	for ($i = 0; $i < $height; $i++) {
		echo "<tr>";
		for ($x = 0; $x < $width; $x++) {
			if (in_array($counter, $correctCells)) {
				echo "<td class=\"correct\" id=\"{$counter}\" onclick=\"toogle(this.id)\">CORRECT</td>";
			} else {
				echo "<td class=\"incorrect\" id=\"{$counter}\" onclick=\"toogle(this.id)\">INCORRECT</td>";
			}
			$counter++;
		}
		echo "</tr>";
	}
}