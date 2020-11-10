<style><?php include_once(dirname(__DIR__).'/styles/style.css');?></style> 
<div class="menu">

	<div class="flex">
		<?php
			if (($_SERVER['REQUEST_URI'] === '/php-says/index.php') || ($_SERVER['REQUEST_URI'] === '/php-says/')) {
				echo '<div class="icon"><img src="static/icon.png" width="45" margin="0" class="" alt="memoryGame"></div>';
				echo "<button onclick=\"window.location.href='/php-says/index.php'\" accesskey='i'><u>I</u>NICIO</button>";
				echo "<button onclick=\"window.location.href='/php-says/src/ranking.php'\" accesskey='r'><u>R</u>ANKING</button>";
				echo "<button class='daltonicob' onclick=\"\" accesskey='d'><u>D</u>ALTONICO</button>";

			} else {
				echo '<div class="icon"><img src="../static/icon.png" width="45" margin="0" class="" alt="memoryGame"></div>';
				echo "<button onclick=\"window.location.href='/php-says/index.php'\" accesskey='i'><u>I</u>NICIO</button>";
				echo "<button class='daltonicob' onclick=\"\" accesskey='d'><u>D</u>ALTONICO</button>";
				}
			
			?>
	</div>
</div>
