<?php

function ola($texto = "Mundo", $periodo = "Bom dia"){

	return "Olá $texto! $periodo! <br/>";

}

echo ola("Mundo", "Bom dia");
echo ola("", "Boa noite");
echo ola("Glaucio", "Boa tarde");
echo ola("João", "");

?>