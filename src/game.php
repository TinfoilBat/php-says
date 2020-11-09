<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style><?php include_once(dirname(__DIR__).'/styles/style.css');?></style> 
	<title>JUEGO</title>
	<script src="../function/f.js"></script>
	<script src="https://kit.fontawesome.com/74ec47558a.js" crossorigin="anonymous"></script>
</head>
<body>
	<?php
	include(dirname(__DIR__).'/common/header.php');
	if (!(isset($_SESSION['nombre']))) {
		$_SESSION['nombre'] = $_POST['nombre'];
	}
	if ($_SESSION['nombre'] !== $_POST['nombre']) {
		session_destroy();
		$_SESSION['nombre'] = $_POST['nombre'];
	}
	$_SESSION['nivel'] = 0;
	echo '<div class="nombre"> <p><i class="far fa-user"></i> ' . $_SESSION['nombre'] . '</p></div>';
	?>
	<?php
	require(dirname(__DIR__).'/function/f.php');
	

	// Me da a mí que esto necesita una revisión, no me acaba de cuadrar el condicional, así de buenas a primeras
	/* if ($_SESSION['nivel'] <= 9 and $_SESSION['nivel'] >=0 ) {
	} elseif ($_SESSION['nivel'] == 10) {
		echo "<script> window.location.replace('./src/victoria.php'); </script>"; //check
	} else {
		die;
	}
	*/
	//Total de celdas segun el nivel
	$Tceldas = readFileConfig()[$_SESSION['nivel']][1][0] * readFileConfig()[$_SESSION['nivel']][1][2];
	//Para compensar que se genera un número más que las celdas que existen
	$Tceldas -= 1;
	//Num Celdas correctas 
	$CeldasC = readFileConfig()[$_SESSION['nivel']][2];
	// Genera aleatoriamente los numeros de las celdas que son correctas
	$rands = uniqueRandomsInClusiveRange(0, $Tceldas, $CeldasC);
	//altura de la tabla
	$hCeldas = readFileConfig()[$_SESSION['nivel']][1][0];
	//anchura de la tabla
	$wCeldas = readFileConfig()[$_SESSION['nivel']][1][2];
	//Genera la tabla a partir de las variables definidas anteriormente
	generateTable($hCeldas, $wCeldas, $rands);
	//Determina los segundos que se muestran las celdas correctas
	$segundos = readFileConfig()[$_SESSION['nivel']][3] * 1000;
	//Codigo de nivel
	$_SESSION['codigo'] = readFileConfig()[$_SESSION['nivel']][4];
	?>
	
	<!-- "Exporta" la variable de segundos a Javascript para que podamos jugar con ella desde ahí. -->
	<script type="text/javascript">
		let seconds = <?php echo json_encode($segundos, JSON_HEX_TAG); ?>;
	</script>
	
	<br>

</body>
<footer>
	<?php
	include(dirname(__DIR__).'/common/game_buttons.php');
	?>
</footer>

</html>