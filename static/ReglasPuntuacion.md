# PUNTUACIÓN

Nuestro juego necesita tener una puntuación para poder hacer el ranking de los jugadores, lo que nos permitirá ver el top jugadores que más rápido han completado el juego y menor tiempo. Para esto hemos diseñado una puntuación:

## CRITERIO DE PUNTUACION

(1000 - TIEMPO) + NIVEL * SEGUNDOS DE APARICION CELDAS CORRECTAS) / INTENTOS

Para hacer la puntuacion de nuestro proyecto lo que hacemos es restarle el tiempo que tarda el usuario en completar el total y ha esto le sumamos el nivel multiplicado por los segundos en los que aparecen las celdas correctas en ese nivel y al resultado que nos da esta operacion lo dividimos entre los numeros de intentos durante la partida.
