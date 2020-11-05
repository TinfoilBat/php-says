<style><?php include_once(dirname(__DIR__).'/styles/style.css');?></style> 
<!-- <p>Codigo de nivel!!</p> ToDo -->
<div>
	<?php
	if ($_SERVER['REQUEST_URI'] === '/php-says/src/derrota.php') {
		echo
			"<div>
				<form action='./game.php' method='POST'>
					<button type='submit' name='repeat' accesskey='r'>REPETIR</button>
				</form>
				</div>";
	} ?>
</div>
<div>
	<?php
	if ($_SERVER['REQUEST_URI'] === '/php-says/src/victoria.php') {
		echo "<div><form action='./game.php' method='POST'>
						<button type='submit' name='repeat' accesskey='r'>REPETIR</button>
					</form>
					</div>";

		echo "<div><form action='./game.php' method='POST'>
			<button type='submit' name='next' accesskey='s'>SIGUIENTE</button>
		</form>
		</div>";
	}
	?>
</div>