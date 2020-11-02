<?php
if ($_SERVER['REQUEST_URI'] === '/php-says/victoria.php') {
	echo "<div class='posicion espaciado centrado'>
	<div>
			<form action='./game.php' method='POST'>
					<button class='boton espaciado' type='submit' accesskey='r'>REPETIR</button>
			</form>
	</div>
	<div>

			<!-- This one here should be disabled via CSS if it's shown in the defeat page -->
			<form action='./game.php' method='POST'>
					<button class='boton espaciado' type='submit' accesskey='s'>SIGUIENTE</button>
			</form>
	</div>
</div>";
}
if ($_SERVER['REQUEST_URI'] === '/php-says/victoria.php') {
	echo "<div class='posicion espaciado centrado'>
	<div>
			<form action='./game.php' method='POST'>
					<button class='boton espaciado' type='submit' accesskey='r'>REPETIR</button>
			</form>
	</div>
	<div>

			<!-- This one here should be disabled via CSS if it's shown in the defeat page -->
			<form action='./game.php' method='POST'>
					<button class='boton espaciado' type='submit' accesskey='s'>SIGUIENTE</button>
			</form>
	</div>
</div>";
}
