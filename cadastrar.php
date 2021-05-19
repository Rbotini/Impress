<?php

require_once './bd/conexao2.php';

$nome = $_POST['nome'];
$email=$_POST['email'];
$telefone = $_POST['telefone'];

$result_usuario = "INSERT INTO clientes (nome,email,telefone) VALUES ('$nome','$email','$telefone')";
$resultado_usuario = mysqli_query($conexao, $result_usuario);


?>
