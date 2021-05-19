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
                <form  id="cadastro" action="cadastrar.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Nome Completo </label>
                            <input type="text" class="form-control"  name="nome" placeholder="Digite seu Nome">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">CPF/CNPJ</label>
                            <input type="text" class="form-control" name="cnpj" placeholder="CPF ou CCNPJ">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Telefone</label>
                            <input type="tel" class="form-control" name="telefone"  placeholder="00000-0000">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="inputAddress" placeholder="Rua das Figueiras, nº 0">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">E-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="inputCity" placeholder="Cidade">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEstado">Estado</label>
                            <select id="inputEstado" name="estado" class="form-control">
                                <option selected>Escolher...</option>
                                <option>SP</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCEP">CEP</label>
                            <input type="text" class="form-control" name="cep" id="inputCEP" placeholder="Cep">
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
                            <input type="number" class="form-control" name="quantidade" id="quantidade">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCEP">Numero de Série</label>
                            <input type="text" class="form-control" name="quantidade" id="quantidade">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputImpressora">Tipo de Contrato</label>
                            <select id="inputImpressora" class="form-control">
                                <option selected>Escolher...</option>
                                <option value="1">Manutenção</option>
                                <option value="2">Locação</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputImpressora">Valor Do Contrato R$</label>
                            <input type="text" class="form-control" name="valor" id="valor">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCEP">Data Inicio </label>
                            <input type="datetime-local" class="form-control"  name="data" id="data" placeholder="DD/MM/AA">
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    
                </form>

            </div>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./sweetalert/sweetalert2.all.min.js"></script>
    <script src="./codigo2.js"></script>
</body>

</html>