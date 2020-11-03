<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INICIO</title>
</head>

<body class="letra inicio">
	<?php
	session_start();
	include('common/menu.php');
	?>


	<div class="">
		<h1 class="text-white">BIENVENIDO A MEMORY GAME</h1>
		<pre>
            Este juego se basa en memorizar los colores de las celdas que se enciendan, las celdas que se encienden de color amarillo
            al cabo de 4 segundos se apagaran y el usuario tendrá que seleccionar aquellas celdas que se han encendido. Si el usuario 
            ha acertado las 7 celdas que se encienden de color habrá ganado el juego.
        </pre>
		<img src="static/MemoryGame.jpg" alt="memoryGame">
		<h2 class="text-white">INSTRUCCIONES DE MEMORY GAME</h2>
		<p class="letra">A continuación aparecen todos los pasos a seguir del juego: </p>
		<ol type="1">
			<?php
			?>
			<li>Primero de todo darle al botón de iniciar.</li>
			<li>Esperar mientras se muestran las celdas de color amarillo.</li>
			<li>Una vez se han apagado seleccionar las celdas que se han encendido.</li>
			<li>Cuando ya se hayan seleccionado las 7 celdas que se han encendido anteriormente darle al botón resolver.</li>
			<li>Después de darle al botón de resolver aparecera la pantalla de derrota o victoria correspondiente.</li>
			<li>El juego ya se ha terminado, si quieres empezar de nuevo darle al botón de HOME (arriba a la derecha) y volver a iniciar la partida.</li>
		</ol>
		<div class="centro">
			<form method="POST" action="src/game.php">
				<div>
					<label for="nombre" minlength="1">Introduce tu nombre: </label>
				</div>
				<div class="espaciado">
					<?php
					if (isset($_SESSION["nombre"])) {
						echo "<input type=\"text\" name=\"nombre\" value=\"{$_SESSION["nombre"]}\"required></input>";
					} else {
						session_destroy();
						echo '<input type="text" id="nombre" name="nombre" required></input>';
					}
					?>
				</div>
				<div>
					<button class="boton" accesskey="e" > ENVIAR</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>