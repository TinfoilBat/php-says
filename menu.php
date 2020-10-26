<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="static/main.css">
	<title>MENU</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Krona+One&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Commissioner:wght@300&display=swap');
	</style>
</head>
<body>		
	<div class="posicion letra">	
		<?php 
			session_start(); 
			//$_SESSION['nombre'] = $_POST['nombre'];
			$_SESSION['nombre'] = 'NAME';
			echo '<div class="nombre">' . $_SESSION['nombre'] . '</div>';
		?>

		<div class="derecha">
			<button class="boton" onclick="parent.location='index.php'">HOME</button>
		</div>
	</div>
</body>
</html> 