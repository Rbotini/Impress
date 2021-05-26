<?php
 session_start();
require_once './bd/conexao2.php';
$idcliente = $_POST['idcliente'];
$nome = $_POST['nome'];
$email=$_POST['email'];
$telefone = $_POST['telefone'];

$result_usuario = "UPDATE clientes  SET nome = '$nome', email = '$email',telefone = '$telefone' WHERE idcliente = 'idcliente";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if($result_usuario){
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert text-align-center'>
        <h5 class='alert-heading text-align-center'>Cadastrado com Sucesso</h5>
       </div>";
       header("location:cadastro.php");

    }else{
        $_SESSION['msg'] = "Erro ao cadastrar o usuário";
}


?>
