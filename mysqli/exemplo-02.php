<?php

$conn = new mysqli("localhost", "root", "root", "dbphp7");

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
	exit;

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {

	array_push($data, $row);

}

echo json_encode($data);

?>