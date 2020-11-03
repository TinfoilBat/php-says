<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/main.css">
	<title>MENU</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Krona+One&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Commissioner:wght@300&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap');
	</style>
</head>
<body>		
	<div class="posicion letra">	
		<div class="derecha">
			<?php
			session_start();
			if (($_SERVER['REQUEST_URI'] === '/php-says/index.php') || ($_SERVER['REQUEST_URI'] === '/php-says/')) {
				echo "<button class='boton espaciado' onclick=\"parent.location='ranking.php'\" accesskey='r'>RANKING</button>";
				echo "<button class='boton espaciado' onclick=\"parent.location='index.php'\" accesskey='i'>INICIO</button>";
			}
			else {
				echo "<button class='boton espaciado' onclick=\"parent.location='index.php'\" accesskey='i'>INICIO</button>";
			}
			?>
		</div>
	</div>
</body>
</html> 
