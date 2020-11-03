<?php
session_start();
if ($_SERVER['REQUEST_URI'] === '/php-says/src/victoria.php') {
	echo "

	<div class='posicion espaciado centrado'>
	<div>
			<form action='src/game.php' method='POST'>
					<button class='boton espaciado' type='submit' accesskey='r'>REPETIR</button>
			</form>
	</div>
	<div>
			<form action='src/game.php' method='POST'>
					<button class='boton espaciado' type='submit' accesskey='s'>SIGUIENTE</button>
			</form>
	</div>
</div>";
}
if ($_SERVER['REQUEST_URI'] === '/php-says/src/derrota.php') {
	echo "
	
	<div class='posicion espaciado centrado'>
	<div>
			<form action='src/game.php' method='POST'>
					<button class='boton espaciado' type='submit' accesskey='r'>REPETIR</button>
			</form>
	</div>
	</div>
</div>";
}
