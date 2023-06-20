<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">

        <div class="container-fluid">

            <a class="navbar-brand" href="#">Cadastro</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="?page=listar">Listar Usuários</a>

                    </li>



                </ul>

            </div>

        </div>

    </nav>

    <div class="container">

        <div class="row">

            <div class="col mt-5">


                <!--===============CÓDIGO PHP====================-->
                <?php
                
                include("config.php");
                
        switch(@$_REQUEST["page"]){//esse arroba previne erros
            case "novo": //ex. se o usuario clicar em novo chame este include↓↓

            include("novo-usuario.php"); //o include chama páginas em php criadas ele irá linkar a página para uma próxima

            break;
            
            case "listar": //se o usuario clicar em listar chame este include↓

                include("listar-usuario.php");

                break;

                case "salvar":

                    include("salvar-usuario.php");

                    break;
                    
                    case "editar":

                        include("editar-usuario.php");
    
                        break;
                    
                default:
                
                echo "<h1>Bem vindos!</h1>";
                
        }
                ?>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

    </script>

</body>

</html>