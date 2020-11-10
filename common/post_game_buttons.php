
<?php session_start(); ?>
<style><?php include_once(dirname(__DIR__).'/styles/style.css');?></style> 
<div>
	<?php
	if ($_SERVER['REQUEST_URI'] === '/php-says/src/derrota.php') {
		$_SESSION['tries']++;
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
		$_SESSION['level']++;
		$_SESSION['tries']++;
		
		echo "<div><form action='./game.php' method='POST'>
						<button type='submit' name='repeat' accesskey='r'>REPETIR</button>
					</form>
					</div>";

		echo "<div><form action='./game.php' method='POST'>
			<button type='submit' name='next' accesskey='s' value=" . $_SESSION['level'] . ">SIGUIENTE</button>
		</form>
		</div>";
	}
	?>
</div>