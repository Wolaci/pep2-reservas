<?php

$user = 'root';
$pass = '';

try {
	$pdo = new PDO("mysql:host=localhost;dbname=pep2_reservas", $user, $pass);
} catch (Exception $e) {
	echo "ERRO: " . $e->getMessage();
}


?>