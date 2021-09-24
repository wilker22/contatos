<?php

include("config.php");

$conexao = mysqli_connect(SERVIDOR, USUARIO,SENHA,BANCO) or die ("Erro na conexão PHP com o banco de dados" . mysqli_connect_error());