<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="function/f.js"></script>
	<script src="text/javascriptl">
		document.addEventListener("DOMContentLoaded", loadToogleOnCells());
	</script>
</head>

<body>
		<?php
			include('menu.php');
			$_SESSION
		?>
	<table class="letra" border="1">
		<?php
		require('function/f.php');
		$rands = uniqueRandomsInClusiveRange(0, 25, 7);
		generateTable(5, 5, $rands)
		?>
	</table>
	<br>

</body>
<footer>
	<?php
		include('buttons.html');
	?>
</footer>

</html>