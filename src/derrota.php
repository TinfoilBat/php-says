<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derrota</title>
    <link rel = "icon" href =  "../static/icon.png" type = "image/x-icon">
    <style>
        <?php include_once(dirname(__DIR__).'/styles/style.css');
            include_once(dirname(__DIR__).'/styles/gameover.css');
        ?>
    </style> 

</head>

<body>
    <?php include(dirname(__DIR__).'/common/header.php'); ?>
    <center>
        <div class="GAMEOVER">
            <div class="centro">
                <h1> GAME OVER</h1>
                <h3> NO HAS ACERTADO TODAS LAS CASILLAS </h3>
            </div>
            <audio autoplay src="fallo.mp3"></audio>
        </div>
        <h4>Tu código de nivel: <?php echo $_SESSION['codigo'] ?> </h4><br>
        <?php ?>
            <?php include(dirname(__DIR__).'/common/post_game_buttons.php'); ?>
    </center>
	
</body>

</html>