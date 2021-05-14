<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
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
                        <a class="dropdown-item" href="#">Novo Cliente</a>
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
                    <i class="bi bi-person-plus-fill"></i><span style="padding: 5px;">Novo Cliente</span>

                </button>
                <button type="button" class="btn btn-outline-warning">
                    <i class="bi bi-arrow-repeat"></i>

                    Atualizar</button>

            </div>

        </div>
        <section>
            <div class="row">
               
                <div class="col-md-11">
                    <table class="table style=" margin-top: 10px;">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Cnpj</th>
                                <th scope="col">Endereço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Faria Veiculos</td>
                                <td>000004578/0001</td>
                                <td>Av Rio Branco 10004</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </section>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>