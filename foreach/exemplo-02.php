<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">

</form>

<?php

if(isset($_GET)){

	foreach ($_GET as $key => $value) {
		
		echo "Nome do campo: " . $key . "<br/>";

		echo "Valor do campo: " . $value . "<br/>";

		echo "<hr/>";

	}

}

?>