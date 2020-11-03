<div class='codigo centrado'>
	<p class='letra'>Codigo de nivel : <?php echo $_SESSION['codigo'] ?></p>
</div>
<div class="posicion espaciado centrado">
	<div>
		
		<?php
		//TODO
		if ($_SERVER['REQUEST_URI'] === '/php-says/derrota.php') {
			echo
				"<div>
				<form action='./game.php' method='POST'>
						<button class='boton espaciado' type='submit' name= 'repeat' value=''  accesskey='r'>REPETIR</button>
					</form>
					</div>";
		}
		//TODO
		if ($_SERVER['REQUEST_URI'] === '/php-says/victoria.php') {
			$nextLevel = $nivel + 1;
			echo "<div><form action='./game.php' method='POST'>
						<button class='boton espaciado' type='submit' name= 'repeat' value=''  accesskey='r'>REPETIR</button>
					</form>
					</div>";

			echo "<div><form action='./game.php' method='POST'>
			<button class='boton espaciado' type='submit' name='next' value='' accesskey='s'>SIGUIENTE</button>
		</form>
		</div>";
		}
		?>