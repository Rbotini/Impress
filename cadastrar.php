<?php
 session_start();
require_once './bd/conexao2.php';

$nome = $_POST['nome'];
$email=$_POST['email'];
$telefone = $_POST['telefone'];

$result_usuario = "INSERT INTO clientes (nome,email,telefone) VALUES ('$nome','$email','$telefone')";
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
