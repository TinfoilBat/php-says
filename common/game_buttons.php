<style>
	<?php include_once(dirname(__DIR__) . '/styles/style.css'); ?>
</style>
<script src="../function/f.js"></script>
<div>
	<button onclick="startFanfare(seconds)" accesskey="e">EMPEZAR</button>
	<button onclick="postGame()" accesskey="r">RESOLVER </button>
</div>

<!-- Hidden POST form to pass certain time counting JS variables to PHP -->
<div style="display:none">
	<form action="./victoria.php" method="post" name="victory" id="victory">
		<input type="text" name="final_time" id="final_time">
		<input type="number" name="tries" id="tries">
	</form>
	<form action="./derrota.php" method="post" name="fail" id="fail">
		<input type="text" name="final_time" id="final_time">
		<input type="number" name="tries" id="tries">
	</form>
</div>