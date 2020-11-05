<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DERROTA</title>
    <style>
        <?php include_once(dirname(__DIR__).'/styles/style.css');
            include_once(dirname(__DIR__).'/styles/gameover.css');
        ?>
    </style> 

</head>
<body>
    <?php include(dirname(__DIR__).'/common/header.php'); ?>
    <div class="GAMEOVER">
        <div class="centro">
            <h1> GAME OVER</h1>
            <h3> NO HAS ACERTADO TODAS LAS CASILLAS </h3>
        </div>
    </div>
		<?php include(dirname(__DIR__).'/common/post_game_buttons.php'); ?>
</body>
</html>