<style><?php include_once(dirname(__DIR__).'/styles/style.css');?></style> 
<div>
	<div>
		<?php
		if (($_SERVER['REQUEST_URI'] === '/php-says/index.php') || ($_SERVER['REQUEST_URI'] === '/php-says/')) {
			echo "<button onclick=\"window.location.href='/php-says/index.php'\">INICIO</button>";
			echo "<button onclick=\"window.location.href='/php-says/src/ranking.php'\">RANKING</button>";
		 } else {
			echo "<button onclick=\"window.location.href='/php-says/index.php'\">INICIO</button>";
			}
		
		?>
	</div>
</div>
