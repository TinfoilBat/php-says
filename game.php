<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JUEGO</title>
	<script src="function/f.js"></script>
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

	//Lo tendra que introducir el usuario
	$nivel = 5;

	if ($nivel <= 9 and $nivel >=0 ) {
		echo "esta entre 0 y 9";
	} elseif ($nivel == 10) {
		echo "<script> window.location.replace('victoria.php'); </script>";
	} else {
		die;
	}
	//Total de celdas segun el nivel
	$Tceldas = readFileConfig()[$nivel][1][0] * readFileConfig()[$nivel][1][2];
	//Num Celdas correctas 
	$CeldasC = readFileConfig()[$nivel][2];
	// Genera aleatoriamente los numeros de las celdas que son correctas
	$rands = uniqueRandomsInClusiveRange(0, $Tceldas, $CeldasC);
	//altura de la tabla
	$hCeldas = readFileConfig()[$nivel][1][0];
	//anchura de la tabla
	$wCeldas = readFileConfig()[$nivel][1][2];
	//Genera la tabla a partir de las variables definidas anteriormente
	generateTable($hCeldas, $wCeldas, $rands);
	//Determina los segundos que se muestran las celdas correctas
	$segundos = readFileConfig()[$nivel][3] * 1000;
	//Codigo de nivel
	$_SESSION['codigo'] = readFileConfig()[$nivel][4];
	?>
	
	<!-- "Exporta" la variable de segundos a Javascript para que podamos jugar con ella desde ahí. -->
	<script type="text/javascript">
		let seconds = <?php echo json_encode($segundos, JSON_HEX_TAG); ?>;
	</script>
	
	<br>

</body>
<footer>
	<?php
	include('game_buttons.html');
	?>
</footer>

</html>