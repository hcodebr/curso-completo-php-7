<?php

$conn = new mysqli("localhost", "root", "root", "dbphp7");

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
	exit;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();

?>