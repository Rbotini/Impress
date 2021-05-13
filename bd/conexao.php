<?php

$localhost = "localhost";
$username = "root";
$password = "123456";
$banco = "impress";

global $pdo;


try {
     //orientado a objetos com pdo
    $pdo = new PDO("mysql:dbname=" . $banco . ";host=" . $localhost, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro" . $e->getMessage();
    exit;
}
