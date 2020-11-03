<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DERROTA</title>
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/gameover.css">

</head>

<body>
	<?php include('menu.php');
	?>

	<div class="GAMEOVER">
		<div class="centro">
			<h1> GAME OVER</h1>
			<h3> NO HAS ACERTADO TODAS LAS CASILLAS </h3>
		</div>
	</div>
	<div class='codigo centrado'>
		<p class='letra'>Codigo de nivel : <?php echo $_SESSION['codigo'] ?></p>
	</div>


	<?php
	include('post_game_buttons.php')
	?>
</body>

</html>