<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- PHP include for loading CSS in a PHP file-->
	<style><?php include_once(dirname(__DIR__).'/styles/style.css');?></style> 
	<title>INICIO</title>
</head>

<body>
	<?php
	include(__DIR__.'/common/header.php');

	?>
	<div>
		<h1>BIENVENIDO A MEMORY GAME</h1>
		<blockquote>
            Este juego se basa en memorizar los colores de las celdas que se enciendan, las celdas que se encienden de color amarillo
            al cabo de 4 segundos se apagaran y el usuario tendrá que seleccionar aquellas celdas que se han encendido. Si el usuario 
            ha acertado las 7 celdas que se encienden de color habrá ganado el juego.
		</blockquote>
		<img src="static/MemoryGame.jpg" alt="memoryGame">
		<h2>INSTRUCCIONES DE MEMORY GAME</h2>
		<p>A continuación aparecen todos los pasos a seguir del juego: </p>
		<ol type="1">
			<li>Primero de todo darle al botón de iniciar.</li>
			<li>Esperar mientras se muestran las celdas de color amarillo.</li>
			<li>Una vez se han apagado seleccionar las celdas que se han encendido.</li>
			<li>Cuando ya se hayan seleccionado las 7 celdas que se han encendido anteriormente darle al botón resolver.</li>
			<li>Después de darle al botón de resolver aparecera la pantalla de derrota o victoria correspondiente.</li>
			<li>El juego ya se ha terminado, si quieres empezar de nuevo darle al botón de HOME (arriba a la derecha) y volver a iniciar la partida.</li>
		</ol>
		<div>
			<form method="POST" action="src/game.php">
				<div>
					<label for="nombre" minlength="1">Introduce tu nombre:</label>
				</div>
				<div>
					<?php
					if (isset($_SESSION["playername"])) {
						echo "<input type=\"text\" id = \"playername\" name=\"playername\" value=\"{$_SESSION["playername"]}\"required></input>";
					} else {
						session_reset();
						echo "<input type=\"text\" id = \"playername\" name=\"playername\" required></input>";
					}
					?>
				</div>
				<div>
					<button accesskey="e"> ENVIAR</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>