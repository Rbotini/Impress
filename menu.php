<?php

require_once './bd/conexao2.php';
$buscar_cadastro = "SELECT * FROM clientes ";
$query_cadastro = mysqli_query($conexao, $buscar_cadastro);



?>




<!doctype html>
<html lang="en">

<head>
    <title>Cadastro Cliente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--Arquivo css -->
    <link rel="stylesheet" href="./Stylo/menu.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #eff7f6">
        <a class="navbar-brand" href="#"><img src="./img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tecnico</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ordem de Serviço</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="cadastro.php">Novo Cliente</a>
                        <a class="dropdown-item" href="#">Impressora</a>

                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row ">
            <div class="col-md-2" id="Pesquisar">


            </div>
            <div class="col-md-8" id="Pesquisar">
                <h5>Pesquisa</h5>

            </div>
            <div class="col-md-2" id="Pesquisar">


            </div>
            <div class="col-md-2" id="Pesquisar">

            </div>
            <div class="col-md-6" id="Pesquisar">
                <input type="text" name="" id="input" class="form-control" placeholder="Pesquisar Clientes">
            </div>
            <div class="col-md-4" id="Pesquisar">

            </div>

        </div>
        <div class="row">
            <div class="col-md-2">
                <h5>Clientes</h5>

            </div>
            <div class="col-md-6">


            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-outline-primary">
                    <a href="cadastro.php" style="text-decoration: none;"><i class="bi bi-person-plus-fill"></i><span style="padding: 5px;">Novo Cliente</span></a>

                </button>
                <button type="button" class="btn btn-outline-warning">
                    <i class="bi bi-arrow-repeat"></i>

                    Atualizar</button>

            </div>

        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($receber_cadastro = mysqli_fetch_array($query_cadastro)) {
                        $idcliente = $receber_cadastro['idcliente'];
                        $nome = $receber_cadastro['nome'];
                        $email = $receber_cadastro['email'];
                        $telefone = $receber_cadastro['telefone']

                    ?>

                        <tr>
                            <td scope="row"><?php echo $idcliente ?></td>
                            <td><?php echo $nome ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $telefone ?></td>
                            <td>
                                <a style="margin-right: 5px; font-size:18px" href="visualizar.php?view=<?php echo $idcliente;?>"><i class="bi bi-eye"></i></a>
                                <a style="margin-right: 5px" href=><i class="bi bi-pen"></i></a>
                               <a style="margin-right: 5px"href="excluir.php?del=<?php echo $idcliente;?>"><i class="bi bi-trash"></i></a>
                                
                        </tr>
                </tbody>
            <?php }; ?>
            </table>

        </div>
        <div class='visualizar'>
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Clientes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <?php
                            $buscar_cadastro = "SELECT * FROM clientes WHERE idcliente = '$idcliente' ";
                            $query_visualizar = mysqli_query($conexao, $buscar_cadastro);
                            while ($receber_cadastro = mysqli_fetch_array($query_visualizar)) {
                                $idcliente = $receber_cadastro['idcliente'];
                                $nome = $receber_cadastro['nome'];
                            };
                            echo $nome;

                            ?>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
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