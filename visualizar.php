<?php

require_once './bd/conexao2.php';

if (isset($_GET['view'])) {
    $idcliente = $_GET['view'];
    $buscar_cadastro = "SELECT * FROM clientes WHERE idcliente = '$idcliente'";
    $query_cadastro = mysqli_query($conexao, $buscar_cadastro);
}





?>


<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <!--Fonts-->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">

      <!--Arquivo Css-->
      <link rel="stylesheet" href="./Stylo/visualizar.css">

</head>

<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-danger ">
                <h5>INFORMAÇÕES DO CLIENTE</h5>
                <a href="menu.php"><i class="bi bi-x-octagon-fill"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>E-mail</th>
                                <th>TELEFONE</th>
                                <th>ENDEREÇO</th>
                                <th>CIDADE</th>
                                <th>ESTADO</th>
                                <th>CEP</th>
                                <th>Modelo Impressora</th>
                                <th>Numero Série</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($receber_cadastro = mysqli_fetch_array($query_cadastro)) {
                                $idcliente = $receber_cadastro['idcliente'];
                                $nome = $receber_cadastro['nome'];
                                $email = $receber_cadastro['email'];
                                $telefone = $receber_cadastro['telefone'];
                                $endereco = $receber_cadastro['endereco'];
                                $cidade = $receber_cadastro['cidade'];
                                $estado = $receber_cadastro['estado'];
                                $cep = $receber_cadastro['cep'];

                            ?>

                                <tr>
                                    <td style="font-size: 15px;" scope="row"><?php echo $idcliente ?></td>
                                    <td style="font-size: 15px;"><?php echo $nome ?></td>
                                    <td style="font-size: 15px;"><?php echo $email ?></td>
                                    <td style="font-size: 15px;"><?php echo $telefone ?></td>
                                    <td style="font-size: 15px;"><?php echo $endereco ?></td>
                                    <td style="font-size: 15px;"><?php echo $cidade ?></td>
                                    <td style="font-size: 15px;"><?php echo $estado ?></td>
                                    <td style="font-size: 15px;"><?php echo $cep ?></td>
                                    
                                   

                                </tr>
                        </tbody>
                    <?php }; ?>
                    
                    </table>

                </div>
            </div>

            </div>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>