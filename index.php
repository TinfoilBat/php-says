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
	<div class="main">
		<div>
			<h1>BIENVENIDO A MEMORY GAME</h1>
			<div class="flex">
				<div class="container1">
				</div>
				<div class="descripcion">
					<blockquote>
						Este juego se basa en memorizar los colores de aquellas celdas que se enciendan, las celdas que se encienden de un color
						al cabo de unos segundos se apagaran y el usuario tendrá que seleccionar aquellas celdas que se han encendido. Si el usuario 
						acierta todas aquellas celdas que se encienden de color habrá ganado el juego.
					</blockquote>
				</div>
			</div>
			<div>
				<picture>
					<source media="(min-width:1920px)" srcset="static/max1080.png">
					<source media="(min-width:1366px)" srcset="static/medium1.png">
					<source media="(min-width:1024px)" srcset="static/medium2.png">
					<source media="(min-width:800px)" srcset="static/min1.png">
					<source media="(min-width:375px)" srcset="static/min2.png">
					<img src="static/min2.png" alt="Tabla del juego" style="width:auto;">
				</picture>
			</div>
		</div>

		<div class="flex">	
			<div class="container2">
			</div>
			<div class="instrucciones">
				<h2>INSTRUCCIONES DE MEMORY GAME</h2>
				<p>A continuación aparecen todos los pasos a seguir del juego: </p>
				<blockquote>
					<ol type="1">
						<li>Primero de todo darle al botón de iniciar.</li>
						<li>Esperar mientras se muestran las celdas de color amarillo.</li>
						<li>Una vez se han apagado seleccionar las celdas que se han encendido.</li>
						<li>Cuando ya se hayan seleccionado las 7 celdas que se han encendido anteriormente darle al botón resolver.</li>
						<li>Después de darle al botón de resolver aparecera la pantalla de derrota o victoria correspondiente.</li>
						<li>El juego ya se ha terminado, si quieres empezar de nuevo darle al botón de HOME (arriba a la derecha) y volver a iniciar la partida.</li>
					</ol>
				</blockquote>
			</div>
			<div class="container3"></div>
		</div>
		<div class="centro">
			<form method="POST" action="src/game.php">
					<label for="nombre" minlength="1">Introduce tu nombre:</label>
					<?php
					if (isset($_SESSION["nombre"])) {
						echo "<input type=\"text\" id = \"nombre\" name=\"nombre\" value=\"{$_SESSION["nombre"]}\" required></input>";
					} else {
						echo "<input type=\"text\" id = \"nombre\" name=\"nombre\" required></input>";
					}
					
					if (isset($_SESSION['nivel'])) {
                        $_SESSION['nivel'] += 0;
                    } else {
                        $_SESSION['nivel'] = 0;
                    }
					?>
					<button accesskey="e"><u>E</u>NVIAR</button>
			</form>
		</div>
	</div>
</body>
</html>