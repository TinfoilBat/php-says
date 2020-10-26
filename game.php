<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="function/f.js"></script>
	<script src="text/javascript">
			document.addEventListener('DOMContentLoaded', loadToogleOnCells());
		</script>
</head>

<body>
	<table border="1">
		
		<?php
		require('function/f.php');
		$rands = uniqueRandomsInClusiveRange(0, 25, 7);
		generateTable(5, 5, $rands)
		?>
	</table>

</body>
<footer>
	<?php
	include('buttons.html');
	?>
</footer>

</html>