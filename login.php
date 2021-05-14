<?php

session_start();
//chamando arquivo para conexao banco de dados
require 'bd/conexao.php';
require 'Usuario.class.php';
require 'Notificacao.class.php';



$u = new Usuario();


//validar dados de ususario e senha enviado atraves do formulario 

if (isset($_POST['email']) && !empty($_POST['email'])&& isset($_POST['senha'])&& !empty($_POST['senha'])) {

    //receber dados do formulario
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

   if($u->login($email,$senha) == true );
       if(isset($_SESSION['id'])){
        header("Location: clientes.php");
       
       }else{
        header("Location: index.php");
       }
}else{
    header("Location: index.php");
}
