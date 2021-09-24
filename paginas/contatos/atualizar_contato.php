<header>
    <h3>Atualizar Contato</h3>
</header>

<?php 
    $id                 = mysqli_real_escape_string($conexao, $_POST["id"]);
    $nomeContato        = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
    $emailContato       = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
    $telefoneContato    = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
    $endereco           = mysqli_real_escape_string($conexao, $_POST["endereco"]);
    $sexoContato        = mysqli_real_escape_string($conexao, $_POST["sexoContato"]);
    $dataNascContato    = mysqli_real_escape_string($conexao, $_POST["dataNascContato"]);

    $sql = "UPDATE tbcontatos 
            SET
                nomeContato =  '$nomeContato', 
                emailContato = '$emailContato',
                telefoneContato =  '$telefoneContato',
                endereco = '$endereco',
                sexoContato = '$sexoContato', 
                dataNascContato = '$dataNascContato'
            WHERE id = '$id'";
    
    mysqli_query($conexao, $sql) or die ("Erro ao executar a consulta  //" . mysqli_error($conexao));

    echo "Contato Atualizado com sucesso!!";

?>