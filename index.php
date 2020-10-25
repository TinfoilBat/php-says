<body class="letra">
    <?php
        include('menu.php');

    ?>
    <h1 class="text-white">BIENVENIDO A MEMORY GAME</h1>
    <p>
        Este juego se basa en memorizar los colores de las celdas que se enciendan, las celdas que se encienden de color amarillo
        al cabo de 4 segundos se apagaran y el usuario tendrá que seleccionar aquellas celdas que se han encendido. Si el usuario 
        ha acertado las 7 celdas que se encienden de color habrá ganado el juego.
    </p>
    <img src="static/MemoryGame.jpg" alt="memoryGame">
    <h2 class="text-white">INSTRUCCIONES DE MEMORY GAME</h2>
    <p class="letra">A continuación aparecen todos los pasos a seguir del juego: </p>
    <ol type="1">
        <li>Primero de todo darle al botón de iniciar.</li>
        <li>Esperar mientras se muestran las celdas de color amarillo.</li>
        <li>Una vez se han apagado seleccionar las celdas que se han encendido.</li>
        <li>Cuando ya se hayan seleccionado las 7 celdas que se han encendido anteriormente darle al botón resolver.</li>
        <li>Después de darle al botón de resolver aparecera la pantalla de derrota o victoria correspondiente.</li>
        <li>El juego ya se ha terminado, si quieres empezar de nuevo darle al botón de HOME (arriba a la derecha) y volver a iniciar la partida.</li>
    </ol>

    <div>
        <form method="POST"> 
            <label for="nombre" minlength="1">Escribe tu nombre: </label>
            <input type="text" name="nombre" required></input>
            <button>Enviar</button>
        </form>
    </div>

		
		<button class="boton" onclick="parent.location='juego.php'">JUEGO</button>
		<button class="boton" >RESOLVER</button>

</body>
</html> 