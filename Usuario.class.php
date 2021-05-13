<?php

class Usuario{


    public function login ($email,$senha){
        global $pdo;
        

        $sql = " SELECT * FROM usuarios WHERE  email = :email AND senha = :senha";
        $sql =  $pdo->prepare($sql);
        $sql-> bindValue("email",$email);
        $sql-> bindValue("senha",$senha);
        $sql-> execute();

        //acesso do usuario esta contando quantos registro tem no banco com essas informações 

       if($sql->rowCount() > 0 ){

          $dado = $sql->fetch();

         $_SESSION['id'] = $dado['idusuario'];

         return true;
         echo"<script language='javascript' type='text/javascript'>
         alert('Usuário cadastrado com sucesso!')</script>";
       
    }else{
        return false;
    }
}
}







