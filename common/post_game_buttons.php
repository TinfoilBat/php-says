<style><?php include_once(dirname(__DIR__).'/styles/style.css');?></style> 
<!-- <p>Codigo de nivel!!</p> ToDo -->
<div>
	<?php
	if ($_SERVER['REQUEST_URI'] === '/php-says/src/derrota.php') {
		echo $_SESSION['nombre'];
		echo
			"<div>
				<form action='./game.php' method='POST'>
					<button type='submit' name='nombre' value=\"{$_SESSION['nombre']}\" accesskey='r'><u>R</u>EPETIR</button>
				</form>
				</div>";
	} ?>
</div>
<div>
	<?php
	if ($_SERVER['REQUEST_URI'] === '/php-says/src/victoria.php') {
		echo "<div><form action='./game.php' method='POST'>
						<button type='submit' name='nombre' value=\"{$_SESSION['nombre']}\" accesskey='r'><u>R</u>EPETIR</button>
					</form>
					</div>";

		echo "<div><form action='./game.php' method='POST'>
			<button type='submit' name='next' value=\"{$_SESSION['nivel']}\" accesskey='s'><u>S</u>IGUIENTE</button>
		</form>
		</div>";
	}
	?>
</div>