<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		<?php include_once(dirname(__DIR__) . '/styles/style.css'); ?>
	</style>
	<title>Memory-Game</title>
	<link rel="icon" href="../static/icon.png" type="image/x-icon">
	<script src="../function/f.js"></script>
	<script src="https://kit.fontawesome.com/74ec47558a.js" crossorigin="anonymous"></script>
</head>

<body>
<<<<<<< HEAD
	<audio autoplay src="cambio.mp3"></audio>
=======
	<center>
>>>>>>> origin/preprod
	<?php
	include(dirname(__DIR__) . '/common/header.php');

	//ESto podríamos declararlo en f.php, y aquí redirigir a un nivel u otro en función de su valor, no de su existencia.
	if (!(isset($_SESSION['playername']))) {
		$_SESSION['playername'] = $_POST['playername'];
	}

	echo '<div class="nombre"> <p><i class="far fa-user"></i> ' . $_SESSION['playername'] . '</p></div>';

	// Me da a mí que esto necesita una revisión, no me acaba de cuadrar el condicional, así de buenas a primeras
	// if ($_SESSION['level'] <= 9 and $_SESSION['level'] >=0 ) {
	// } elseif ($_SESSION['level'] == 10) {
	// 	echo "<script> window.location.replace('./src/victoria.php'); </script>"; //check
	// } else {
	// 	die;
	// }

	//Total de celdas segun el level
	$Tceldas = readFileConfig()[$_SESSION['level']][1][0] * readFileConfig()[$_SESSION['level']][1][2];
	//Para compensar que se genera un número más que las celdas que existen
	$Tceldas -= 1;
	//Num Celdas correctas 
	$CeldasC = readFileConfig()[$_SESSION['level']][2];
	// Genera aleatoriamente los numeros de las celdas que son correctas
	$rands = uniqueRandomsInClusiveRange(0, $Tceldas, $CeldasC);
	//altura de la tabla
	$hCeldas = readFileConfig()[$_SESSION['level']][1][0];
	//anchura de la tabla
	$wCeldas = readFileConfig()[$_SESSION['level']][1][2];
	//Genera la tabla a partir de las variables definidas anteriormente
	generateTable($hCeldas, $wCeldas, $rands);
	//Determina los segundos que se muestran las celdas correctas
	$segundos = readFileConfig()[$_SESSION['level']][3] * 1000;
	//Codigo de level
	$_SESSION['codigo'] = readFileConfig()[$_SESSION['level']][4];
	?>
<<<<<<< HEAD

	<!-- "Exporta" la variable de segundos a Javascript para que podamos jugar con ella desde ahí. -->
=======
	<!-- "Exporta" variables a Javascript para que podamos jugar con ellas desde ahí.
	seconds está para que reciba el tiempo en que se muestran las celdas correctas desde PHP. Luego la usamos en la función de JS que se encarga precisamente de eso: mostrar las correctas al hacer click en empezar -->
>>>>>>> origin/preprod
	<script type="text/javascript">
		let seconds = <?php echo json_encode($segundos, JSON_HEX_TAG); ?>;
	</script>

	<br>
	<!-- Cierra el div con clase game -->
	</div>

</body>
<footer>
	<?php
	include(dirname(__DIR__) . '/common/game_buttons.php');
	?>
</footer>
</center>

</html>