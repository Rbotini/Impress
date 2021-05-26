<?php
 session_start();
require_once './bd/conexao2.php';
if(isset($_GET['del'])){
    $idcliente = $_GET['del'];

$result_usuario = "DELETE  FROM  clientes WHERE idcliente = $idcliente";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
header("location:menu.php");

}
?>
