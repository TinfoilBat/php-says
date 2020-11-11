<style><?php include_once(dirname(__DIR__).'/styles/style.css');?></style> 
<div class="menu">

	<div class="flex">
		<?php
			if (($_SERVER['REQUEST_URI'] === '/php-says/index.php') || ($_SERVER['REQUEST_URI'] === '/php-says/')) {
				echo '<div class="icon"><img src="static/icon.png" width="45" margin="0" class="" alt="memoryGame"></div>';
				echo "<button onclick=\"window.location.href='/php-says/index.php'\" accesskey='i'><u>I</u>NICIO</button>";
				echo "<button onclick=\"window.location.href='/php-says/src/ranking.php'\" accesskey='r'><u>R</u>ANKING</button>";
				echo '<div class="daltonicob flex">';
					echo '<input type="checkbox" id="checkbox" name="daltonismo" value="daltonico" >';
					echo '<label for="daltonismo">DALTONISMO</label><br>';
				echo '</div>';

			} else {
				echo '<div class="icon"><img src="../static/icon.png" width="45" margin="0" class="" alt="memoryGame"></div>';
				echo "<button onclick=\"window.location.href='/php-says/index.php'\" accesskey='i'><u>I</u>NICIO</button>";
				echo '<div class="daltonicob flex">';
					echo '<input type="checkbox" id="checkbox" name="daltonismo" value="daltonico" > ';
					echo '<label for="daltonismo">DALTONISMO</label><br>';
				echo '</div>';				
			}
			
			?>
	</div>
</div>
<script>
	function addClassAllDocument() {
		daltonico = true;
		var all = document.getElementsByTagName("*");
		for (var i=0, max=all.length; i < max; i++) {
			all[i].classList.add("daltonico");
		}

	}
	function removeClassAllDocument() {
		var all = document.getElementsByTagName("*");
		for (var i=0, max=all.length; i < max; i++) {
		all[i].classList.remove("daltonico");
		}
	}

function on(){
	addClassAllDocument();
}

function off(){
	removeClassAllDocument();
}

var checkbox = document.getElementById('checkbox');

checkbox.addEventListener("change", comprueba, false);

function comprueba(){
  if(checkbox.checked){
      on();
  }else{
     off();
  }
}
</script>