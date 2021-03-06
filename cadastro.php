<?php

session_start();


?>




<!doctype html>
<html lang="pt-br">

<head>
    <title>Cadastro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">

    <!--Arquivo Css-->
    <link rel="stylesheet" href="./Stylo/clientes.css">
    <link rel="stylesheet" href="./sweetalert/sweetalert2.min.css">

</head>

<body>
    <div class="container">

        <div class="card">
            <div class="card-header bg-primary ">
                <h5>Novo Cliente</h5>
            </div>
            <div class="card-body">
                <form class="needs-validation" novalidate id="cadastro" action="cadastrar.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Nome Completo </label>
                            <input type="text" class="form-control" name="nome" placeholder="Digite o Nome" required>
                            <div class="invalid-feedback">
                                Por favor, informe um Nome.
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">CPF/CNPJ</label>
                            <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="CPF ou CNPJ" required>
                            <div class="invalid-feedback">
                                Por favor, informe um Cpf ou Cnpj.
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="00000-0000" required>
                            <div class="invalid-feedback">
                                Por favor, informe um Telefone.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Endere??o</label>
                            <input type="text" class="form-control" name="endereco" id="inputAddress" placeholder="Rua das Figueiras, n?? 0" required>
                            <div class="invalid-feedback">
                                Por favor, informe um Endere??o.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">E-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail" required>
                            <div class="invalid-feedback">
                                Por favor, informe um E-mail.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="inputCity" placeholder="Cidade" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEstado">Estado</label>
                            <select id="inputEstado" name="estado" class="custom-select" required>
                                <option selected>Escolher...</option>
                                <option>SP</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCEP">CEP</label>
                            <input type="text" class="form-control" name="cep" id="inputCEP" placeholder="Cep" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputImpressora">Modelo da Impressora</label>
                            <select id="inputImpressora" class="form-control">
                                <option selected>Escolher...</option>
                                <option value="1">OKI B431DN</option>
                                <option value="2">OKI ES4132</option>
                                <option value="3">OKI C33641</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCEP">Quantidade</label>
                            <input type="number" class="form-control" name="quantidade" id="quantidade" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCEP">Numero de S??rie</label>
                            <input type="text" class="form-control" name="quantidade" id="quantidade" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputImpressora">Tipo de Contrato</label>
                            <select id="inputImpressora" class="form-control">
                                <option selected>Escolher...</option>
                                <option value="1">Manuten????o</option>
                                <option value="2">Loca????o</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputImpressora">Valor Do Contrato</label>
                            <input type="text" class="form-control" name="valor" id="valor" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCEP">Data Inicio </label>
                            <input type="date" class="form-control" name="data" id="data" placeholder="DD/MM/AA" required>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="menu.php">Voltar</a>



                </form>

                <div>
                    <?php

                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }

                    ?>
                </div>

            </div>


        </div>
    </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./sweetalert/sweetalert2.all.min.js"></script>
    <script src="./codigo.js"></script>

</body>

</html>