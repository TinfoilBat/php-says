
    <div class="codigo centrado">
        <p class="letra">Codigo de nivel : <?php echo $_SESSION['codigo']?></p>
    </div>
<div class="posicion espaciado centrado">
    <div>
        <form action='./game.php' method='POST'>
            <button class='boton espaciado' type='submit' accesskey="R">REPETIR</button>
        </form>
    </div>
    <div>
        
        <!-- This one here should be disabled via CSS if it's shown in the defeat page -->
        <form action='./game.php?' method='POST'>
            <button class='boton espaciado' type='submit' accesskey="s">SIGUIENTE</button>
        </form>
    </div>
</div>
