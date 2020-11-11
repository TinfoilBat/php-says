<style>
	<?php include_once(dirname(__DIR__) . '/styles/style.css'); ?>
</style>
<script src="../function/f.js"></script>
<div>
	<button onclick="startFanfare(seconds)" accesskey="e"><u>E</u>MPEZAR</button>
	<button onclick="postGame()" accesskey="r"><u>R</u>ESOLVER </button>
</div>

<!-- Hidden POST form to pass certain time counting JS variables to PHP -->
<!-- The way this is done is fukcing wack. Spaguetti all the way... -->
<div style="display:none">
	<form action="./victoria.php" method="post" name="victory" id="victory">
		<input type="text" name="victory_final_time" id="victory_final_time">
		<input type="number" name="victory_tries" id="victory_tries">
	</form>
	<form action="./derrota.php" method="post" name="fail" id="fail">
		<input type="text" name="fail_final_time" id="fail_final_time">
		<input type="number" name="fail_tries" id="fail_tries">
	</form>
</div>