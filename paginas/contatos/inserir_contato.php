<header>
    <h3>Inserir Contato</h3>
</header>

<?php 
    $nomeContato        = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
    $emailContato       = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
    $telefoneContato    = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
    $endereco           = mysqli_real_escape_string($conexao, $_POST["endereco"]);
    $sexoContato        = mysqli_real_escape_string($conexao, $_POST["sexoContato"]);
    $dataNascContato    = mysqli_real_escape_string($conexao, $_POST["dataNascContato"]);

    $sql = "INSERT INTO tbcontatos(
       nomeContato,
       emailContato,
       telefoneContato,
       endereco,
       sexoContato,
       dataNascContato)
    VALUES (
        '$nomeContato',
        '$emailContato',
        '$telefoneContato',
        '$endereco',
        '$sexoContato', 
        '$dataNascContato'

    )";

    mysqli_query($conexao, $sql) or die ("Erro ao executar a consulta  //" . mysqli_error($conexao));

echo "Contato inserido   com sucesso!!";

?>