<?php include("db/conexao.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Agenda v1.0</title>
</head>
<body>
    <header>
        <h1>Sistema de Agenda v1.0</h1>
        
        <nav>
            <a href="index.php?menuop=home">Home</a>
            <a href="index.php?menuop=contatos">Contatos</a>
            <a href="index.php?menuop=tarefas">Tarefas</a>
            <a href="index.php?menuop=eventos">Eventos</a>
        </nav>
    </header>
    <hr>
    <main>
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

          
    </main>