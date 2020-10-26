<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JUEGO</title>
	<script src="function/f.js"></script>
	<script src="text/javascript">
		document.addEventListener('DOMContentLoaded', loadToogleOnCells());
	</script>
	<script src="https://kit.fontawesome.com/74ec47558a.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php
	include('menu.php');
	session_start();
	$_SESSION['nombre'] = $_POST['nombre'];
	echo '<div class="nombre"> <p><i class="far fa-user"></i> ' . $_SESSION['nombre'] . '</p></div>';
	?>
	<?php
	require('function/f.php');
	$rands = uniqueRandomsInClusiveRange(0, 25, 7);
	generateTable(5, 5, $rands)
	?>
	<br>

</body>
<footer>
	<?php
	include('buttons.html');
	?>
</footer>

</html>