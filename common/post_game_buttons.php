<?php session_start(); ?>
<style>
	<?php include_once(dirname(__DIR__) . '/styles/style.css'); ?>
</style>
<!-- <p>Codigo de nivel!!</p> ToDo -->
<div class="botones">
	</div>
	<?php
	if ($_SERVER['REQUEST_URI'] === '/php-says/src/derrota.php') {
		$_SESSION['tries']++;
		echo
			"<div>
				<form action='./game.php' method='POST'>
					<button id='daltonico' type='submit' name='nombre' value=\"{$_SESSION['playername']}\" accesskey='r'><u>R</u>EPETIR</button>
				</form>
				</div>";

		echo "<form action='./ranking.php' method='POST'>
			<input style=\"display:none\" type='text' name='final_time' id='final_time' value=\"{$_SESSION['fail_final_time']}\">
			<button id='daltonico' type='submit' name='next' accesskey='s'>ACABAR</button>		</form>
		</div>";
	} ?>

	<?php
	if ($_SERVER['REQUEST_URI'] === '/php-says/src/victoria.php') {
		$_SESSION['tries']++;

		echo "<div class='flexboton botones'><form action='./game.php' method='POST'>
						<button id='daltonico' type='submit' name='repeat' accesskey='r'><u>R</u>EPETIR</button>
					</form>";


		echo "<form action='./game.php' method='POST'>
			<button id='daltonico' type='submit' name='next' accesskey='s' value=" . $_SESSION['level']++	 . "><u>S</u>IGUIENTE</button>		</form>
		</div>";
	}
	?>
</div>