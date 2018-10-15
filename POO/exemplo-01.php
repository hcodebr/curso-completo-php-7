<?php

class Pessoa{

	public $nome; //Atributo

	public function falar(){//Método

		return "O meu nome é ".$this->nome;

	}

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>