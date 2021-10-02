<?php include("db/conexao.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo-padroa.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Sistema de Agenda v1.0</title>
</head>
<body>
    <header class="bg-dark">
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a href="#" class="navbar-brand">
                    <img src="./img/logo_agendador.png" alt="sis-Agendador" width="120">
                </a>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="index.php?menuop=home" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="index.php?menuop=contatos" class="nav-link">Contato</a></li>
                        <li class="nav-item"><a href="index.php?menuop=tarefas" class="nav-link">Tarefas</a></li>
                        <li class="nav-item"><a href="index.php?menuop=eventos" class="nav-link">Eventos</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        
    </header>
    <hr>
    <main>
        <div class="container">
        <?php 
            $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home"; 
            switch ($menuop) {
                case 'home':
                    include("paginas/home/home.php");
                    break;
                case 'contatos':
                    include("paginas/contatos/contatos.php");
                    break;
                case 'novo':
                    include("paginas/contatos/novo.php");
                    break;
                case 'inserir_contato':
                    include("paginas/contatos/inserir_contato.php");
                    break;
                case 'editar_contato':
                    include("paginas/contatos/editar_contato.php");
                    break;
                case 'atualizar_contato':
                    include("paginas/contatos/atualizar_contato.php");
                    break;
                case 'excluir_contato':
                    include("paginas/contatos/excluir_contato.php");
                    break;
                case 'tarefas':
                    include("paginas/tarefas/tarefas.php");
                    break;
                case 'eventos':
                    include("paginas/eventos/eventos.php");
                    break;
                default:
                    include("paginas/home/home.php");
                    break;
            } 
        ?>

        </div>
          
    </main>

    <footer class="container-fluid fixed-bottom bg-dark">
            <div class="text-center">SIS Agendador V1.0</div>
    </footer>
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

        
    </body>
</html>