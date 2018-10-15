<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php

$_POST['busca'] = '<a href="#"><strong>oi</strong></a><script>alert("ok")</script>';

if (isset($_POST['busca'])) {

	// echo strip_tags($_POST['busca'], "<strong><a>");
	echo htmlentities($_POST['busca']);

}

?>