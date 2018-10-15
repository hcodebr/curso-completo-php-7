<?php

abstract class Animal {

	public function falar(){

		return "Som";

	}

	public function mover(){

		return "Anda";

	}

}

class Cachorro extends Animal {

	public function falar(){

		return "Late";

	}

}

class Gato extends Animal {

	public function falar(){

		return "Mia";

	}

}

class Passaro extends Animal {

	public function falar(){

		return "Canta";

	}

	public function mover(){

		return "Voa e " . parent::mover();

	}

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "--------------------------<br/>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "--------------------------<br/>";

$ave = new Passaro();

echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";

?>