<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Victoria</title>
	<link rel="icon" href="../static/icon.png" type="image/x-icon">
	<style>
		<?php include_once(dirname(__DIR__) . '/styles/style.css');
		include_once(dirname(__DIR__) . '/styles/win.css');
		?>
	</style>
</head>

<body>
	<?php include(dirname(__DIR__) . '/common/header.php'); ?>
	<div class="win">
		<center>
		<div class="centro">
			<h1> HAS GANADO</h1>
			<h3> HAS ACERTADO TODAS LAS CASILLAS </h3>
			<h4>Tu tiempo: <?php echo $_POST['victory_final_time'] . ' segundos <br>' ?></h4><br>
			<h4>Tu código de nivel: <?php echo $_SESSION['codigo'] ?> </h4><br>
			<h4>Intentos realizados por este nivel: <?php echo $_SESSION['tries'] ?> </h4>
		</div>
<<<<<<< HEAD
		<audio autoplay src="acierto.mp3"></audio>
	</div>
	<?php include(dirname(__DIR__) . '/common/post_game_buttons.php'); ?>
</center>
=======
		<?php include(dirname(__DIR__) . '/common/post_game_buttons.php'); ?>
	</center>
>>>>>>> origin/preprod
</body>

</html>